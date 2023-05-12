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

                <div>

                    <div class="mt-1">
                            <label class="my-1 mr-2" for="jenis_sampah">Jenis Sampah</label>
                            <select class="form-select my-1 mr-sm-2" id="jenis_sampah" name="jenis_sampah" style="background-color: #EBF6F1;">
                              <option disabled selected value="" >Pilih Jenis Sampah</option>
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
                            <select class="form-select my-1 mr-sm-2 " id="jenis_pengolahan" name="jenis_pengolahan" aria-label="Default select example" style="background-color: #EBF6F1;">
                              <option disabled selected value="">Pilih Metode Pengolahan Sampah</option>
                              <option value="Insinerator">Insinerator</option>
                              <option value="autoclaving">Autoclaving</option>
                              <option value="disinfeksi kimia">Disinfeksi Kimia</option>
                              <option value="enkapsulation">Enkapsulation</option>
                              <option value="penimbunan">Penimbunan</option>
                            </select>
                    </div>
                </div>

                <div class="mt-1">
                    <label class="my-1 mr-2" for="berat">Weight:</label>
                    <select class="form-select my-1 mr-sm-2 " id="berat" name="berat" aria-label="Default select example" style="background-color: #EBF6F1;">
                        <option disabled selected value="">Select weight</option>
                        <?php
                        for($i=1; $i<=100; $i++){
                          echo "<option value='".$i."'>".$i." kg</option>";
                        }
                      ?>
                        <!-- Add more options as needed -->
                    </select>
                    
                  </div>
                  
                  

                    
                <div class="mt-1">
                    <label for="keterangan" class="block text-sm font-medium my-1 mr-2">
                        Keterangan Tambahan
                    </label>
                    <textarea class="form-control" id="ket" name="ket" rows="3" style="background-color: #EBF6F1;"></textarea>
                </div>


            


                <!-- make button for login -->
                <div class="p-2 mt-3">
                    <button type="submit" id="submit-btn"
                        class="group relative w-full flex justify-center py-2 px-4 rounded border border-transparent text-sm font-medium rounded-md text-black bg-primary hover:bg-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        
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
});

function checkWeight() {
    var weightDropdown = document.getElementById("weight-dropdown");
    if (weightDropdown.value === "Berat") {
        // If no weight option is selected, disable the submit button
        document.getElementById("submit-btn").disabled = true;
    } else {
        // If a weight option is selected, enable the submit button
        document.getElementById("submit-btn").disabled = false;
    }
}

</script>

</div>
     
        
@endsection



<!--  END Form yang sudah diganti tampilannya-->