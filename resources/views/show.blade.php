<!-- resources/views/cast/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detail Pemain Film</h1>

    <p><strong>Nama:</strong> {{ $cast->nama }}</p>
    <p><strong>Umur:</strong> {{ $cast->umur }}</p>
    <p><strong>Bio:</strong> {{ $cast->bio }}</p>

    <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endsection
