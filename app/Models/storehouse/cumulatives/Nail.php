<?php

namespace App\Models\storehouse\cumulatives;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nail extends Model
{
    use HasFactory;

    protected $fillable = [
        'length',
        'diameter',
        'amount',
        'to_shop'
    ];

    public function activities(){
        return $this->belongsToMany(Activity::class);
    }

    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }
}
