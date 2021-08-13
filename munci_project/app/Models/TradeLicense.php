<?php

namespace App\Models;

use App\Models\TradeLicenseOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeLicense extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function owners(){
        return $this->hasMany(TradeLicenseOwner::class);
    }
}
