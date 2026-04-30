@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Data Mahasiswa</h2>

    <a href="/mahasiswa/create" class="btn btn-primary mb-3">
        Tambah Mahasiswa
    </a>

    <table class="table table-bordered">

        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Email</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>{{ $mhs->email }}</td>

                    <td>

                        <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/mahasiswa/{{ $mhs->id }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>

                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
