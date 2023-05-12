@extends('layouts.app')

@section('body')

@endsection

@section('content')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

@can('user')
      <!-- Isi dashboard penghasil -->
  {{-- <div class="container p-5" style="margin-top: 200px;">
    <div class="panel panel-default position-relative" style="border-radius: 30px;">
        <div class="panel-body p-5 rounded-6" style="background-color: #BFE4D3; border-radius: 10px;">
            <div class="align-middle text-center">
                <h3><b>PENGOLAH LIMBAH SAMPAH B3 ACEH</b></h3>

                <!-- Area button under Pengolah Limbah B3 Aceh-->
                <div class="container text-center">
                    <div class="row align-items-center p-4">
                        <!-- Button Orderan -->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px; ">
                            <a href="/buangsampah" class="text-decoration-none" style="color: black; font-size: 18px;">Buat pengajuan pengambilan sampah</a></button>
                        <!-- Button Daftar pelanggan-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/order" class="text-decoration-none" style="color: black; font-size: 18px;">Riwayat pembuangan sampah</a></button>
                        <!-- Button Subscription-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/langganan" class="text-decoration-none" style="color: black; font-size: 18px;">Berlangganan</a></button>
                    </div>
                </div>
                <!-- END Area button Pengolah Limbah-->
            </div>
        </div>
    </div>
</div> --}}
<!-- END Dahsboard penghasil -->

<section class="card-list">
    <article class="card">
        <header class="card-header">
          <h2>Sampah infeksius</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah infeksius'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah dibuang</div>
              
            </div>
          </div>
          
      </article>



    <article class="card">
        <header class="card-header">
          <h2>Sampah Radioaktif</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah radioaktif'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah dibuang</div>
              
            </div>
          </div>
          
      </article>




    <article class="card">
        <header class="card-header">
          <h2>Sampah Sitotoksik</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah sitotoksik'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah dibuang</div>
              
            </div>
          </div>
          
      </article>

    <article class="card">
        <header class="card-header">
          <h2>Sampah Kimia</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah kimia'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah dibuang</div>
              
            </div>
          </div>
          
      </article>

    <article class="card">
        <header class="card-header">
          <h2>Sampah Farmasi</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah Farmasi'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah dibuang</div>
              
            </div>
          </div>
          
      </article>

      <article class="card">
        <header class="card-header">
          <h2>Sampah Benda Tajam</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah benda tajam'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah dibuang</div>
              
            </div>
          </div>
          
      </article>




</section>


@endcan

    @can('admin')
          
        {{-- <div class="container p-5" style="margin-top: 200px;">
        <div class="panel panel-default position-relative" style="border-radius: 30px;">
            <div class="panel-body p-5 rounded-6" style="background-color: #BFE4D3; border-radius: 10px;">
                <div class="align-middle text-center"><h3>Pengolah Limbah B3 Aceh</h3>

<div class="container p-5 mt-3">
    <div class="panel panel-default" style="border-radius: 30px;">
        <div class="panel-body p-5" style="background-color: #BFE4D3; border-radius: 10px; margin-top: 150px;">
            <div class="align-middle text-center">
                <h3><b>PENGOLAH LIMBAH SAMPAH B3 ACEH</b></h3>

                <div class="container text-center">
                    <div class="row align-items-center p-4">
                        <!-- Button Orderan -->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px; ">
                            <a href="/order" class="text-decoration-none" style="color: black; font-size: 18px;">Orderan</a></button>
                        <!-- Button Daftar Pembayaran-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/listPembayaran" class="text-decoration-none" style="color: black; font-size: 18px;">Daftar Pembayaran</a></button>
                        <!-- Button Daftar Pelanggan -->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/listSubscriptor" class="text-decoration-none" style="color: black; font-size: 18px;">Daftar Pelanggan</a></button>
                    </div>
                </div>
                <!-- END Area button Pengolah Limbah-->
            </div>
        </div>
    </div> --}}


    <section class="card-list">
        <article class="card">
            <header class="card-header">
              <h2>Sampah infeksius</h2>
            </header>
    
            <div class="card-author" style="display: flex; justify-content: center;">
                <svg class="full-circle" viewBox="-15 -15 100 100">
                  <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
                  <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah infeksius'] }} unit</text>
                </svg>
                <div class="author-name">
                  <div class="author-name-prefix">Jumlah sampah Infeksius yang telah diolah</div>
                  
                </div>
              </div>
              
          </article>
  
  
  
        <article class="card">
            <header class="card-header">
              <h2>Sampah Radioaktif</h2>
            </header>
    
            <div class="card-author" style="display: flex; justify-content: center;">
                <svg class="full-circle" viewBox="-15 -15 100 100">
                  <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
                  <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah radioaktif'] }} unit</text>
                </svg>
                <div class="author-name">
                  <div class="author-name-prefix">Jumlah sampah Radioaktif yang telah diolah</div>
                  
                </div>
              </div>
              
          </article>
  
  
  
  
        <article class="card">
            <header class="card-header">
              <h2>Sampah Sitotoksik</h2>
            </header>
    
            <div class="card-author" style="display: flex; justify-content: center;">
                <svg class="full-circle" viewBox="-15 -15 100 100">
                  <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
                  <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah sitotoksik'] }} unit</text>
                </svg>
                <div class="author-name">
                  <div class="author-name-prefix">Jumlah sampah Sitotoksik yang telah diolah</div>
                  
                </div>
              </div>
              
          </article>
  
        <article class="card">
            <header class="card-header">
              <h2>Sampah Kimia</h2>
            </header>
    
            <div class="card-author" style="display: flex; justify-content: center;">
                <svg class="full-circle" viewBox="-15 -15 100 100">
                  <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
                  <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah kimia'] }} unit</text>
                </svg>
                <div class="author-name">
                  <div class="author-name-prefix">Jumlah sampah kimia yang telah diolah</div>
                  
                </div>
              </div>
              
          </article>
  
        <article class="card">
            <header class="card-header">
              <h2>Sampah Farmasi</h2>
            </header>
    
            <div class="card-author" style="display: flex; justify-content: center;">
                <svg class="full-circle" viewBox="-15 -15 100 100">
                  <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
                  <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah Farmasi'] }} unit</text>
                </svg>
                <div class="author-name">
                  <div class="author-name-prefix">Jumlah sampah Farmasi yang telah diolah</div>
                  
                </div>
              </div>
              
          </article>

          <article class="card">
            <header class="card-header">
              <h2>Sampah Benda Tajam</h2>
            </header>
    
            <div class="card-author" style="display: flex; justify-content: center;">
                <svg class="full-circle" viewBox="-15 -15 100 100">
                  <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
                  <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $trashCounts['Limbah benda tajam'] }} unit</text>
                </svg>
                <div class="author-name">
                  <div class="author-name-prefix">Jumlah sampah benda tajam yang telah diolah</div>
                  
                </div>
              </div>
              
          </article>
  
  
  
  
   </section>
   <section class="card-list">
    <article class="card">
        <header class="card-header">
          <h2>Pengolahan Insinerator</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $methodCounts['Insinerator'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah diolah dengan metode Insinerator</div>
              
            </div>
          </div>
          
      </article>



    <article class="card">
        <header class="card-header">
          <h2>Pengolahan Autoclaving</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $methodCounts['autoclaving'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah diolah dengan metode Autoclaving</div>
              
            </div>
          </div>
          
      </article>




    <article class="card">
        <header class="card-header">
          <h2>Pengolahan Disinfeksi Kimia</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $methodCounts['disinfeksi kimia'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah diolah dengan metode Disinfeksi Kimia</div>
              
            </div>
          </div>
          
      </article>

    <article class="card">
        <header class="card-header">
          <h2>Pengolahan Enkapsulation</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $methodCounts['enkapsulation'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah diolah dengan metode Enkapsulation</div>
              
            </div>
          </div>
          
      </article>

    <article class="card">
        <header class="card-header">
          <h2>Penimbunan</h2>
        </header>

        <div class="card-author" style="display: flex; justify-content: center;">
            <svg class="full-circle" viewBox="-15 -15 100 100">
              <circle style="fill: none; stroke: #ff8a00; stroke-width: 10;" cx="40" cy="40" r="40"></circle>
              <text x="40" y="45 " text-anchor="middle" fill="#e52e71" style="font-size: 14;">{{ $methodCounts['penimbunan'] }} unit</text>
            </svg>
            <div class="author-name">
              <div class="author-name-prefix">Jumlah sampah yang telah diolah dengan metode Penimbunan</div>
              
            </div>
          </div>
          
      </article>






</section>

    @endcan

@endsection