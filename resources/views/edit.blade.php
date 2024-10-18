<!-- resources/views/cast/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Pemain Film</h1>

    <form action="{{ route('cast.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" value="{{ $cast->nama }}" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" name="umur" value="{{ $cast->umur }}" required>
        </div>

        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" name="bio">{{ $cast->bio }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
