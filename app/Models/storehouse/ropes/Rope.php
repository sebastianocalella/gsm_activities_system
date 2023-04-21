<?php

namespace App\Models\storehouse\ropes;

use App\Models\activities\Activity;
use App\Models\storehouse\Brand;
use App\Models\storehouse\Equipment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rope extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_date',
        'length',
        'diameter'
    ];

    public function activities(){
        return $this->belongsToMany(Activity::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }
}
