<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class WhatWeDo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ordering',
        'description'
    ];

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
