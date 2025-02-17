@extends('admin.layout.admin')
@section('content')

    <div class="container">
        <h1>Servisi Düzenle</h1>

        <!-- Başarı Mesajı -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Güncelleme Formu -->
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control" required value="{{ $service->title }}">
            </div>
            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea name="content" class="form-control" required>{{ old('content', $service->content) }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Resim</label>
                @if ($service->image)
                    <div class="mb-2">
                        <img src="{{ asset('uploads/' . $service->image) }}" alt="{{ $service->title }}" width="100">
                    </div>
                @endif
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Kaydet</button>
        </form>
    </div>

@endsection
