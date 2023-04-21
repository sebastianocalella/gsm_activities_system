<?php

namespace App\Models\storehouse\cumulatives;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anchor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'amount', 'shape', 'to_shop'];

}
