<?php

namespace App\Models;
use App\Models\TradeLicense;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeLicenseOwner extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tradelicense(){
        return $this->belongsTo(TradeLicense::class);
    }
}
