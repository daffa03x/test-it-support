@extends('layouts.main')

@section('title')
    Ubah User
@endsection

@section('content')
<div class="card mt-4">
    <div class="card-header">
      Ubah User
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/admin') }}/{{ $data->id }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" value="{{ $data->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                @if ($data->jenis_kelamin == 'Laki-Laki')
                <div class="form-check form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki" checked>
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
                @else
                <div class="form-check form-check-inline mt-2">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan" checked>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                  </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukan Alamat Anda">{{ $data->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label for="Jabatan" class="form-label">Jabatan</label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="jabatan_id">
                    <option>-- Pilih Jabatan --</option>
                    @foreach ($jabatan as $item)
                        @if ($item->id == $data->jabatan_id)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>  
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Atasan" class="form-label">Atasan</label>
                <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="atasan_id">
                    <option>-- Pilih Atasan --</option>
                    @foreach ($atasan as $item)
                        @if ($item->id == $data->atasan_id)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>  
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection