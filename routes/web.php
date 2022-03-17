<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Inquiries;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Consignment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Pages::class, 'home']);
Route::get('/about-us', [Pages::class, 'about_us']);
Route::get('/services', [Pages::class, 'services']);
Route::get('/process', [Pages::class, 'process']);
Route::get('/clients', [Pages::class, 'clients']);
Route::get('/contact-us', [Pages::class, 'contact_us']);
Route::get('/gallery', [Pages::class, 'gallery']);
Route::get('/achievements', [Pages::class, 'achievements']);
Route::get('/iba-approved', [Pages::class, 'iba_approved']);
Route::get('/blogs', [Pages::class, 'blogs']);
Route::get('/branches', [Pages::class, 'branches']);
Route::get('/blogs/{slug}', [Pages::class, 'blog']);
Route::get('/services/{slug}', [Pages::class, 'service']);

Route::post('/quick-inquiry', [Inquiries::class, 'quick_inquiry']);
Route::post('/call-back-request', [Inquiries::class, 'call_back_request']);
Route::get('/inquiry-us', [Inquiries::class, 'get_inquiry_us']);
Route::post('/inquiry-us', [Inquiries::class, 'post_inquiry_us']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/quotation', [Admin::class, 'quotation']);
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/quotation', [Admin::class, 'make_quotation']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/home', [Admin::class, 'home']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/aboutus', [Admin::class, 'aboutus']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/aboutus', [Admin::class, 'post_aboutus']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/achievements', [Admin::class, 'achievements']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/achievements/add', [Admin::class, 'add_achievement']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/achievements/add', [Admin::class, 'post_add_achievement']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/achievements/{id}', [Admin::class, 'achievement']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/achievements/{id}/delete', [Admin::class, 'delete_achievement']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/achievements/{id}', [Admin::class, 'm_achievement']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/bigimages', [Admin::class, 'big_images']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/bigimages/add', [Admin::class, 'add_big_image']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/bigimages/add', [Admin::class, 'post_add_big_image']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/bigimages/{id}', [Admin::class, 'big_image']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/bigimages/{id}/delete', [Admin::class, 'delete_big_image']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/bigimages/{id}', [Admin::class, 'm_big_image']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/blogs', [Admin::class, 'blogs']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/blogs/add', [Admin::class, 'add_blog']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/blogs/add', [Admin::class, 'post_add_blog']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/blogs/{id}', [Admin::class, 'blog']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/blogs/{id}/delete', [Admin::class, 'delete_blog']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/blogs/{id}', [Admin::class, 'm_blog']);


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/branches', [Admin::class, 'branches']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/branches/add', [Admin::class, 'add_branch']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/branches/add', [Admin::class, 'post_add_branch']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/branches/{id}', [Admin::class, 'branch']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/branches/{id}/delete', [Admin::class, 'delete_branch']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/branches/{id}', [Admin::class, 'm_branch']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/callbackrequests', [Admin::class, 'call_back_requests']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/callbackrequests/{id}', [Admin::class, 'call_back_request']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/callbackrequests/{id}/delete', [Admin::class, 'delete_call_back_request']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/contactus', [Admin::class, 'contact_us']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/contactus', [Admin::class, 'm_contact_us']);


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/gallery', [Admin::class, 'gallery']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/gallery/add', [Admin::class, 'add_gall']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/gallery/add', [Admin::class, 'post_add_gall']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/gallery/{id}', [Admin::class, 'gall']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/gallery/{id}/delete', [Admin::class, 'delete_gall']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/gallery/{id}', [Admin::class, 'm_gall']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/inquiries', [Admin::class, 'inquiries']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/inquiries/{id}', [Admin::class, 'inquiry']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/inquiries/{id}/delete', [Admin::class, 'delete_inquiry']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/quickinquiries', [Admin::class, 'quick_inquiries']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/quickinquiries/{id}', [Admin::class, 'quick_inquiry']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/admin/quickinquiries/{id}/delete', [Admin::class, 'delete_quick_inquiry']);


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/seo', [Admin::class, 'seos']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/seo/{id}', [Admin::class, 'seo']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/seo/{id}', [Admin::class, 'm_seo']);


Route::middleware(['auth:sanctum', 'verified'])->get('/admin/services', [Admin::class, 'services']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/services/add', [Admin::class, 'add_service']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/services/add', [Admin::class, 'post_add_service']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/services/{id}', [Admin::class, 'service']);
Route::middleware(['auth:sanctum', 'verified'])->post('/admin/services/{id}', [Admin::class, 'm_service']);
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/services/{id}/delete', [Admin::class, 'delete_service']);


Route::middleware(['auth:sanctum', 'verified'])->get('/consignments/home', [Consignment::class, 'home']);
Route::middleware(['auth:sanctum', 'verified'])->get('/consignments/create', [Consignment::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/consignments/create', [Consignment::class, 'post_create']);

Route::get('/consignments/track', [Consignment::class, 'track']);
Route::get('/consignments/track/{consignment_number}', [Consignment::class, 'track_consignment']);

Route::middleware(['auth:sanctum', 'verified'])->get('/consignments/{id}', [Consignment::class, 'get_consignment']);
Route::middleware(['auth:sanctum', 'verified'])->post('/consignments/{id}', [Consignment::class, 'post_consignment']);
Route::middleware(['auth:sanctum', 'verified'])->get('/consignments/{id}/delete', [Consignment::class, 'delete_consignment']);

Route::get('/{slug}', [Pages::class, 'branch']);
