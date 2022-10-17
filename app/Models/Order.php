<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = "orderr";
    public $casts = [
        'images' => 'array',        
        'size' => 'array',        
        'color' => 'array',
      ]; 
}
