
@extends('layouts.app')
@section('content')

<!-- Untuk penghasil START-->

<div class="modal position-static d-block py-5">
    <div class="modal-dialog" >
      <div class="modal-content rounded-4 shadow border-0 mb-2" style="background-color: #FDFEF3">
        <div class="modal-header p-5 pb-4 border-bottom-0">
  
          <h1 class="fw-bolder mb-0 fs-1">Profile</h1>
        </div>
  
        <!-- START Isi Form-->
        <div class="modal-body p-5 pt-0">
  
            <div class="mb-3">
  
              <!-- Start Nama Instansi User Name Penghasil-->
              <div class="text-center">
                <div class="object-fit-md-contain ">
                  {{-- <img src="img/icon-penghasil.png" class="border rounded" alt="Rumah Sakit Sehat" width="200"> --}}
                </div>
                <h2 class="fs-3 fw-border mt-4">{{ $nama }}</h2>
              </div>
              <!-- End Nama Instansi User Name Penghasil-->
              <hr class="my-1">
              
  
                <div class="container overflow-hidden mt-4 text-start">

                  <div class="row">
                    <div class="col-3">
                    <div class="p-2" style="font-size: 16px">Id Akun</div>
                    </div>
                    <div class="col">
                      <div class="p-2" style="font-size: 16px">{{ $id }}</div>
                    </div>
                </div>
                  
                  <!-- Start Email User penghasil -->
                  <div class="row">
                    <div class="col-3">
                    <div class="p-2" style="font-size: 16px">Email</div>
                    </div>
                    <div class="col">
                      <div class="p-2" style="font-size: 16px">{{ $email }}</div>
                    </div>
                </div>
                <!-- End Email User penghasil -->
  
                    <!-- Start Lokasi User Penghasil -->
                    <div class="row">
                      <div class="col-3">
                      <div class="p-2" style="font-size: 16px">Lokasi</div>
                      </div>
                      <div class="col">
                        <div class="p-2" style="font-size: 16px">{{ $lokasi }}</div>
                      </div>
                  </div>
                  <!-- End Lokasi User Penghasil -->

                  
                </div>
                <!-- END ISIAN -->
              </div>
  
  
        </div>
      </div>
      </div>
    </div>
  </div>

<!-- UNtuk Penghasil END -->
@endsection

{{-- <!-- START Pengolah -->
<div class="modal position-static d-block py-5">
    <div class="modal-dialog" >
      <div class="modal-content rounded-4 shadow border-0 mb-2" style="background-color: #FDFEF3">
        <div class="modal-header p-5 pb-4 border-bottom-0">
  
          <h1 class="fw-bolder mb-0 fs-1">Profile</h1>
        </div>
  
        <!-- START Isi Form-->
        <div class="modal-body p-5 pt-0">
  
            <div class="mb-3">
  
              <!-- Start Nama Instansi User Name Pengolah-->
  
              <!-- Nama ADMIN User Name Pengolah-->
              <div class="text-center">
                <img src="img/icon-pengolah.jpg" class="object-fit-md-contain border rounded" alt="Rumah Sakit Sehat" width="200">
                <h2 class="fs-3 fw-border mt-4">Admin</h2>
              </div>
  
              <!-- End Nama Instansi User Name Pengolah-->
  
              <hr class="my-1">
              
  
                <div class="container overflow-hidden mt-4 text-start">
  
                  <!-- Start Email User pengolah -->
                  <div class="row">
                      <div class="col-3">
                          <div class="p-2" style="font-size: 16px">Email</div>
                      </div>
                      <div class="col">
                          <div class="p-2" style="font-size: 16px">adminsadis@gmail.com</div>
                      </div>
                  </div>
                  <!-- End Email User pengolah -->
                  
                  <!-- Start Lokasi User Penghasil -->
                  <div class="row">
                      <div class="col-3">
                          <div class="p-2" style="font-size: 16px">Lokasi</div>
                      </div>
                      <div class="col">
                          <div class="p-2" style="font-size: 16px">Banda Aceh, Jln. Topi No. 2</div>
                      </div>
                  </div>
                  <!-- End Lokasi User Penghasil -->
  
                  <script src="js/bootstrap.bundle.min.js"></script>
                </div>
                <!-- END ISIAN -->
              </div>
  
  
        </div>
      </div>
      </div>
    </div>
  </div>


<!-- END Pengolah --> --}}