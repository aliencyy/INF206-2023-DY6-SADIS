<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Receipts;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
use DateInterval;
use DateTime;


class PaymentController extends Controller
{
    public function index(Request $request){
        $duration = $request->input('duration');
 
        return view('user.pembayaran',[
            'duration' => $duration,
        ]);
    }

    public function storeData(Request $request){
        $request->validate([
            'payment' => 'required',
            'name' => 'required',
            'card_number' => 'required',
            'expirations' => 'required',
            'CVV' => 'required',
        ]);

        $timestamp = time();
        $max_id = DB::table('receipts')->max('id');
        $new_id = "{$timestamp}-".($max_id+1);


    try{
        DB::table('receipts')->insert([
            'id' => $max_id+1,
            'receipt_id' => $new_id,
            'user_id' => Auth::user()->id,
            'duration' => $request->duration,
            'payment' => $request->payment,
            'name' => $request->name,
            'card_number' => $request->card_number,
            'expirations' => $request->expirations,
            'CVV' => $request->CVV,
        ]);
        // Alert::success('berhasil');

        
        // $this->updateDate($request->duration);
        return redirect()->intended('/langganan');

    } catch (Exception $e) {
        dd($request->all());
    }
    }
    
    public function updateDate($duration, $user_id){
        try {

            $data = DB::table('subscriptions')->select('langganan')->where('user_id', '=', $user_id)->first();
            $currentDate = DateTime::createFromFormat('Y-m-d',$data->langganan) ;
      
            if($duration =='mingguan') {
                $currentDate->add(new DateInterval('P1W'));
            } elseif($duration == 'bulanan') {
                $currentDate->add(new DateInterval('P1M'));
            } elseif($duration == 'tahunan') {
                $currentDate->add(new DateInterval('P1Y'));
            }
        
            DB::table('subscriptions')
                ->where('user_id', '=', $user_id)
                ->update(['langganan' => $currentDate->format('Y-m-d')]);
        
            } catch (Exception $e) {
        
            $id = DB::table('subscriptions')->max('id');
        
            $currentDate = now();
            if($duration =='mingguan') {
                $currentDate->add(new DateInterval('P1W'));
            } elseif($duration == 'bulanan') {
                $currentDate->add(new DateInterval('P1M'));
            } elseif($duration == 'tahunan') {
                $currentDate->add(new DateInterval('P1Y'));
            }
        
            DB::table('subscriptions')->insert([
                'id' =>  $id + 1,
                'user_id' => $user_id,
                'langganan' => $currentDate,
            ]);
            }
        
        
            $data = DB::table('subscriptions')->get();
    }

    public function listPembayaran(){
        $receipt = Receipts::with('user')->get();
        return view('user.pengolah.listPembayaran', [
            'receipt' => $receipt
        ]);
    }

    public function konfirmasiPembayaran(Request $request)
{
    // Retrieve receipt information from the database
    $receipt = Receipts::where('receipt_id', $request->input('receipt_id'))->first();

    Receipts::where('receipt_id', '=', $receipt->receipt_id)->update(['Terkonfirmasi'=> 1]);


    $this->updateDate($request->duration, $request->user_id);
    Alert::success('Berhasil', 'Pembayaran '.$receipt->receipt_id.' Telah dikonfirmasi.');

    return redirect()->intended('/listPembayaran');
}

}
