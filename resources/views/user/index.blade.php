@extends('layouts.main')

@section('title')
    User
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header">
      User
    </div>
    <div class="card-body">
        @if (session('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>       
        @endif
      <table class="table table-striped mt-2 text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Atasan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($data as $item)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->jabatan }}</td>
                <td>{{ $item->atasan }}</td>
                <td>
                    <a class="btn btn-warning text-white" href="{{ url('/user') }}/{{ $item->id }}/edit">Ubah</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </div>
@endsection