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
        "seo_link",
        "seo_title",
        "seo_description",
        "seo_keywords",
        "status"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function product()
    {
        return $this->hasMany(Product::class, "subcategory_id", "id");
    }

}
