<?php
 
 namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\Models\Subscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Trash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

//  use App\Models\Subjects;
  
 class PagesController extends Controller
 {
     public function halamanUtama(){
         return view('index', [
             'title' => ''
         ]);
     }
  
     public function dashboard(){
  
        //  $subjects = Subjects::where('users_id', auth()->user()->id)->get();
        $trashCounts = $this->countTrash();
        $methodCounts = $this->countMethod();
        return view('user.penghasil.dashboard', [
            'title' => 'Dashboard',
            'trashCounts' => $trashCounts,
            'methodCounts' => $methodCounts
         ]);
     }

     public function buang(){
        return view('user.penghasil.buangsampah', [
            'title' => 'Form Sampah',
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

        return redirect('/dashboard');
        
        
     }

     public function order(){
        $user_id = Auth::id();
        if (Auth::user()->role == 'admin'){
        $trash = Trash::with('user')->get();

        return view('user.pengolah.order', [
            'title' => 'Riwayat',
            'trash' => $trash
        ]);
        } else {
            $trash = Trash::where('user_id', $user_id)->get();

        return view('user.pengolah.order', [
            'title' => 'Riwayat',
            'trash' => $trash
        ]);

        }
        // dd($trash);

     }


     //untuk menmpilkan data sesuai dengan yang di pilih oleh user
     public function orderan($id){
        $new_order = Trash::with('user')->where('id', $id)->first();

        return view('user.tesDetailCOntent',[
            'title' => 'Riwayat Form '.$id,
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
            'title' => 'Langganan',
            'status' => $status,
            'tanggal' => $tanggal
        ]);
    }

    public function perpanjanglangganan(){
        return view('user.penghasil.pricing',[
            'title' => 'Pricing',

        ]);
    }

    public function listSubscriptions(){
        // $user_id = Auth::id();
        $subs = Subscriptions::with('user')->get();
            
        return view('user.pengolah.listCustomer', [
            'title' => 'Daftar Pelanggan',
            'subs' => $subs
        ]);
    }

    public function storeStatus(Request $request){
        
        $data = $request;
        DB::table('trashes')
            ->where('id', '=', $data->id)
            ->update(['status_pengolahan' => $data->status]);
   Alert::success('Berhasil', "Status Pengolahan user ".$data->id." telah diperbaharui menjadi ".$data->status);

        return redirect('order');
    }


    

    public function countTrash(){

        $user_id = Auth::id();
        if (Auth::user()->role == 'admin'){
        
        $jenis_sampahs = ['Limbah Farmasi', 'Limbah infeksius', 'Limbah kimia', 'Limbah radioaktif', 'Limbah benda tajam', 'Limbah sitotoksik'];
        $trashCounts = [];
        
        foreach ($jenis_sampahs as $jenis_sampah) {
            $count = Trash::where('jenis_sampah', $jenis_sampah)->count();
            $trashCounts[$jenis_sampah] = $count;
        }
        
        return $trashCounts;
        
        } else {
        
            $jenis_sampahs = ['Limbah Farmasi', 'Limbah infeksius', 'Limbah kimia', 'Limbah radioaktif', 'Limbah benda tajam', 'Limbah sitotoksik'];
            $trashCounts = [];

            $trash = Trash::where('user_id', $user_id)->get();
            $collection = collect($trash);
            
            foreach ($jenis_sampahs as $jenis_sampah) {
                $count = $collection->where('jenis_sampah', $jenis_sampah)->count();
                $trashCounts[$jenis_sampah] = $count;
            }
            
            return $trashCounts;    
            }

        
    }

    public function countMethod(){
        $jenis_pengolahan = ['Insinerator', 'autoclaving', 'disinfeksi kimia', 'enkapsulation', 'penimbunan'];
        $methodCounts = [];
        
        foreach ($jenis_pengolahan as $jenis_pengolahan) {
            $count = Trash::where('jenis_pengolahan', $jenis_pengolahan)->count();
            $methodCounts[$jenis_pengolahan] = $count;
        }
        
        return $methodCounts;
    }
    
 }
  
  