<?php

namespace App\Models\storehouse\cumulatives;

use App\Models\storehouse\Brand;
use App\Models\storehouse\Equipment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'size'
    ];

    public function activities(){
        return $this->belongsToMany(Activity::class);
    }

    public function brands(){
        return $this->belongsTo(Brand::class);
    }

    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }
}
