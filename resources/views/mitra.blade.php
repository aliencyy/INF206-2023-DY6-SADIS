@extends('layouts.app')
 
  @section('body')
  style="background-color: #D9F9EE"

  @endsection
 
 @section('content')

 <main role="main">
      
    <section class="jumbotron text-center " style="background-color:#D9F9EE ;">
      <div class="container">
        <h1 class="jumbotron-heading">MITRA</h1>
        <p class="lead">SADIS atau Sistem Pengolahan Sampah Medis B3 adalah sebuah situs web yang menyediakan layanan pembuangan Sampah B3 (Bahan Berbahaya dan Beracun), khususnya untuk sampah medis. Website ini bertujuan untuk mengurangi dan mengelola Sampah B3, khususnya medis agar tidak berceceran di sembarang tempat. 
          Berikut Mitra atau kerjasama yang dilakukan oleh kami</p>
    </section>

    <div class="album py-5" >
      <div class="container">

          <!-- Anggota 1 -->

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3; ">
              <img class="card-img-top" src="img/rs-baik.jpg" alt="Rumah Sakit 1" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-2" style="font-size: medium; text-align: center;">Rumah Sakit Daijoubu</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-4" style="font-size: small;text-align: center;">Jln. Jepang No. 3</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Anggota 2 -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/rs-baik.jpg" alt="Rumah Sakit 2" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-2" style="font-size: medium;text-align: center;">Rumah Sakit Matahari</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-4" style="font-size: small;text-align: center;">Jln. Matahari No. 1</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Anggota 3 -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/rs-baik.jpg" alt="Rumah Sakit 3" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-2" style="font-size: medium;text-align: center;">Rumah Sakit Bulan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-4" style="font-size: small;text-align: center;">Jln. Bulan No. 9</small>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Anggota 4 -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/rs-sehat.jpg" alt="Rumah Sakit 4" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-2" style="font-size: medium; text-align: center;">Rumah Sakit Sehat</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-4" style="font-size: small; text-align: center;">Jln. Topi No. 2</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Anggota 5 -->
          <div class="col-md-4" ms-4>
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow justify-content-center" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/pemerintah-prov.jpg" alt="Pemerintah kota" class="rounded-5" style="border-radius: 10px;" width="200">
                <div class="card-body">
                  <p class="card-text f-2" style="font-size: medium; text-align: center;">Pemerintah Kota Banda Aceh</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <small class="text-muted fs-4" style="font-size: small; text-align: center;">Jln. Museum No. 5</small>
                      </div>
                </div>
            </div>
          </div>


            <!-- Anggota 6 -->
            <div class="col-md-4">
              <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
                <img class="card-img-top" src="img/rs-sehat.jpg" alt="Rumah Sakit 6" class="rounded-5" style="border-radius: 10px;" width="20">
                    <div class="card-body">
                      <p class="card-text f-2" style="font-size: medium;text-align: center;">Rumah Sakit Kebun Bunga</p>
                      <div class="d-flex justify-content-between align-items-end">
                        <small class="text-muted fs-4" style="font-size: small;text-align: center;">Jln. Anggrek No. 16</small>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
      </div>
      </div>


  </main>

 @endsection