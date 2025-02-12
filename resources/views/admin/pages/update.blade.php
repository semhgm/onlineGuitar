@extends('admin.layout.admin')
@section('content')


    <div class="container">
        <h1>Sayfayı Düzenle</h1>

        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Güncelleme isteği için PUT isteği göndermemiz gerekiyor --}}

            <div class="mb-3">
                <label for="title" class="form-label">Başlık</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">İçerik</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $page->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Güncelle</button>
            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Geri</a>
        </form>
    </div>









@endsection
