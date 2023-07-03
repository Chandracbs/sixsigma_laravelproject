<?php

namespace App\Models;
use App\Models\Image;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'testimonials',
        'name',
        'position'
    ];

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
