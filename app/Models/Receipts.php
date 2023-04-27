<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipts extends Model
{
    public function user(){
        return $this->hasOne(User::class);
    }
    use HasFactory;
}
