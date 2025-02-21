@extends('admin.layout.admin') <!-- Admin layout'unuzu dahil edin -->

@section('content')
    <div class="container mt-5">
        <h2>Gönderilen Mesajlar</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Ad</th>
                <th>E-posta</th>
                <th>Mesaj</th>
                <th>Gönderilme Tarihi</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d.m.Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Hiç mesaj yok.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
