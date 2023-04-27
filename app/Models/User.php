<?php
 
namespace App\Models;
 
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
 
 
    /**
     * 
     * Satu user memiliki banyak mata kuliah
     * relasi one to many
     */
 
    public function Trash(){
        return $this->hasMany(User::class);
    }
 
    public function subscriptions(){
        return $this->hasOne(subscriptions::class);
    }

    public function Receipts(){
        return $this->hasMany(Receipts::class);
    }
}