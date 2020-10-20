<?php

use Illuminate\Http\Request;
Route::post('/reset-password', 'ForgetPasswordController@updatePassword')->middleware(['guest'])->name('password.update');
// ========== Home =========
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'FrontendController@index')->name('web.index');
    // Package
    Route::group(['namespace' => 'Package'], function () {
        Route::get('/package-detail/{slug}/{id}', 'PackageController@showPackage')->name('web.package.package_detail');

        Route::group(['middleware' => 'auth:web'], function () {
            Route::post('/book/package/', 'PackageController@bookPackage')->name('web.package_book');
            Route::post('payumoney/response', 'PackageController@response')->name('web.payment.response');
            Route::get('response/invoice/{id}', 'PackageController@invoice')->name('web.package.invoice');
        });
    });
    // Login
    Route::group(['namespace' => 'Login'], function () {
        Route::get('/login', 'LoginController@login')->name('web.login');
        Route::post('/user/login', 'LoginController@userLogin')->name('web.user.login');
        Route::post('/user/logout', 'LoginController@logout')->name('web.logout');
    });
    // Register
    Route::group(['namespace' => 'Register'], function () {
        Route::get('/register', 'RegisterController@index')->name('web.register');
        Route::post('/user/register', 'RegisterController@register')->name('web.user.register');
    });
    // Blog
    Route::group(['namespace' => 'Blog'], function () {
        Route::get('/Blog', 'BlogsController@index')->name('web.blog.blog');
        Route::get('/posts/{slug}/{id}', 'BlogsController@showPost')->name('web.single_post');
    });

    // Profile Section
    Route::group(['namespace' => 'Profile'], function () {
        Route::get('/account', 'ProfileController@index')->name('web.account.account');    
    });

    // ========== Career =========
    Route::group(['namespace' => 'Career'], function () {
        Route::get('/Career', 'CareerController@index')->name('web.career.career');
        Route::post('/job/openings', 'CareerController@job')->name('web.job_openings');
    });
    // ========== Testimonial =========
    Route::group(['namespace' => 'Testimonial'], function () {
        Route::get('/Testimonial', 'TestimonialController@index')->name('web.testimonial.testimonial');
    });
    
    // ========== Forgot Password =========
    Route::group(['namespace' => 'ForgetPassword'], function () {
        Route::get('/Forgot-password', 'ForgetPasswordController@index')->name('web.password.forgot-pasword');
        Route::post('send/forgot-password', 'ForgetPasswordController@send')->name('web.user.forgot_password');
        Route::get('password/reset/{token}', 'ForgetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ForgetPasswordController@postReset')->name('password.do.reset');
    });

    // ========== Contact =========
    Route::group(['namespace' => 'Contact'], function () {
        Route::get('/Contact', 'ContactController@index')->name('web.contact.contact');
        Route::post('contact/us', 'ContactController@contact')->name('web.contact');
    });
    
});

// ========== Confirm Password =========
Route::get('/Confirm-password', function () {
    return view('web.password.confirm-pasword');
})->name('web.password.confirm-pasword');


// ========== Doctor On call =========
Route::get('/Doctor_on_call', function () {
    return view('web.doctor_on_call.doctor_on_call');
})->name('web.doctor_on_call.doctor_on_call');

// ========== Team =========
Route::get('/Team', function () {
    return view('web.team.team');
})->name('web.team.team');

// ========== Faq =========
Route::get('/Faq', function () {
    return view('web.faq.faq');
})->name('web.faq.faq');




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

// ========== Privacy =========
Route::get('/Response', function () {
    return view('web.payment.response');
})->name('web.payment.response');
