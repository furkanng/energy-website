<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Marka;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        $contact = $model->get("contact_settings");
        $general = $model->get("general_settings");
        $blogs = Blog::where("status", "1")->orderBy('sira', 'asc')->get();
        $categories = Category::where("status", "1")->get();
        $sliders = Slider::where("status", "1")->orderBy('sira', 'asc')->get();
        $brands = Brand::where("status", "1")->orderBy('sira', 'asc')->get();
        return view('front.pages.home', compact(["socialMedia", "blogs", "categories", "sliders", "brands", "general", "contact"]));
    }

    public function about()
    {
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $socialMedia = $model->get("socialMedia_settings");
        $about = $model->get("general_settings");
        return view('front.pages.about', compact(["socialMedia", "about", "contact"]));
    }

    public function category()
    {
        $categories = Category::where("status", "1")->orderBy('sira', 'asc')->get();
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.category', compact(["socialMedia", "categories", "contact"]));
    }

    public function categoryShow($seo_link)
    {
        $category = Category::where("seo_link", $seo_link)->first();
        $subCategories = SubCategory::where("category_id", $category->id)->where("status", "1")->get();
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.subcategory', compact(["socialMedia", "subCategories", "category", "contact"]));
    }

    public function contact()
    {
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.contact', compact("socialMedia", "contact"));
    }

    public function price()
    {
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $catalogs = Catalog::where("status", "1")->orderBy('sira', 'asc')->get();
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.price', compact(["socialMedia", "catalogs", "contact"]));
    }

    public function marka()
    {
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $catalogs = Marka::where("status", "1")->orderBy('sira', 'asc')->get();
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.marka', compact(["socialMedia", "catalogs", "contact"]));
    }

    public function blog($seo_link)
    {
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $socialMedia = $model->get("socialMedia_settings");

        $blog = Blog::where("seo_link", $seo_link)->first();

        return view('front.pages.blog', compact(["socialMedia", "blog", "contact"]));
    }

    public function product($seo_link)
    {
        $subCategory = SubCategory::where("seo_link", $seo_link)->first();
        $model = new Setting();
        $contact = $model->get("contact_settings");
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.product', compact(["socialMedia", "subCategory", "contact"]));
    }
}
