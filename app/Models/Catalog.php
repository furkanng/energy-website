<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory, ImageTrait;

    public $timestamps = false;

    protected $table = "catalog";

    protected $fillable = [
        "image",
        "pdf",
        "status",
    ];

}
