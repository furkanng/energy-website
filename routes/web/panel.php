<?php

use App\Http\Controllers\Admin\Authentication\AuthController;
use App\Http\Controllers\Admin\Cms\BlogController;
use App\Http\Controllers\Admin\Cms\CatalogController;
use App\Http\Controllers\Admin\Cms\SliderController;
use App\Http\Controllers\Admin\Customer\MessageController;
use App\Http\Controllers\Admin\General\HomeController;
use App\Http\Controllers\Admin\Setting\ContactController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Setting\SocialMediaController;
use App\Http\Controllers\Admin\Shop\BrandController;
use App\Http\Controllers\Admin\Shop\CategoryController;
use App\Http\Controllers\Admin\Shop\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, "index"])->name("panel.login");
Route::post('login', [AuthController::class, "login"])->name("panel.login.post");

Route::middleware("userMiddleware")->group(function () {
    Route::get('logout', [AuthController::class, "logout"])->name("panel.logout");
    Route::get("/", [HomeController::class, "home"])->name("panel.home");

    Route::prefix('ayarlar')->group(function () {
        Route::resource("sosyalmedya", SocialMediaController::class)->parameters(["sosyalmedya" => "id"])->names([
            'index' => 'panel.sosyalmedya.index',
            'store' => 'panel.sosyalmedya.store',
        ]);
        Route::resource("iletisim", ContactController::class)->parameters(["iletisim" => "id"])->names([
            'index' => 'panel.iletisim.index',
            'store' => 'panel.iletisim.store',
        ]);
        Route::resource("about", SettingController::class)->parameters(["about" => "id"])->names([
            'index' => 'panel.about.index',
            'store' => 'panel.about.store',
        ]);
        Route::resource("slider", SliderController::class)->parameters(["slider" => "id"])->names([
            'index' => 'panel.slider.index',
            'show' => 'panel.slider.show',
            'store' => 'panel.slider.store',
            'update' => 'panel.slider.update',
            'destroy' => 'panel.slider.destroy',
        ]);
        Route::resource("blog", BlogController::class)->parameters(["blog" => "id"])->names([
            'index' => 'panel.blog.index',
            'show' => 'panel.blog.show',
            'store' => 'panel.blog.store',
            'update' => 'panel.blog.update',
            'destroy' => 'panel.blog.destroy',
        ]);
        Route::resource("category", CategoryController::class)->parameters(["category" => "id"])->names([
            'index' => 'panel.category.index',
            'show' => 'panel.category.show',
            'store' => 'panel.category.store',
            'update' => 'panel.category.update',
            'destroy' => 'panel.category.destroy',
        ]);
        Route::resource("subcategory", SubCategoryController::class)->parameters(["subcategory" => "id"])->names([
            'index' => 'panel.subcategory.index',
            'show' => 'panel.subcategory.show',
            'store' => 'panel.subcategory.store',
            'update' => 'panel.subcategory.update',
            'destroy' => 'panel.subcategory.destroy',
        ]);
        Route::resource("catalog", CatalogController::class)->parameters(["catalog" => "id"])->names([
            'index' => 'panel.catalog.index',
            'show' => 'panel.catalog.show',
            'store' => 'panel.catalog.store',
            'update' => 'panel.catalog.update',
            'destroy' => 'panel.catalog.destroy',
        ]);
        Route::resource("message", MessageController::class)->parameters(["message" => "id"])->names([
            'index' => 'panel.message.index',
            'show' => 'panel.message.show',
            'store' => 'panel.message.store',
            'destroy' => 'panel.message.destroy',
        ]);
        Route::resource("brand", BrandController::class)->parameters(["brand" => "id"])->names([
            'index' => 'panel.brand.index',
            'show' => 'panel.brand.show',
            'store' => 'panel.brand.store',
            'update' => 'panel.brand.update',
            'destroy' => 'panel.brand.destroy',
        ]);
    });
});
