<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth;
use App\Http\Controllers\Board;
use App\Http\Controllers\Family;
use App\Http\Controllers\Admin\Auth\LoginController;





Route::prefix('admin')->group(function () {
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\LoginController@login');
    Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

    Route::get('/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Admin\Auth\RegisterController@register');

    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');
        // Add more admin routes here
    });
});
Route::prefix('board')->group(function () {
    Route::get('/login', 'Board\Auth\LoginController@showLoginForm')->name('board.login');
    Route::post('/login', 'Board\Auth\LoginController@login');
    Route::post('/logout', 'Board\Auth\LoginController@logout')->name('board.logout');

    Route::get('/register', 'Board\Auth\RegisterController@showRegistrationForm')->name('board.register');
    Route::post('/register', 'Board\Auth\RegisterController@register');

    Route::get('/password/reset', 'Board\Auth\ForgotPasswordController@showLinkRequestForm')->name('board.password.request');
    Route::post('/password/email', 'Board\Auth\ForgotPasswordController@sendResetLinkEmail')->name('board.password.email');
    Route::get('/password/reset/{token}', 'Board\Auth\ResetPasswordController@showResetForm')->name('board.password.reset');
    Route::post('/password/reset', 'Board\Auth\ResetPasswordController@reset')->name('board.password.update');

    Route::middleware('auth:board')->group(function () {
        Route::get('/dashboard', 'Board\BoardController@dashboard')->name('board.dashboard');
        // Add more board routes here
    });
});
Route::prefix('family')->group(function () {
    Route::get('/login', 'Family\Auth\LoginController@showLoginForm')->name('family.login');
    Route::post('/login', 'Family\Auth\LoginController@login');
    Route::post('/logout', 'Family\Auth\LoginController@logout')->name('family.logout');

    Route::get('/register', 'Family\Auth\RegisterController@showRegistrationForm')->name('family.register');
    Route::post('/register', 'Family\Auth\RegisterController@register');

    Route::get('/password/reset', 'Family\Auth\ForgotPasswordController@showLinkRequestForm')->name('family.password.request');
    Route::post('/password/email', 'Family\Auth\ForgotPasswordController@sendResetLinkEmail')->name('family.password.email');
    Route::get('/password/reset/{token}', 'Family\Auth\ResetPasswordController@showResetForm')->name('family.password.reset');
    Route::post('/password/reset', 'Family\Auth\ResetPasswordController@reset')->name('family.password.update');

    Route::middleware('auth:family')->group(function () {
        Route::get('/dashboard', 'Family\FamilyController@dashboard')->name('family.dashboard');
        // Add more family routes here
    });
});
Route::prefix('pt')->group(function () {
    Route::get('/login', 'PT\Auth\LoginController@showLoginForm')->name('pt.login');
    Route::post('/login', 'PT\Auth\LoginController@login');
    Route::post('/logout', 'PT\Auth\LoginController@logout')->name('pt.logout');

    Route::get('/register', 'PT\Auth\RegisterController@showRegistrationForm')->name('pt.register');
    Route::post('/register', 'PT\Auth\RegisterController@register');

    Route::get('/password/reset', 'PT\Auth\ForgotPasswordController@showLinkRequestForm')->name('pt.password.request');
    Route::post('/password/email', 'PT\Auth\ForgotPasswordController@sendResetLinkEmail')->name('pt.password.email');
    Route::get('/password/reset/{token}', 'PT\Auth\ResetPasswordController@showResetForm')->name('pt.password.reset');
    Route::post('/password/reset', 'PT\Auth\ResetPasswordController@reset')->name('pt.password.update');

    Route::middleware('auth:pt')->group(function () {
        Route::get('/dashboard', 'PT\PTController@dashboard')->name('pt.dashboard');
        // Add more pt routes here
    });
});

Route::prefix('staff')->group(function () {
    Route::get('/login', 'Staff\Auth\LoginController@showLoginForm')->name('staff.login');
    Route::post('/login', 'Staff\Auth\LoginController@login');
    Route::post('/logout', 'Staff\Auth\LoginController@logout')->name('staff.logout');

    Route::get('/register', 'Staff\Auth\RegisterController@showRegistrationForm')->name('staff.register');
    Route::post('/register', 'Staff\Auth\RegisterController@register');

    Route::get('/password/reset', 'Staff\Auth\ForgotPasswordController@showLinkRequestForm')->name('staff.password.request');
    Route::post('/password/email', 'Staff\Auth\ForgotPasswordController@sendResetLinkEmail')->name('staff.password.email');
    Route::get('/password/reset/{token}', 'Staff\Auth\ResetPasswordController@showResetForm')->name('staff.password.reset');
    Route::post('/password/reset', 'Staff\Auth\ResetPasswordController@reset')->name('staff.password.update');

    Route::middleware('auth:staff')->group(function () {
        Route::get('/dashboard', 'Staff\StaffController@dashboard')->name('staff.dashboard');
        // Add more staff routes here
    });
});

Route::prefix('student')->group(function () {
    Route::get('/login', 'Student\Auth\LoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'Student\Auth\LoginController@login');
    Route::post('/logout', 'Student\Auth\LoginController@logout')->name('student.logout');

    Route::get('/register', 'Student\Auth\RegisterController@showRegistrationForm')->name('student.register');
    Route::post('/register', 'Student\Auth\RegisterController@register');

    Route::get('/password/reset', 'Student\Auth\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
    Route::post('/password/email', 'Student\Auth\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
    Route::get('/password/reset/{token}', 'Student\Auth\ResetPasswordController@showResetForm')->name('student.password.reset');
    Route::post('/password/reset', 'Student\Auth\ResetPasswordController@reset')->name('student.password.update');

    Route::middleware('auth:student')->group(function () {
        Route::get('/dashboard', 'Student\StudentController@dashboard')->name('student.dashboard');
        // Add more student routes here
    });
});
Route::prefix('teacher')->group(function () {
    Route::get('/login', 'Teacher\Auth\LoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Teacher\Auth\LoginController@login');
    Route::post('/logout', 'Teacher\Auth\LoginController@logout')->name('teacher.logout');

    Route::get('/register', 'Teacher\Auth\RegisterController@showRegistrationForm')->name('teacher.register');
    Route::post('/register', 'Teacher\Auth\RegisterController@register');

    Route::get('/password/reset', 'Teacher\Auth\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
    Route::post('/password/email', 'Teacher\Auth\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
    Route::get('/password/reset/{token}', 'Teacher\Auth\ResetPasswordController@showResetForm')->name('teacher.password.reset');
    Route::post('/password/reset', 'Teacher\Auth\ResetPasswordController@reset')->name('teacher.password.update');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/dashboard', 'Teacher\TeacherController@dashboard')->name('teacher.dashboard');
        // Add more teacher routes here
    });
});
