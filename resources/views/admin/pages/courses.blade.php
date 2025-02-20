@extends('admin.layout.admin')
    @section('content')

        <div class="container">
            <h1>Kurs Listesi</h1>

            <!-- Yeni Kurs Ekle Formu -->
            <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Başlık</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Açıklama</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="drive_link">Link</label>
                    <input type="text" name="drive_link" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="image">Resim</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-2">Ekle</button>
            </form>

            <!-- Kurs Listesi -->
            <div class="mt-5">
                <h2>Kurslar</h2>
                @if ($courses->isEmpty())
                    <!-- Eğer Kurs Yoksa -->
                    <div class="alert alert-info">
                        Görüntülenecek kurs bulunamadı!
                    </div>
                @else
                    <!-- Eğer Kurs Varsa Tablo -->
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>Link</th>
                            <th>Resim</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ Str::limit($course->description, 50) }}</td>
                                <td>
                                    <a href="{{ $course->drive_link }}" target="_blank">Kurs Linki</a>
                                </td>
                                <td>
                                    @if ($course->image)
                                        <img src="{{ asset('uploads/' . $course->image) }}" alt="{{ $course->title }}" style="width: 50px; height: 50px;
                                     object-fit: cover; border-radius: 5px;"
                                        >
                                    @else
                                        Görsel Yok
                                    @endif
                                </td>
                                <td>
                                    {{ $course->created_at ? $course->created_at->format('d.m.Y H:i') : 'Tarih Yok' }}
                                </td>
                                <td>
                                    <!-- düzenle Butonu -->
                                    <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Düzenle</a>

                                    <!-- Sil Butonu -->
                                    <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Bu kursu silmek istediğinizden emin misiniz?')">Sil
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
