@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Tambah Mahasiswa</h2>

    <form action="/mahasiswa/store" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama') }}">

            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                value="{{ old('nim') }}">

            @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"
                value="{{ old('jurusan') }}">

            @error('jurusan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Semester</label>
            <input type="number" name="semester" class="form-control @error('semester') is-invalid @enderror"
                value="{{ old('semester') }}">

            @error('semester')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="/mahasiswa" class="btn btn-secondary">
            Kembali
        </a>

    </form>
@endsection
