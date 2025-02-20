@extends('admin.layout.admin')
@section('content')

    <div class="container">
        <h1>Ders Düzenle</h1>

        <!-- Kurs Düzenleme Formu -->
        <form action="{{ route('admin.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Laravel put metodunu kullanabilmek için ekliyoruz -->

            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
            </div>

            <div class="form-group">
                <label for="description">Açıklama</label>
                <textarea name="description" class="form-control" required>{{ $course->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="drive_link">Link</label>
                <input type="text" name="drive_link" class="form-control" value="{{ $course->drive_link }}" required>
            </div>

            <div class="form-group">
                <label for="image">Yeni Resim (İsterseniz Güncelleyebilirsiniz)</label>
                <input type="file" name="image" class="form-control">
                @if ($course->image)
                    <div class="mt-2">
                        <p>Mevcut Resim:</p>
                        <img src="{{ asset('uploads/' . $course->image) }}" alt="{{ $course->title }}" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                @else
                    <p>Resim Yok</p>
                @endif
            </div>

            <button type="submit" class="btn btn-success mt-2">Güncelle</button>
        </form>
    </div>

@endsection

