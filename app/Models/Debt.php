<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function User(){
        return $this->hasOne('App\Models\User');
    }
}
