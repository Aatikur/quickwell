<?php

use Illuminate\Http\Request;


// ========== Index =========
Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// ========== Login =========
Route::get('/Login', function () {
    return view('web.login');
})->name('web.login');

// ========== Forgot Password =========
Route::get('/Forgot-password', function () {
    return view('web.password.forgot-pasword');
})->name('web.password.forgot-pasword');

// ========== Confirm Password =========
Route::get('/Confirm-password', function () {
    return view('web.password.confirm-pasword');
})->name('web.password.confirm-pasword');

// ========== Register =========
Route::get('/Register', function () {
    return view('web.register');
})->name('web.register');

// ========== Account =========
Route::get('/Account', function () {
    return view('web.account.account');
})->name('web.account.account');

// ========== Contact =========
Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');

// ========== Doctor On Wall =========
Route::get('/Doctor_on_wall', function () {
    return view('web.doctor_on_call.doctor_on_call');
})->name('web.doctor_on_call.doctor_on_call');

// ========== Blog =========
Route::get('/Blog', function () {
    return view('web.blog.blog');
})->name('web.blog.blog');

// ========== Single-Blog =========
Route::get('/Single-Blog', function () {
    return view('web.blog.single-blog');
})->name('web.blog.single-blog');

// ========== Career =========
Route::get('/Career', function () {
    return view('web.career.career');
})->name('web.career.career');

// ========== Team =========
Route::get('/Team', function () {
    return view('web.team.team');
})->name('web.team.team');

// ========== Faq =========
Route::get('/Faq', function () {
    return view('web.faq.faq');
})->name('web.faq.faq');

// ========== Testimonial =========
Route::get('/Testimonial', function () {
    return view('web.testimonial.testimonial');
})->name('web.testimonial.testimonial');

// ========== Package_detail =========
Route::get('/Package-detail', function () {
    return view('web.package.package_detail');
})->name('web.package.package_detail');

// ========== Terms&Condition =========
Route::get('/TermsandCondition', function () {
    return view('web.other.tc');
})->name('web.other.tc');

// ========== Refund-Policy =========
Route::get('/Refund-Policy', function () {
    return view('web.other.refund');
})->name('web.other.refund');

// ========== Privacy =========
Route::get('/Privacy', function () {
    return view('web.other.privacy');
})->name('web.other.privacy');

// ========== Invoice =========
Route::get('/Invoice', function () {
    return view('web.other.invoice');
})->name('web.other.invoice');