@extends('layouts.app')
 
  @section('body')
  style="background-color: #D9F9EE"

  @endsection
 
 @section('content')

 <div class="container px-4 py-5">
  <h2 class="pb-2 border-bottom fw-bold fs-1 text-center">Mitra</h2>
  <div class="fs-4 text-center">
    SADIS atau Sistem Pengolahan Sampah Medis B3 adalah sebuah situs web yang menyediakan layanan pembuangan Sampah B3 (Bahan Berbahaya dan Beracun), khususnya untuk sampah medis. Website ini bertujuan untuk mengurangi dan mengelola Sampah B3, khususnya medis agar tidak berceceran di sembarang tempat. 
          Berikut Mitra atau kerjasama yang dilakukan oleh kami
  </div>
    <!-- Isi-->

    <div class="album py-5" >
      <div class="container">
         <!-- Anggota 1 -->

         <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3; ">
              <img class="card-img-top" src="img/rs-baik.jpg" alt="Rumah Sakit 1" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-4 text-center">Rumah Sakit Daijoubu</p>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="text-muted fs-5 text-center">Jln. Jepang No. 3</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Anggota 2 -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/rs-baik.jpg" alt="Rumah Sakit 2" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-4" style="text-align: center;">Rumah Sakit Matahari</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-5" style="text-align: center;">Jln. Matahari No. 1</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Anggota 3 -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/rs-baik.jpg" alt="Rumah Sakit 3" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-4" style="text-align: center;">Rumah Sakit Bulan</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-5" style="text-align: center;">Jln. Bulan No. 9</small>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Anggota 4 -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/rs-sehat.jpg" alt="Rumah Sakit 4" class="rounded-5" style="border-radius: 10px;" width="20">
              <div class="card-body">
                <p class="card-text fs-4" style="text-align: center;">Rumah Sakit Sehat</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted fs-5" style="text-align: center;">Jln. Topi No. 2</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Anggota 5 -->
          <div class="col-md-4" ms-4>
            <div class="card mb-4 box-shadow rounded-6 border-0 shadow justify-content-center" style="border-radius: 7px; background-color: #FDFEF3;">
              <img class="card-img-top" src="img/pemerintah-prov.jpg" alt="Pemerintah kota" class="rounded-5" style="border-radius: 10px;" width="200">
                <div class="card-body">
                  <p class="card-text fs-4 text-center" style="text-align: center;">Pemerintah Kota Banda Aceh</p>
                    <div class="d-flex ">
                      <small class="text-muted fs-5">Jln. Museum No. 5</small>
                      </div>
                </div>
            </div>
          </div>


            <!-- Anggota 6 -->
            <div class="col-md-4">
              <div class="card mb-4 box-shadow rounded-6 border-0 shadow" style="border-radius: 7px; background-color: #FDFEF3;">
                <img class="card-img-top" src="img/rs-sehat.jpg" alt="Rumah Sakit 6" class="rounded-5" style="border-radius: 10px;" width="20">
                    <div class="card-body">
                      <p class="card-text fs-4" style="font-size: medium;text-align: center;">Rumah Sakit Kebun</p>
                      <div class="d-flex justify-content-between align-items-end">
                        <small class="text-muted fs-5" style="font-size: small;text-align: center;">Jln. Anggrek No. 16</small>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
      </div>
      </div>
    </div>

    <!-- END Isi -->

    <!-- END Baru -->

          <!-- Footer -->
          <footer class="text-center mt-5" style="margin-bottom: -70px;">
            <div class="text-center text-dark p-3 fs-5">
              © 2023 Copyright:
              <a class="text-dark text-decoration-none fw-bold" href="https://mdbootstrap.com/">KelompokSADIS</a>
            </div>
          </footer>
          <!-- Footer end -->

 @endsection