<?php

namespace App\Models\storehouse\harnesses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harness extends Model
{
    use HasFactory;

    public function harnessTools(){
        return $this->belongsToMany(HarnessTool::class);
    }
}
