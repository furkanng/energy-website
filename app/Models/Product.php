<?php

namespace App\Models;

use App\Traits\ImageTrait;
use App\Traits\SeoTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, SeoTrait, ImageTrait;

    protected $table = "products";

    protected $fillable = [
        "name",
        "category_id",
        "subcategory_id",
        "brand_id",
        "seo_link",
        "seo_title",
        "seo_description",
        "seo_keywords",
        "content",
        "image",
        "status",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, "subcategory_id", "id");
    }

    public function subsubcategory()
    {
        return $this->belongsTo(SubSubCategory::class, "sub_subcategory_id", "id");
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, "brand_id", "id");
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, "product_id", "id");
    }

}
