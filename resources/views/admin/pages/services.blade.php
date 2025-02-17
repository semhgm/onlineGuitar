@extends('admin.layout.admin')
@section('content')

    <div class="container">
        <h1>Servisler</h1>

        <!-- Başarı Mesajı -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Yeni Servis Ekle Formu -->
        <form action="{{ route('admin.services') }}" method="POST" enctype="multipart/form-data">

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
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

        </form>

        <!-- Servis Listesi -->
        <div class="mt-5">
            <h2>Servis Listesi</h2>
            @if ($services->isEmpty())
                <!-- Eğer Servis Yoksa -->
                <div class="alert alert-info">
                    Görüntülenecek servis yok!
                </div>
            @else
                <!-- Eğer Servis Varsa Tablo -->
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Başlık</th>
                        <th>İçerik</th>
                        <th>Resim</th>
                        <th>Oluşturulma Tarihi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->content }}</td>
                            <td>
                                @if ($service->image)
                                    <img src="{{ asset('uploads/' . $service->image) }}" alt="{{ $service->title }}" width="50">
                                @else
                                    Görsel Yok
                                @endif
                            </td>
                            <td>
                                {{ $service->created_at ? $service->created_at->format('d.m.Y H:i') : 'Tarih Yok' }}
                            </td>
                            <td>
                                <!-- Düzenle Butonu -->
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Düzenle</a>

                                <!-- Sil Butonu -->
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Bu servisi silmek istediğinizden emin misiniz?')">Sil
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
