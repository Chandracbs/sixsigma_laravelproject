<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class MeetOurTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position_name',
        'description'
    ];

    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
