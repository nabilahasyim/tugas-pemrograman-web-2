@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Edit Mahasiswa</h2>

    <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>

            <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama) }}">
        </div>

        <div class="mb-3">
            <label>NIM</label>

            <input type="text" name="nim" class="form-control" value="{{ old('nim', $mahasiswa->nim) }}">
        </div>

        <div class="mb-3">
            <label>Jurusan</label>

            <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mahasiswa->jurusan) }}">
        </div>

        <div class="mb-3">
            <label>Semester</label>

            <input type="number" name="semester" class="form-control" value="{{ old('semester', $mahasiswa->semester) }}">
        </div>

        <div class="mb-3">
            <label>Email</label>

            <input type="email" name="email" class="form-control" value="{{ old('email', $mahasiswa->email) }}">
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>
@endsection
