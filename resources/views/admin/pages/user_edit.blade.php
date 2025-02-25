@extends('admin.layout.admin')
@section('content')



    <div class="container">
        <h1>Kullanıcıyı düzenle</h1>

        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">İsim</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Mail</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Şifre (Değiştirmek istemiyorsanız boş bırakın)</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-success mt-2">Güncelle</button>
        </form>
    </div>
@endsection
