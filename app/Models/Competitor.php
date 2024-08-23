<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    use HasFactory;

    
    protected $table = "competitors";

    protected $fillable = [
        "name",
        "age",
        "heigth",
        "weigth",
        "gender",
        "cpf",
        "rg",
        "team",
    ];
}
