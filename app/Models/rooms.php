<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    protected $fillable=['roomname','noofbed','facilities','price','image','image2','image3'];
}
