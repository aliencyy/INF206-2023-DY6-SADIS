@extends('layouts.app')

@section('body')
@endsection

@section('content')
<!-- Form yang sudah diganti tampilannya-->

<div class="p-3 mb-2 text-dark">

    <!-- Body Page-->
    <div class="container mx-auto">
        <form action="/buangsampah" method="POST">
            @csrf
            <div class="mx-auto">
                <div class="sm:mx-auto sm:w-full sm:max-w-md rounded-5">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Formulir Keterangan Sampah
                    </h2>
                </div>
                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md rounded-5" style="background-color: #fbfefd ; border-radius: 1%; padding: 3%; margin:2%">
                     <div class=" py-8 px-4 rounded-5 sm:px-10">
                        
                        <div >
                            <label for="tanggal_pengambilan" class="block text-sm font-medium text-gray-700">
                                Tanggal Pengambilan
                            </label>
                            <div class="mt-1 md-form md-outline input-with-post-icon datepicker" inline="true">
                                <input id="tanggal_pengamb" name="tanggal_pengambilan" type="date" required class="form-control"
                                placeholder="Silahkan masukkan email anda" style="background-color: #EBF6F1;">
                                <i class="fas fa-calendar input-prefix"></i>
                            </div>
                        </div>



                {{-- <div>
                    <label for="nama" class="form-label"> Nama Instansi</label>
                    <div class="mt-1">
                        <input id="nama" name="nama"
                            class="form-control"
                            placeholder="Masukkan Instansi Anda" style="background-color: #EBF6F1;">
                    </div>
                </div> --}}

    



                <div>

                    <div class="mt-1">
                            <label class="my-1 mr-2" for="jenis_sampah">Jenis Sampah</label>
                            <select class="custom-select my-1 mr-sm-2" id="jenis_sampah" name="jenis_sampah" style="background-color: #EBF6F1;">
                              <option selected >Pilih Jenis Sampah</option>
                              <option value="Limbah infeksius">Infeksius</option>
                              <option value="Limbah radioaktif">Radioaktif</option>
                              <option value="Limbah benda tajam">Benda Tajam</option>
                              <option value="Limbah kimia">Kimia</option>
                              <option value="Limbah Farmasi">Farmasi</option>
                              <option value="Limbah sitotoksik">Sitotoksik</option>
                            </select>
                    </div>
                </div>

                <div>

                    <div class="mt-1">
                            <label class="my-1 mr-2" for="jenis_pengolahan">Metode Pengolahan</label>
                            <select class="custom-select my-1 mr-sm-2" id="jenis_pengolahan" name="jenis_pengolahan" style="background-color: #EBF6F1;">
                              <option selected>Pilih Metode Pengolahan Sampah</option>
                              <option value="Insinerator">Insinerator</option>
                              <option value="autoclaving">Autoclaving</option>
                              <option value="disinfeksi kimia">Disinfeksi Kimia</option>
                              <option value="enkapsulation">Enkapsulation</option>
                              <option value="penimbunan">Penimbunan</option>
                            </select>
                    </div>
                </div>


            

                    
                {{-- <div class="form-floating">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">
                        Keterangan Tambahan
                    </label>
                    <textarea class="form-control" id="keterangan" rows="3" style="background-color: #EBF6F1;"></textarea>
                </div> --}}


            


                <!-- make button for login -->
                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5 8a3 3 0 016 0v1h1a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2h1V8zm3 0V7a1 1 0 10-2 0v1H5a1 1 0 00-1 1v5a1 1 0 001 1h10a1 1 0 001-1v-5a1 1 0 00-1-1h-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Submit
                    </button>
                </div>
                
</form>   
</div>
<!-- END Body Page-->

<!-- This is the login form -->

<script>// Data Picker Initialization
$('.datepicker').datepicker({
inline: true
});</script>

</div>
     
        
@endsection



<!--  END Form yang sudah diganti tampilannya-->