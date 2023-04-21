<?php

namespace App\Models\storehouse\electronics;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpercificBattery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'purchase_date'];

}
