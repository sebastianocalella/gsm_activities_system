<?php

namespace App\Models\caves;

use App\Models\activities\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cave extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'latitude',
        'longitude',
        'deep',
        'length'
    ];

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
