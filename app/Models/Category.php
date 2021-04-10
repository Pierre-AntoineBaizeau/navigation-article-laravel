<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // $fillable permet de pouvoir remmplir les chapms a l'aide d'un formulaire

    protected $fillable = [
        'nom',
        'img',
    ];
}
