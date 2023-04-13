<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

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
 }
  
  