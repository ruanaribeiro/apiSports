<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    protected $table = "locales";

    protected $fillable = [
        "street",
        "neighborhood",
        "number",
        "cep",
        "city",
        "state",
        "country",
    ];
}
