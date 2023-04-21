<?php

namespace App\Models\members;

use App\Models\activities\Activity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'subscription_year'
    ];

    public function qualification(){
        return $this->belongsTo(Qualification::class);
    }

    public function activities(){
        return $this->belongsToMany(Activity::class);
    }
}
