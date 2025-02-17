@extends('admin.layout.admin')
@section('content')

    <div class="container">
        <h1>Blog Yazıları</h1>

        <!-- Yeni Blog Yazısı Ekle Formu -->
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Resim</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Ekle</button>

            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
        </form>

        <!-- Blog Yazıları Listesi -->
        <div class="mt-5">
            <h2>Blog Yazıları Listesi</h2>
            @if ($posts->isEmpty())
                <!-- Eğer Blog Yazısı Yoksa -->
                <div class="alert alert-info">
                    Görüntülenecek blog yazısı yok!
                </div>
            @else
                <!-- Eğer Blog Yazısı Varsa Tablo -->
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlık</th>
                        <th>İçerik</th>
                        <th>Resim</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ Str::limit($post->content, 50) }}</td>
                            <td>
                                @if ($post->image)
                                    <img src="{{ asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" style="width: 50px; height: 50px;
                                     object-fit: cover; border-radius: 5px;">
                                @else
                                    Görsel Yok
                                @endif
                            </td>
                            <td>
                                {{ $post->created_at ? $post->created_at->format('d.m.Y H:i') : 'Tarih Yok' }}
                            </td>
                            <td>
                                <!-- düzenle Butonu -->
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                                <!-- Sil Butonu -->
                                <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Bu blog yazısını silmek istediğinizden emin misiniz?')">Sil
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
