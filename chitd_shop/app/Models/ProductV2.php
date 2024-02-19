<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductV2 extends Model
{
    use HasFactory;
    protected $table='product_v2_s';
    protected $fillable=[
        'title',
        'url_img',
        'detail',
        'price',
        'created_at'
    ];

    
}
