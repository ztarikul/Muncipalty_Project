<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PrimisisLicenseOwner;

class PrimisisLicense extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function owners(){
        return $this->hasMany(PrimisisLicenseOwner::class);
    }
}
