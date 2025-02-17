@extends('admin.layout.admin')
@section('content')

    <div class="container">
        <h1>Blog Yazısını Düzenle</h1>

        <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Başlık</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
                <label for="content">İçerik</label>
                <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Resim</label>
                @if($post->image)
                    <img src="{{ asset('uploads/' . $post->image) }}" alt="{{ $post->title }}" width="100" class="mb-2">
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success mt-2">Güncelle</button>
        </form>

    </div>

@endsection
