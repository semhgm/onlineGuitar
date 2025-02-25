@extends('admin.layout.admin')
@section('content')
    <div class="container">
    <h1>Kullanıcı Ekle Düzenle</h1>

    <!-- Yeni kullanıcı ekle formu -->
    <form action="{{ route('admin.user.profile') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Email">Email</label>
            <textarea name="email" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="Password">şifre</label>
            <textarea name="password" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Ekle</button>

        @if (session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
    </form>

    <!-- Kullanıcı Listesi -->
    <div class="mt-5">
        <h2>Kullanıcı Listesi</h2>
        @if ($user->isEmpty())
            <!-- Eğer Blog Yazısı Yoksa -->
            <div class="alert alert-info">
                Görüntülenecek user yok!
            </div>
        @else
            <!-- Eğer Blog Yazısı Varsa Tablo -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>İsim</th>
                    <th>Kullanıcı Adı</th>
                    <th>Şifre</th>
                    <th>Oluşturulma Tarihi</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($user as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>
                            {{ $user->created_at ? $user->created_at->format('d.m.Y H:i') : 'Tarih Yok' }}
                        </td>
                        <td>
                            <!-- düzenle Butonu -->
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-warning">Düzenle</a>
                            <!-- Sil Butonu -->
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')">Sil
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
