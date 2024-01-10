<?php

use App\Http\Controllers\ProfileController;
use App\Models\WebsiteInformation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Admin\WebsiteInformationController;
use App\Http\Controllers\Admin\FooterInformationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Route
Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::resource('/about-us', AboutController::class)->names([
    'index' => 'about.page'
]);

Route::resource('/courses', CourseController::class)->names([
    'index' => "course.page"
]);

Route::resource('/contact', ContactController::class)->names([
    'index' => "contact.page"
]);

Route::resource('/blogs', BlogController::class)->names([
    'index' => "blogs.page"
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware("auth")->group(function () {
    Route::get("/dashboard/website-base", function(){
        abort(404);
    })->name("website.base");
    Route::resource('/dashboard/website-base/website-information', WebsiteInformationController::class);
    Route::resource('/dashboard/website-base/footer-information', FooterInformationController::class);
});


require __DIR__.'/auth.php';
