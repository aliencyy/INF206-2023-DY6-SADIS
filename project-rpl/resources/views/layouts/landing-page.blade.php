<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SADIS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/app.css"/>
    <link rel="stylesheet" href="resources/js/bootstrap.js">
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.js'])
  </head>

  <header>

    <!-- NAVBAR -->
    <nav class="navbar bg-body-tertiary">
      <!-- Background warna header-->
      <!-- Logo -->
      <div class="container" style= "background-color: #D9F9EE;">
        <a class="navbar-brand" href="#">
          <img src="img/Logo-SADIS.png" alt="SADIS" width="102" height="95" >
          <span class="fs-2 fw-bold" style="color: #0E8DC9; margin-left: 10px; font-family: 'Inter', sans-serif;">SADIS</span>
        </a>

        <!-- Button navbar -->
        <div class="button-navbar" >
          <button type="button" class="btn btn-primary rounded-5 border-0 mx-3"  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Daftar / Masuk</button>
          <button type="button" class="btn btn-primary rounded-5 border-0 mx-3"  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Mitra</button>
          <button type="button" class="btn btn-primary rounded-5 border-0 "  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">About Us</button>
        </div>
      </div>
    </nav>
  </header>
  <!-- END Button Navbar -->
  <!-- END NAVBAR -->

  
  <body style="background-color: #D9F9EE;">

    <!-- Tengah Landing Page-->
    <div class="container overflow-hidden text-auto" >
      <div class="row gx-2">
        <div class="col">
         <div class="p-1">
          <h1 class="fw-bold " style="color: #558E7A; margin-top: 25%; font-size: 44px; font-family: 'Inter', sans-serif;">Mewujudkan Lingkungan Bebas Sampah B3, Bersama Kami.</h1>
              <p class="mb-0 fs-5">SADIS Merupakan Sistem Informasi Manajemen Sampah Medis B3</p>

              <!-- Tombol Baca Selengkapnya  (Scroll spy)-->
              <nav id="navbar-landing">
                <div class="button-navbar" style="margin-top: 20px;">
                  <a href="#scrollB3">
                    <button type="button" class="btn btn-primary rounded-5 border-0 "  style="background-color: #A3D8BF; -webkit-text-fill-color: black; --bs-btn-padding-y: .5rem; --bs-btn-padding-x: 1.5rem; --bs-btn-font-size: 1.25rem;">Baca Selengkapnya</button>
                  </a>
                </div>
              </nav>

              <!-- END Tombol Baca Selengkapnya -->
         </div>
        </div>
        <div class="col mm-3 ">
          <div class="p-1"> <img src="img/tong-sampah.png" alt="Home Pics" width="724" height="542" ></div>
        </div>
      </div>
    </div>

    <!-- END Tengah Landing Page-->

    <!-- Bagian Terakhir Landing Page-->

    <!-- Judul Kedua (target scroll spy)-->

    <div data-bs-spy="scroll" data-bs-target="#navbar-landing" class="container">
    <h1 id="scrollB3" class="fw-bolder" style="color: #558E7A; margin-top: 35%; font-size: 50px; align-content: center; text-align: center; font-family: 'Inter', sans-serif;">
    Kenali Sampah Yang Mengandung B3!</h1>
  </div>

  <!-- END Judul Kedua -->

  <!-- Gambar contoh B3-->

  <div class="flex-wrap mx-4 ">
    <div class="row m-4 " style="margin-top: 3%;  ;">
      <div class="col-3 m-2"><img src="img/logo-suntik.png" alt="Logo Suntik" width="275px" height="265px"></div>
      <div class="col-3 m-2"><img src="img/logo-hotel.png" alt="Logo Hotel" width="270px" height="250px"></div>
      <div class="col-3 m-2"><img src="img/logo-eletronik.png" alt="Logo Barang" width="270px" height="250px"></div>
      <div class="col-2 m-2" ><img src="img/logo-manufaktur.png" alt="Logo Manufaktur" width="270px" height="250px"></div>
  </div>

  <!-- END Gambar Contoh B3 -->

  <!-- Tulisan Keterangan Judul Ketiga-->

  <div class="row flex-wrap" style="text-align: center;">
    <div class="col-3 m-2"><h1 class="fw-bolder fs-2" style="color: #558E7A; ">MEDIS</h1></div>
    <div class="col-3 m-2"><h1 class="fw-bolder fs-2" style="color: #558E7A;">PERHOTELAN</h1></div>
    <div class="col-3 m-2"><h1 class="fw-bolder fs-2" style="color: #558E7A;">ELEKTRONIK</h1></div>
    <div class="col-2 m-2" ><h1 class="fw-bolder fs-2" style="color: #558E7A;">MANUFAKTUR</h1></div>

  <!-- END Tulisan Keterangan Judul Ketiga-->

  <div class="row flex-wrap " style="position: relative; margin-bottom: 10%;">
    <div class="col-3 m-2 ms-auto"><p class="fs-3" style="color: black; ">Masker bekas pakai, jarum suntik, obat-obatan expired</p></div>
    <div class="col-3 m-2 ms-auto"><p class="fs-3" style="color: black;">Lampu bekas, baterai bekas</p></div>
    <div class="col-3 m-2 ms-auto"><p class=" fs-3" style="color: black;">Televisi rusak, ponsel rusak</p></div>
    <div class="col-2 m-2 ms-auto" ><p class="fs-3" style="color: black; text-align: center;">Sampo, sabun, kosmetik yang expired</p></div>

    <!-- END Bagian Terakhir Landing Page-->
    
  </body>
</html>
