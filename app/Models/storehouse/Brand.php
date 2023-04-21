<?php

namespace App\Models\storehouse;

use App\Models\storehouse\ropes\Rope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable= [
        'name'
    ];

    public function ropes(){
        return $this->belongsToMany(Rope::class);
    }
}
