@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Daftar Agenda</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <style>
        /* Custom CSS for this page */
        .table {
            margin-top: 20px;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table th {
            background-color: #343a40;
            color: white;
        }
        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tr:hover {
            background-color: #d6d8db;
        }
        .alert-success {
            margin-top: 20px;
        }
        .back-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Aksi</th> <!-- Kolom untuk tombol Edit dan Delete -->
        </tr>
    </thead>
    <tbody>
        @foreach ($agendas as $agenda)
        <tr>
            <td>{{ $agenda->nama }}</td>
            <td>{{ $agenda->keterangan }}</td>
            <td>{{ $agenda->tanggal->format('d-m-Y') }}</td> <!-- Pastikan $agenda->tanggal adalah objek Carbon -->
            <td>
                <!-- Tombol Edit -->
                <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <!-- Tombol Delete -->
                <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus agenda ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


    <div class="back-button">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali </a>
    </div>
@endsection
