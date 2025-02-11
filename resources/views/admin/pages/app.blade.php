@extends('admin.layout.admin')

@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Modal -->
    <div class="modal fade show" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true" style="display: none; z-index: 1050;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModalLabel">Blog Yazısı</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="blogForm">
                        @csrf
                        <input type="hidden" id="blogId">
                        <div class="mb-3">
                            <label for="title" class="form-label">Başlık</label>
                            <input type="text" class="form-control" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">İçerik</label>
                            <textarea class="form-control" id="content" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Ana İçerik -->
    <div class="container mt-4">
        <h2>Blog Yönetimi</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#blogModal" onclick="clearForm()">
            Yeni Yazı Ekle
        </button>

        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Başlık</th>
                <th>İçerik</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody id="blogTableBody">
            @forelse($pages as $page)
                <tr id="page-{{ $page->id }}">
                    <td>{{ $page->id }}</td>
                    <td>{{ Str::limit($page->title, 30) }}</td>
                    <td>{{ Str::limit($page->content, 50) }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="editBlog({{ $page->id }})">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="deleteBlog({{ $page->id }})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Henüz hiç blog yazısı bulunmamaktadır.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Scriptler -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function clearForm() {
            $('#blogId').val('');
            $('#title').val('');
            $('#content').val('');

            const blogModalEl = document.getElementById('blogModal');
            const blogModal = bootstrap.Modal.getInstance(blogModalEl) || new bootstrap.Modal(blogModalEl);
            blogModal.show();
        }

        $('#blogForm').submit(function(e) {
            e.preventDefault();
            const id = $('#blogId').val();
            const url = id ? `/admin/pages/update/${id}` : `/admin/pages/store`;

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    title: $('#title').val(),
                    content: $('#content').val()
                },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr) {
                    alert('İşlem sırasında bir hata oluştu: ' + xhr.responseText);
                }
            });
        });

        function editBlog(id) {
            $.get(`/admin/pages/edit/${id}`)
                .done(function(page) {
                    $('#blogId').val(page.id);
                    $('#title').val(page.title);
                    $('#content').val(page.content);

                    const blogModalEl = document.getElementById('blogModal');
                    const blogModal = bootstrap.Modal.getInstance(blogModalEl) || new bootstrap.Modal(blogModalEl);
                    blogModal.show();
                })
                .fail(function() {
                    alert('Veri alınamadı. Lütfen tekrar deneyin.');
                });
        }

        function deleteBlog(id) {
            if (confirm('Bu yazıyı kalıcı olarak silmek istediğinize emin misiniz?')) {
                $.ajax({
                    url: `/admin/pages/delete/${id}`,
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $(`#page-${id}`).remove();
                    },
                    error: function(xhr) {
                        alert('Silme işlemi başarısız: ' + xhr.responseText);
                    }
                });
            }
        }

        document.getElementById('blogModal').addEventListener('shown.bs.modal', function () {
            $(this).css('z-index', 1051);
        });
    </script>
@endsection
