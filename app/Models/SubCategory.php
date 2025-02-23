<?php

namespace App\Models;

use App\Traits\ImageTrait;
use App\Traits\SeoTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory, SeoTrait, ImageTrait;

    protected $table = "sub_categories";

    protected $fillable = [
        "name",
        "image",
        "category_id",
        "content",
        "seo_link",
        "seo_title",
        "seo_description",
        "seo_keywords",
        "status",
        "sira"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

}
