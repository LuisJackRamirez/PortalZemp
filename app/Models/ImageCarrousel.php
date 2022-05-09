<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageCarrousel extends Model
{
    use HasFactory;

    protected $table = 'image_carrousel';

    protected $fillable = ['nombre','imagen'];
}
