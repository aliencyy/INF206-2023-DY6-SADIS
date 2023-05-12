<?php
 
 namespace App\Http\Controllers\auth;
  
 use App\Http\Controllers\Controller;
 use Illuminate\Http\Request;
 use RealRashid\SweetAlert\Facades\Alert;
 use Illuminate\Support\Facades\Auth;
  
 class loginController extends Controller
 {
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         return view('auth.login', [
             'title' => 'Login Page'
         ]);
     }
     
     public function login(Request $request){

         $credential = $request->validate([
             'email' => 'required',
             'password' => 'required'
         ]);
  

         // if user is exist in database then we will redirect to dashboard page and activate middleware auth page
  
         if(Auth::attempt($credential)){
             return redirect()->intended('/dashboard');
         }
         
         Alert::error('Error', 'Email atau Password salah');
         return redirect('/login');
  
 }
  
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         //
     }
  
     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         //
     }
  
     /**
      * Display the specified resource.
      */
     public function show(string $id)
     {
         //
     }
  
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(string $id)
     {
         //
     }
  
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         //
     }
  
     /**
      * Remove the specified resource from storage.
      */
     public function destroy()
     {
         Auth::logout();
  
         request()->session()->invalidate();
  
         request()->session()->regenerateToken();
  
         return redirect('/');
     }
 }
  
  