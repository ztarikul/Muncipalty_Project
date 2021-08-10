<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParibarikSanad;
class ParibarikMember extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function paribariksanad(){
        return $this->belongsTo(ParibarikSanad::class);
    }
}
