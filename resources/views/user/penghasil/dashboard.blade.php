@extends('layouts.app')
 
  @section('body')
  style="background-color: #D9F9EE"

  @endsection
 
 @section('content')
    <h1>ini adalah view dashboard</h1>

  <!-- Isi dashboard penghasil -->
  <div class="container p-5" style="margin-top: 200px;">
    <div class="panel panel-default position-relative" style="border-radius: 30px;">
        <div class="panel-body p-5 rounded-6" style="background-color: #BFE4D3; border-radius: 10px;">
            <div class="align-middle text-center"><h3>Pengolah Limbah B3 Aceh</h3>

                  <!-- Area button under Pengolah Limbah B3 Aceh-->
                <div class="container text-center">
                    <div class="row align-items-center p-4">
                        <!-- Button Orderan -->
                        <button  type="button" class="col p-3 mx-3 rounded-6 border-0" style="background-color: #A3D8BF; border-radius: 10px; ">
                            <a href="#" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="color: black; font-size: 18px;">Orderan</a></button>
                        <!-- Button Daftar pelanggan-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="#" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="color: black; font-size: 18px;">Daftar Pelanggan</a></button>

                    </div>
                </div>
                <!-- END Area button Pengolah Limbah-->
            </div>
        </div>
    </div>
</div>
<!-- END Dahsboard penghasil -->

  @endsection

  <!-- Dashoard pengolah
        <div class="container p-5" style="margin-top: 200px;">
        <div class="panel panel-default position-relative" style="border-radius: 30px;">
            <div class="panel-body p-5 rounded-6" style="background-color: #BFE4D3; border-radius: 10px;">
                <div class="align-middle text-center"><h3>Pengolah Limbah B3 Aceh</h3>

                       Area button under Pengolah Limbah B3 Aceh-->
                      <div class="container text-center">
                        <div class="row align-items-center p-4">
                            <!-- Button Orderan -->
                            <button  type="button" class="col p-3 mx-3 rounded-6 border-0" style="background-color: #A3D8BF; border-radius: 10px; ">
                                <a href="#" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="color: black; font-size: 18px;">Orderan</a></button>
                            <!-- Button Daftar pelanggan-->
                            <button type="button" class="col p-3 mx-3 rounded-6 border-0" style="background-color: #A3D8BF; border-radius: 10px;">
                                <a href="#" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" style="color: black; font-size: 18px;">Daftar Pelanggan</a></button>

                        </div>
                    </div>
                    <!-- END Area button Pengolah Limbah-->
                </div>
            </div>
        </div>
    </div>
  
    

  -->