<?php

namespace App\Models\storehouse\eletronics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charger extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount'
    ];

}
