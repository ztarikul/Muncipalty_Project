<?php

namespace App\Models;
use App\Models\OarishSanad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oarish extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function oarish_sanad(){
        return $this->belongsTo(OarishSanad::class);
    }
}
