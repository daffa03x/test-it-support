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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
            </svg>
        </button>        
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
                    <a class="btn btn-warning text-white" href="{{ url('/admin') }}/{{ $item->id }}/edit">Ubah</a>
                    <form method="POST" class="d-inline" action="{{ url('admin') }}/{{ $item->id }}">
                        @method('DELETE')
                        @csrf
                        <button onclick="confirm('Apakah Yakin Untuk Hapus Data ?')" type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {!! $data->links() !!}
    </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('/admin') }}">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                      </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukan Alamat Anda"></textarea>
                </div>
                <div class="mb-3">
                    <label for="Jabatan" class="form-label">Jabatan</label>
                    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="jabatan_id">
                        <option selected>-- Pilih Jabatan --</option>
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Atasan" class="form-label">Atasan</label>
                    <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="atasan_id">
                        <option selected>-- Pilih Atasan --</option>
                        @foreach ($atasan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection