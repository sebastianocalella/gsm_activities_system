<?php

namespace App\Models\storehouse\harnesses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarnesseToolSubtype extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
}
