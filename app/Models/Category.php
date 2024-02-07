<?php

namespace App\Models;

use App\Traits\ImageTrait;
use App\Traits\SeoTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, ImageTrait, SeoTrait;

    protected $table = "categories";

    protected $fillable = [
        "name",
        "image",
        "seo_link",
        "seo_title",
        "seo_description",
        "seo_keywords",
        "top_menu",
        "showcase",
        "row",
        "status",
        "sira"
    ];

    public function subcategory()
    {
        return $this->hasMany(SubCategory::class, "category_id", "id");
    }

    public static function booted()
    {
        static::deleting(function ($model) {

            $subCategory = SubCategory::where("category_id", $model->id)->get();
            foreach ($subCategory as $sub) {
                Product::where("subcategory_id", $sub->id)->delete();
            }
        });
    }
}
