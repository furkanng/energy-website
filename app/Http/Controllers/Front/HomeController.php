<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        $blogs = Blog::all();
        return view('front.pages.home', compact(["socialMedia", "blogs"]));
    }

    public function about()
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        $about = $model->get("general_settings");
        return view('front.pages.about', compact(["socialMedia", "about"]));
    }

    public function category()
    {
        $categories = Category::all();
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.category', compact(["socialMedia", "categories"]));
    }

    public function contact()
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.contact', compact("socialMedia"));
    }

    public function price()
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.price', compact("socialMedia"));
    }

    public function blog($seo_link)
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");

        $blog = Blog::where("seo_link", $seo_link)->first();

        return view('front.pages.blog', compact(["socialMedia", "blog"]));
    }

    public function product()
    {
        $model = new Setting();
        $socialMedia = $model->get("socialMedia_settings");
        return view('front.pages.product', compact("socialMedia"));
    }
}
