<?php

namespace App\Models\storehouse\cumulatives;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connector extends Model
{
    use HasFactory;

    protected $fillable = ['color', 'purchase_date', 'shape', 'with_ferrule'];
}
