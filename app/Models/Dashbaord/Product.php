<?php

namespace App\Models\Dashbaord;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // campos que pueden ser insertados
    protected $fillable = ['name','description','image','price'];
}
