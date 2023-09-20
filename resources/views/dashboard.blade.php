@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
  <div class="col-lg-4">
    <div class="card mt-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Jumlah Seluruh Pengguna</h6>
        <div class="row">
          <div class="col-lg-8">
              <img class="ms-4" width="45%" src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div class="col-lg-4">
              <p class="card-text h2 mt-3">{{ $jml_user }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card mt-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Jumlah Manager</h6>
        <div class="row">
          <div class="col-lg-8">
              <img class="ms-4" width="45%" src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div class="col-lg-4">
              <p class="card-text h2 mt-3">{{ $jml_manager }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card mt-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Jumlah Staff</h6>
        <div class="row">
          <div class="col-lg-8">
              <img class="ms-4" width="45%" src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div class="col-lg-4">
              <p class="card-text h2 mt-3">{{ $jml_staff }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card mt-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Jumlah Kontrak</h6>
        <div class="row">
          <div class="col-lg-8">
              <img class="ms-4" width="45%" src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div class="col-lg-4">
              <p class="card-text h2 mt-3">{{ $jml_kontrak }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card mt-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Jumlah Magang</h6>
        <div class="row">
          <div class="col-lg-8">
              <img class="ms-4" width="45%" src="{{ asset('img/user.png') }}" alt="">
          </div>
          <div class="col-lg-4">
              <p class="card-text h2 mt-3">{{ $jml_magang }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection