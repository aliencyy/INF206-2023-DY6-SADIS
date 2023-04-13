 
 
<?php
 
 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
  
 return new class extends Migration
 {
     /**
      * Run the migrations.
      */
     public function up(): void
     {
         Schema::create('subjects', function (Blueprint $table) {
             $table->id();
             $table->foreignId('jenis_sampah');
             $table->string('status_pengolahan');
             $table->string('jenis_pengolahan');
             $table->string('berat');
             $table->string('ket');
             $table->date('tanggal_pengambilan');
             $table->timestamps();
         });
     }
  
     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('subjects');
     }
 };
  