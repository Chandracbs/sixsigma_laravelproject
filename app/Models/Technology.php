<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;


class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ordering'
    ];

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
