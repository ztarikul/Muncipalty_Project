<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParibarikMembers;
class ParibarikSanad extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function paribarikmembers(){
        return $this->hasMany(ParibarikMember::class);
    }
}
