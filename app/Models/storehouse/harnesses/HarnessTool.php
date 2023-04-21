<?php

namespace App\Models\storehouse\harnesses;

use App\Models\activities\Activity;
use App\Models\storehouse\Brand;
use App\Models\storehouse\Equipment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarnessTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_date'
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

    public function harness(){
        return $this->belongsTo(Harness::class);
    }

    public function harnessToolType(){
        return $this->belongsTo(HarnessToolType::class);
    }
}
