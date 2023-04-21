<?php

namespace App\Models\storehouse\harnesses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarnessToolType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'branch',
        'expiration'
    ];

    public function harnessTools(){
        return $this->belongsToMany(HarnessTool::class);
    }

    public function harnessToolSubtypes(){
        return $this->belongsToMany(HarnessToolSubtype::class);
    }
}
