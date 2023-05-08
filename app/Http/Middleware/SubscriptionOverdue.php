<?php

namespace App\Http\Middleware;

use App\Models\Subscriptions;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;



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
        $subscribe = Subscriptions::where('user_id', $user_id)->first();
        $currentDate = Carbon::now();
        $existingDate = Carbon::parse($subscribe->langganan);

        if ($currentDate->gt($existingDate)) {
            Alert::error('Error', 'Masa berlangganan anda telah habis');
            return redirect('/buangsampah');
        } else {
            // the existing date is in the future or is the current date
            return $next($request);

        }
    }
}