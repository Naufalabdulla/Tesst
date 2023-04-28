@extends('layouts.main')
@section('title')
@section('content')
<nav class="navbar navbar-expand-lg bg-body-warning">
    <div class="container-fluid">
      <div class="col-2">
        <a class="navbar-brand fw-bold fs-2" href="#">GAS</a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="col-8">
            <div class="navbar-nav justify-content-center">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Tentang Gas</a>
              <a class="nav-link" href="#">Fitur</a>
              <a class="nav-link" href="#">Daftar</a>
              <a class="nav-link" href="#">Karir</a>
            </div>
        </div>

        <div class="col-2">
            <div class="justify-content-end">
                <button class="btn btn-outline-success">here</button>
            </div>
        </div>
      </div>
    </div>
  </nav>

{{---------------- Banner ----------------}}

    <div class="col-12 mt-5" style="height: 100vh;">
        <div class="row">
            <div class="col-6 bg-pirmary">
                <div class="col d-flex align-items-center">s</div>
                <div class="d-flex align-items-end">...</div>
                <h1 class="text-white fw-bold">Bergabung dengan GAS</h1>
                <img src="./google-play-badge-logo.svg" alt="" style="max-height: 70px;">
            </div>
            <div class="col-6">
                <div class="align-items-center">
                    <img src="./banner.jpg" alt="" style="max-height: 70vh;">
                </div>
            </div>
        </div>
    </div>


{{---------------- Fitur ----------------}}


    <div class="d-flex justify-content-center g-3">
        <div class="v-stack">
            <h1 class="text-center fw-bold fs-2">Popular Fitur</h1>
            <p>Nikmati berbagai fitur menarik yang kami berikan</p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Mesin Kasir</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Scan Barcode</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Daftar Kurir</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Stock Opname</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Print Thermal</p>
            </div>
        </div>
    </div>

{{-- Kategori toko --}}


    <div class="d-flex justify-content-center g-3">
        <div class="v-stack">
            <h1 class="text-center fw-bold fs-2">Popular Fitur</h1>
            <p>Nikmati berbagai fitur menarik yang kami berikan</p>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Mesin Kasir</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Scan Barcode</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Daftar Kurir</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Stock Opname</p>
            </div>
        </div>
        <div class="card me-2" style="width: 13rem;">
            <img src="./person-4.png" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Print Thermal</p>
            </div>
        </div>
    </div>

{{-- promotion --}}

    <div class="d-flex justify-content-center">
        <div class="row gx-5">
            <div class="col-6">
                <div class="col" style="max-width: 12rem">
                <img src="./women.png" alt=""></div>
            </div>
            <div class="col-6">
                <h1>daftarkan tokomo sekarang juga</h1>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="row gx-5">
            <div class="col-6">
                <h1>daftarkan tokomo sekarang juga</h1>
            </div>
            <div class="col-6">
                s
            </div>
        </div>
    </div>


{{-- About --}}

    <div class="d-flex justify-content-center g-3">
        <div class="v-stack">
            <h1 class="text-center fw-bold fs-2">Tentang Kami</h1>
            <p class="text-center" style="max-width: 30rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque doloribus velit recusandae sed saepe dolorem quam autem laboriosam excepturi minima?</p>
        </div>
    </div>


    <div class="d-flex justify-content-center g-3">
        <div class="v-stack">
            <h1 class="text-center fw-bold fs-2">Temukan karier impianmu</h1>
            <p class="text-center" style="max-width: 30rem;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo nulla pariatur consequuntur!</p>
        </div>
    </div>
    
{{-- detail --}}

<div class="row gx-5">
    <div class="col-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./person-4.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Marketing Communication</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque tempore distinctio esse doloribus itaque quasi magnam, maiores animi adipisci.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./person-4.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Marketing Communication</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque tempore distinctio esse doloribus itaque quasi magnam, maiores animi adipisci.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="row gx-5">
    <div class="col-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./person-4.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Marketing Communication</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque tempore distinctio esse doloribus itaque quasi magnam, maiores animi adipisci.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./person-4.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Marketing Communication</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque tempore distinctio esse doloribus itaque quasi magnam, maiores animi adipisci.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection