<?php

namespace App\Models;

use App\Models\Oarish;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OarishSanad extends Model
{
    use HasFactory;

    protected $guarded = [];
    

    public function oarishgon(){
        return $this->hasMany(Oarish::class);
    }
}
