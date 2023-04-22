<?php
 
 namespace App\Http\Controllers;
  
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use App\Models\Trash;


//  use App\Models\Subjects;
  
 class PagesController extends Controller
 {
     public function halamanUtama(){
         return view('index', [
             'title' => 'SADIS'
         ]);
     }
  
     public function dashboard(){
  
        //  $subjects = Subjects::where('users_id', auth()->user()->id)->get();
  
         return view('user.penghasil.dashboard', [
         ]);
     }

     public function buang(){
        return view('user.penghasil.buangsampah', [
        
        ]);
     }

     public function storeBuang(Request $request){
        $request->validate([
            'tanggal_pengambilan' => 'required',
            'jenis_sampah' => 'required',
            'jenis_pengolahan' => 'required',
        ]);

        $id = DB::table('trashes')->max('id');

        DB::table('trashes')->insert([
            'id' => $id + 1,
            'tanggal_pengambilan' => $request->tanggal_pengambilan,
            'jenis_sampah' => $request->jenis_sampah,
            'jenis_pengolahan' => $request->jenis_pengolahan,

        ]);

        return redirect('/login');
     }

     public function order(){
        $trash = Trash::all();

        return view('user.pengolah.order', [
            'trash' => $trash
        ]);
     }

     public function orderan($id){
        $new_order = Trash::where('id', $id)->first();

        return view('user.pengolah.orderan',[
            "orderan" => $new_order
        ]);
     }

    
 }
  
  