<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\BasicSite\HomePage;
use App\Livewire\BasicSite\AccountOpening;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\UserManagement;
use App\Livewire\Admin\Login as AdminLogin;
use App\Livewire\Admin\TransactionManagement;
use App\Livewire\Admin\TestimonialManagement;
use App\Livewire\BasicSite\PersonalBanking;
use App\Livewire\BasicSite\SmeBanking;
use App\Livewire\BasicSite\EBanking;
use App\Livewire\BasicSite\AboutUs;
use App\Livewire\BasicSite\Careers;
use App\Livewire\BasicSite\Media;
use App\Livewire\BasicSite\InvestorRelations;
use App\Livewire\BasicSite\Legal;
use App\Livewire\BasicSite\ContactUs;

Route::get('/', HomePage::class)->name('home');
Route::get('/open-account', AccountOpening::class)->name('account.open');
Route::get('/personal-banking', PersonalBanking::class)->name('banking.personal');
Route::get('/personal-banking-account-types', PersonalBanking::class);
Route::get('/personal-banking/{type}', PersonalBanking::class)->name('banking.personal.product');
Route::get('/sme-banking', SmeBanking::class)->name('banking.sme');
Route::get('/small-and-medium-enterprise-banking', SmeBanking::class);
Route::get('/sme/{type}', SmeBanking::class)->name('banking.sme.product');
Route::get('/e-banking', EBanking::class)->name('banking.e');
Route::get('/amju-electronic-banking-services', EBanking::class);
Route::get('/amju-electronic-banking-services/{type}', EBanking::class)->name('banking.e.product');
Route::get('/products-and-services', EBanking::class)->name('banking.e.all');
Route::get('/about-us', AboutUs::class)->name('about');
Route::get('/about-us/{type}', AboutUs::class)->name('about.us');
Route::get('/about-us/management-team/{person}', AboutUs::class)->defaults('type', 'management-team')->name('about.team');
Route::get('/careers', Careers::class)->name('careers');
Route::get('/careers/apply', Careers::class)->defaults('type', 'apply')->name('careers.apply');
Route::get('/about-us/career', Careers::class);
Route::get('/contact-us', ContactUs::class)->name('contact');

Route::get('/media/{type?}', Media::class)->name('site.media');
Route::get('/investor-relations', InvestorRelations::class)->name('site.ir');
Route::get('/investor-relations/{type}', InvestorRelations::class)->name('site.ir.type');
Route::get('/privacy-policy', Legal::class)->name('privacy');
Route::get('/terms', Legal::class)->name('terms');

Route::get('/admin/login', AdminLogin::class)->name('admin.login');

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/users', UserManagement::class)->name('users');
    Route::get('/transactions', TransactionManagement::class)->name('transactions');
    Route::get('/testimonials', TestimonialManagement::class)->name('testimonials');
});
