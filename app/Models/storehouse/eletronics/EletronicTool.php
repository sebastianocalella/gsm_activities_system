<?php

namespace App\Models\storehouse\eletronics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EletronicTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'purchase_date'
    ];
}
