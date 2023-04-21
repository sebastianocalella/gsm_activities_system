<?php

namespace App\Models\storehouse;

use App\Models\storehouse\cumulatives\Bag;
use App\Models\storehouse\ropes\Rope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable=[
        'name'
    ];

    public function bags(){
        return $this->belongsToMany(Bag::class);
    }

    public function harnessTools(){
        return $this->belongsToMany(HarnessTool::class);
    }

    public function ropes(){
        return $this->belongsToMany(Rope::class);
    }
}
