<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    public $table = "basket";
    public $casts = [
        'images' => 'array',        
        'size' => 'array',        
        'color' => 'array',
      ]; 

}
