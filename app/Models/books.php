<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    public $fillable=['Book_Title','Book_Description','Book_Author','img'];
    public $timestamps=false;
}
