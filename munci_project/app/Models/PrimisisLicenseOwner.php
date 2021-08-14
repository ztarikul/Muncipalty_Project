<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrimisisLicense;

class PrimisisLicenseOwner extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function primisislicense(){
        return $this->belongsTo(PrimisisLicense::class);
    }
}
