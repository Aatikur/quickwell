<?php

use Illuminate\Http\Request;


// ========== Home =========
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'FrontendController@index')->name('web.index');
    // Package
    Route::group(['namespace' => 'Package'], function () {
        Route::get('/package-detail/{id}', 'PackageController@showPackage')->name('web.package.package_detail');

        Route::group(['middleware' => 'auth:web'], function () {
            Route::post('/book/package/', 'PackageController@bookPackage')->name('web.package_book');
            Route::post('payumoney/response', 'PackageController@response')->name('web.payment.response');
            Route::get('/Invoice', 'PackageController@invoice')->name('web.package.invoice');
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
        Route::get('/posts/{slug}/{id}', 'BlogsController@showPost')->name('web.single_post');
    });

    // Profile Section
    Route::group(['namespace' => 'Profile'], function () {
        Route::get('/account', 'ProfileController@index')->name('web.account.account');    
    });
});



// ========== Forgot Password =========
Route::get('/Forgot-password', function () {
    return view('web.password.forgot-pasword');
})->name('web.password.forgot-pasword');

// ========== Confirm Password =========
Route::get('/Confirm-password', function () {
    return view('web.password.confirm-pasword');
})->name('web.password.confirm-pasword');





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
