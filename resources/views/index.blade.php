<!-- resources/views/cast/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Pemain Film</h1>

    <a href="{{ route('cast.create') }}" class="btn btn-primary">Tambah Pemain Baru</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cast as $pemain)
                <tr>
                    <td>{{ $pemain->nama }}</td>
                    <td>{{ $pemain->umur }}</td>
                    <td>
                        <a href="{{ route('cast.show', $pemain->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('cast.edit', $pemain->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('cast.destroy', $pemain->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
