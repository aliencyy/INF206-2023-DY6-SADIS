 
 
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
         Schema::create('trashes', function (Blueprint $table) {
             $table->id();
             $table->string('jenis_sampah')->nullable();
             $table->string('status_pengolahan')->nullable();
             $table->string('jenis_pengolahan')->nullable();
             $table->string('berat')->nullable();
             $table->string('ket')->nullable();
             $table->date('tanggal_pengambilan');
         });
     }
  
     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('trash');
     }
 };
  