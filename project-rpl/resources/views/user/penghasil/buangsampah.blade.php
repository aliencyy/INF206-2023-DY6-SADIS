<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <title>Sadis | Form Pembuangan sampah</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
 
    <div class="container mx-auto">
        <form action="/buangsampah" method="POST">
            @csrf
            <div class="mx-auto">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Silahkan isi form berikut
                    </h2>
                </div>
         
                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                            <div>
                                <label for="tanggal_pengambilan" class="block text-sm font-medium text-gray-700">
                                    tanggal pengambilan
                                </label>
                                <div class="mt-1">
                                    <input id="tanggal_pengamb" name="tanggal_pengambilan" type="date" required
                                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                        placeholder="Silahkan masukkan email anda">
                                </div>
                            </div>
         
                            {{-- <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">
                                    Nama Instansi
                                </label>
                                <div class="mt-1">
                                    <input id="nama" name="nama"
                                        
                                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                        placeholder="Masukkan Password Anda">
                                </div>
                            </div> --}}

                            <div>

                                <div class="mt-1">
                                        <label class="my-1 mr-2" for="jenis_sampah">jenis sampah</label>
                                        <select class="custom-select my-1 mr-sm-2" id="jenis_sampah" name="jenis_sampah">
                                          <option selected>Choose...</option>
                                          <option value="Limbah infeksius">infeksius</option>
                                          <option value="Limbah radioaktif">radioaktif</option>
                                          <option value="Limbah benda tajam">benda tajam</option>
                                          <option value="Limbah kimia">kimia</option>
                                          <option value="Limbah Farmasi">Farmasi</option>
                                          <option value="Limbah sitotoksik">sitotoksik</option>
                                        </select>
                                </div>
                            </div>

                            <div>

                                <div class="mt-1">
                                        <label class="my-1 mr-2" for="jenis_pengolahan">Metode Pengolahan</label>
                                        <select class="custom-select my-1 mr-sm-2" id="jenis_pengolahan" name="jenis_pengolahan">
                                          <option selected>Choose...</option>
                                          <option value="Insinerator">Insinerator</option>
                                          <option value="autoclaving">autoclaving</option>
                                          <option value="disinfeksi kimia">disinfeksi kimia</option>
                                          <option value="enkapsulation">enkapsulation</option>
                                          <option value="penimbunan">penimbunan</option>
                                        </select>
                                </div>
                            </div>

                            {{-- <div>
                                <label for="keterangan" class="block text-sm font-medium text-gray-700">
                                    keterangan tambahan
                                </label>
                                <div class="mt-1">
                                    <input id="ket" name="ket"
                                        
                                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                                        placeholder="Keterangan Tambahan">
                                </div>
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
 
    <!-- This is the login form -->
 
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>