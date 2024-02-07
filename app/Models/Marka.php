<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    use HasFactory;

    protected $table = "marka";

    protected $fillable = [
        "name",
        "image",
        "pdf",
        "sira",
        "status",
    ];
}
