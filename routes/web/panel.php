<?php

use App\Http\Controllers\Admin\Authentication\AuthController;
use App\Http\Controllers\Admin\Cms\AccountController;
use App\Http\Controllers\Admin\Cms\AddressController;
use App\Http\Controllers\Admin\Cms\BlogController;
use App\Http\Controllers\Admin\Cms\BranchController;
use App\Http\Controllers\Admin\Cms\BulletinController;
use App\Http\Controllers\Admin\Cms\CatalogController;
use App\Http\Controllers\Admin\Cms\DocumentController;
use App\Http\Controllers\Admin\Cms\PackageController;
use App\Http\Controllers\Admin\Cms\PagesController;
use App\Http\Controllers\Admin\Cms\ReferenceController;
use App\Http\Controllers\Admin\Cms\ServiceController;
use App\Http\Controllers\Admin\Cms\SliderController;
use App\Http\Controllers\Admin\Cms\SssController;
use App\Http\Controllers\Admin\Customer\CommentController;
use App\Http\Controllers\Admin\Customer\CustomerController;
use App\Http\Controllers\Admin\Customer\MessageController;
use App\Http\Controllers\Admin\General\HomeController;
use App\Http\Controllers\Admin\Setting\ApiController;
use App\Http\Controllers\Admin\Setting\ContactController;
use App\Http\Controllers\Admin\Setting\EmailController;
use App\Http\Controllers\Admin\Setting\LinkListController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Setting\SocialMediaController;
use App\Http\Controllers\Admin\Shop\BrandController;
use App\Http\Controllers\Admin\Shop\CategoryController;
use App\Http\Controllers\Admin\Shop\ProductController;
use App\Http\Controllers\Admin\Shop\ProductImageController;
use App\Http\Controllers\Admin\Shop\SubCategoryController;
use App\Http\Controllers\Admin\Shop\SubProductController;
use App\Http\Controllers\Admin\Shop\SubSubCategoryController;
use App\Http\Controllers\Admin\Shop\VariantCategoryController;
use App\Http\Controllers\Admin\Shop\VariantController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, "login"]);

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


/*
Route::prefix('yonetim')->middleware("")->group(function () {

    Route::post('/logout', [AuthController::class, "logout"]);
    Route::resource('/pages', PagesController::class);
    Route::resource('/account', AccountController::class);
    Route::resource('/address', AddressController::class);
    Route::resource('/blog', BlogController::class);
    Route::resource('/branch', BranchController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/catalog', CatalogController::class);
    Route::resource('/comment', CommentController::class);
    Route::resource('/customer', CustomerController::class);
    Route::resource('/package', PackageController::class);
    Route::resource('/link-list', LinkListController::class);
    Route::resource('/message', MessageController::class);
    Route::resource('/reference', ReferenceController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/documents', DocumentController::class);
    Route::resource('/bulletin', BulletinController::class);
    Route::resource('/sss', SssController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/sub-category', SubCategoryController::class);
    Route::resource('/sub-subcategory', SubSubCategoryController::class);
    Route::resource('/variant', VariantController::class);
    Route::resource('/variant-category', VariantCategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/sub-product', SubProductController::class);
    Route::resource('/product-image', ProductImageController::class);
    Route::prefix("setting")->group(function () {
        Route::resource('/', SettingController::class)->only("index", "store");
        Route::resource('/api', ApiController::class)->only("index", "store");
        Route::resource('/contact', ContactController::class)->only("index", "store");
        Route::resource('/social-media', SocialMediaController::class)->only("index", "store");
        Route::resource('/email', EmailController::class)->only("index", "store");
    });
});
*/
