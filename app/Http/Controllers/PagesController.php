<?php
 
 namespace App\Http\Controllers;
  
 use App\Http\Controllers\Controller;
use App\Models\Subscriptions;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use App\Models\Trash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 use Exception;

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

        //memasukkan data ke table trashes sesusai dengan field yang diminta
        DB::table('trashes')->insert([

            'id' => $id + 1,
            'tanggal_pengambilan' => $request->tanggal_pengambilan,
            'jenis_sampah' => $request->jenis_sampah,
            'jenis_pengolahan' => $request->jenis_pengolahan,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/login');
     }

     public function order(){
        $user_id = Auth::id();
        if (Auth::user()->role == 'admin'){
        $trash = Trash::with('user')->get();

        return view('user.pengolah.order', [
            'trash' => $trash
        ]);
        } else {
            $trash = Trash::where('user_id', $user_id)->get();

        return view('user.pengolah.order', [
            'trash' => $trash
        ]);

        }
        // dd($trash);

     }


     //untuk menmpilkan data sesuai dengan yang di pilih oleh user
     public function orderan($id){
        $new_order = Trash::with('user')->where('id', $id)->first();

        return view('user.tesDetailCOntent',[
            "orderan" => $new_order
        ]);
     }

    public function langganan(){
        
        try{
            $data = DB::table('subscriptions')->select('langganan')->where('user_id', '=', Auth::user()->id)->first();
            $status = 'aktif';
        $tanggal = $data->langganan;
        } catch(Exception $e) {
            $status = 'Tidak aktif';
            $tanggal = '';
        }
        
        return view('user.penghasil.statusSubcription', [
            'status' => $status,
            'tanggal' => $tanggal
        ]);
    }

    public function perpanjanglangganan(){
        return view('user.penghasil.pricing');
    }

    public function listSubscriptions(){
        // $user_id = Auth::id();
        $subs = Subscriptions::with('user')->get();
            
        return view('user.pengolah.listCustomer', [
            'subs' => $subs
        ]);
    }

    public function storeStatus(Request $request){
        $data = $request;
        DB::table('trashes')
            ->where('id', '=', $data->id)
            ->update(['status_pengolahan' => $data->status]);

        return redirect('order');
    }
 }
  
  