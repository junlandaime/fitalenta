<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HeroSlideController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/events', [HomeController::class, 'event_index'])->name('events.index');
Route::get('/events/{event}', [HomeController::class, 'event_show'])->name('events.show');

Route::get('/articles', [HomeController::class, 'article_index'])->name('articles.index');
Route::get('/articles/{article}', [HomeController::class, 'article_show'])->name('articles.show');

Route::get('/services', [HomeController::class, 'service_index'])->name('services');
Route::get('/services/{service}', [HomeController::class, 'service_show'])->name('services.show');

Route::get('/gallery', [HomeController::class, 'gallery_index'])->name('gallery');
Route::get('/gallery/{gallery}', [HomeController::class, 'gallery_show'])->name('gallery.show');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'submit'])->name('contact.submit');
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('categories', CategoryController::class)->names('admin.categories');
    Route::resource('events', EventController::class)->names('admin.events');
    Route::resource('articles', ArticleController::class)->names('admin.articles');
    Route::resource('services', ServiceController::class)->names('admin.services');
    Route::resource('users', UserController::class)->names('admin.users');

    Route::resource('hero-slides', HeroSlideController::class)->names('admin.hero-slides');
    Route::resource('gallery', GalleryController::class)->names('admin.gallery');
    Route::resource('team-members', TeamMemberController::class)->names('admin.team-members');
    Route::resource('testimonials', TestimonialController::class)->names('admin.testimonials');
    Route::resource('clients', ClientController::class)->names('admin.clients');

    Route::get('/hero-slides/t/{slide}', [HeroSlideController::class, 'toggle'])->name('admin.hero-slides.toggle');
    Route::get('/team-members/t/{member}', [TeamMemberController::class, 'toggle'])->name('admin.team-members.toggle');
    Route::get('/testimonials/t/{testimonial}', [TestimonialController::class, 'toggle'])->name('admin.testimonials.toggle');
    Route::get('/clients/t/{client}', [ClientController::class, 'toggle'])->name('admin.clients.toggle');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
