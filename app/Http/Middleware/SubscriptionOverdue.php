<?php

namespace App\Http\Middleware;

use App\Models\Subscriptions;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;




class SubscriptionOverdue
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = Auth::id();
        $date = $request->tanggal_pengambilan;
        $subscribe = Subscriptions::where('user_id', $user_id)->first();
        $currentDate = Carbon::now();
        try{
            $existingDate = Carbon::parse($subscribe->langganan);
        } catch(Exception $e){
            Alert::error('Error', 'Anda pelu berlangganan Terlebih dahulu');
            return redirect('/buangsampah');
        }
        

        if ($currentDate->gt($existingDate)) {
            Alert::error('Error', 'Masa berlangganan anda telah habis');
            return redirect('/buangsampah');
        } elseif ($currentDate->gt($date)) {
            Alert::error('Error', 'Tanggal penjemputan yang anda pilih tidak valid');
            return redirect('/buangsampah');
        } 
        else {
            // the existing date is in the future or is the current date
            return $next($request);

        }
    }
}