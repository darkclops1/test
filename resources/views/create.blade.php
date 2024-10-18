<!-- resources/views/cast/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Tambah Pemain Film</h1>

    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" required>
        </div>

        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" name="umur" required>
        </div>

        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" name="bio"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
