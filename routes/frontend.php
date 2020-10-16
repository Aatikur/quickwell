<?php

use Illuminate\Http\Request;

// Password reset link request routes...
// Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// // Password reset routes...
// Route::get('password/reset/link/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
// Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
Route::get('/reset-password/{token}', function ($token) {
    return view('web.password.confirm-password', ['token' => $token]);
})->middleware(['guest'])->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|same:confirm_password',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'confirm_password', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();

            $user->setRememberToken(Str::random(60));

            event(new PasswordReset($user));
        }
    );

    return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => __($status)]);
})->middleware(['guest'])->name('password.update');
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
        // Route::post('password/reset', 'ForgetPasswordController@postReset')->name('password.reset');
    });
});

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
