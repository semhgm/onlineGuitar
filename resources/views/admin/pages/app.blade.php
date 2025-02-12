@extends('admin.layout.admin')

@section('content')

    <div class="container">
        <h1>Sayfa Listesi</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Başlık</th>
                <th>İçerik</th>
                <th>İşlem</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->content }}</td>
                    <td>
                        <a href="{{route('admin.pages.edit',$page->id)}}" class="btn btn-primary btn-sm">Düzenle</a>


                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
