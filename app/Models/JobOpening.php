<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class JobOpening extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_name',
        'vacancy_no',
        'description'
    ];

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
