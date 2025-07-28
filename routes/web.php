<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\RegisterController as AdminRegisterController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController as AdminForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController as AdminResetPasswordController;
use App\Http\Controllers\Admin\AdminController;

// Board
use App\Http\Controllers\Board\Auth\LoginController as BoardLoginController;
use App\Http\Controllers\Board\Auth\RegisterController as BoardRegisterController;
use App\Http\Controllers\Board\Auth\ForgotPasswordController as BoardForgotPasswordController;
use App\Http\Controllers\Board\Auth\ResetPasswordController as BoardResetPasswordController;
use App\Http\Controllers\Board\BoardController;

// Family
use App\Http\Controllers\Family\Auth\LoginController as FamilyLoginController;
use App\Http\Controllers\Family\Auth\RegisterController as FamilyRegisterController;
use App\Http\Controllers\Family\Auth\ForgotPasswordController as FamilyForgotPasswordController;
use App\Http\Controllers\Family\Auth\ResetPasswordController as FamilyResetPasswordController;
use App\Http\Controllers\Family\FamilyController;

// PT
use App\Http\Controllers\PT\Auth\LoginController as PTLoginController;
use App\Http\Controllers\PT\Auth\RegisterController as PTRegisterController;
use App\Http\Controllers\PT\Auth\ForgotPasswordController as PTForgotPasswordController;
use App\Http\Controllers\PT\Auth\ResetPasswordController as PTResetPasswordController;
use App\Http\Controllers\PT\PTController;

// Staff
use App\Http\Controllers\Staff\Auth\LoginController as StaffLoginController;
use App\Http\Controllers\Staff\Auth\RegisterController as StaffRegisterController;
use App\Http\Controllers\Staff\Auth\ForgotPasswordController as StaffForgotPasswordController;
use App\Http\Controllers\Staff\Auth\ResetPasswordController as StaffResetPasswordController;
use App\Http\Controllers\Staff\StaffController;

// Student
use App\Http\Controllers\Student\Auth\LoginController as StudentLoginController;
use App\Http\Controllers\Student\Auth\RegisterController as StudentRegisterController;
use App\Http\Controllers\Student\Auth\ForgotPasswordController as StudentForgotPasswordController;
use App\Http\Controllers\Student\Auth\ResetPasswordController as StudentResetPasswordController;
use App\Http\Controllers\Student\StudentController;

// Teacher
use App\Http\Controllers\Teacher\Auth\LoginController as TeacherLoginController;
use App\Http\Controllers\Teacher\Auth\RegisterController as TeacherRegisterController;
use App\Http\Controllers\Teacher\Auth\ForgotPasswordController as TeacherForgotPasswordController;
use App\Http\Controllers\Teacher\Auth\ResetPasswordController as TeacherResetPasswordController;
use App\Http\Controllers\Teacher\TeacherController;





Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::get('/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [AdminRegisterController::class, 'register']);

    Route::get('/password/reset', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('/password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('/password/reset', [AdminResetPasswordController::class, 'reset'])->name('admin.password.update');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});

Route::prefix('board')->group(function () {
    Route::get('/login', [BoardLoginController::class, 'showLoginForm'])->name('board.login');
    Route::post('/login', [BoardLoginController::class, 'login']);
    Route::post('/logout', [BoardLoginController::class, 'logout'])->name('board.logout');

    Route::get('/register', [BoardRegisterController::class, 'showRegistrationForm'])->name('board.register');
    Route::post('/register', [BoardRegisterController::class, 'register']);

    Route::get('/password/reset', [BoardForgotPasswordController::class, 'showLinkRequestForm'])->name('board.password.request');
    Route::post('/password/email', [BoardForgotPasswordController::class, 'sendResetLinkEmail'])->name('board.password.email');
    Route::get('/password/reset/{token}', [BoardResetPasswordController::class, 'showResetForm'])->name('board.password.reset');
    Route::post('/password/reset', [BoardResetPasswordController::class, 'reset'])->name('board.password.update');

    Route::middleware('auth:board')->group(function () {
        Route::get('/dashboard', [BoardController::class, 'dashboard'])->name('board.dashboard');
    });
});

Route::prefix('family')->group(function () {
    Route::get('/login', [FamilyLoginController::class, 'showLoginForm'])->name('family.login');
    Route::post('/login', [FamilyLoginController::class, 'login']);
    Route::post('/logout', [FamilyLoginController::class, 'logout'])->name('family.logout');

    Route::get('/register', [FamilyRegisterController::class, 'showRegistrationForm'])->name('family.register');
    Route::post('/register', [FamilyRegisterController::class, 'register']);

    Route::get('/password/reset', [FamilyForgotPasswordController::class, 'showLinkRequestForm'])->name('family.password.request');
    Route::post('/password/email', [FamilyForgotPasswordController::class, 'sendResetLinkEmail'])->name('family.password.email');
    Route::get('/password/reset/{token}', [FamilyResetPasswordController::class, 'showResetForm'])->name('family.password.reset');
    Route::post('/password/reset', [FamilyResetPasswordController::class, 'reset'])->name('family.password.update');

    Route::middleware('auth:family')->group(function () {
        Route::get('/dashboard', [FamilyController::class, 'dashboard'])->name('family.dashboard');
    });
});

Route::prefix('pt')->group(function () {
    Route::get('/login', [PTLoginController::class, 'showLoginForm'])->name('pt.login');
    Route::post('/login', [PTLoginController::class, 'login']);
    Route::post('/logout', [PTLoginController::class, 'logout'])->name('pt.logout');

    Route::get('/register', [PTRegisterController::class, 'showRegistrationForm'])->name('pt.register');
    Route::post('/register', [PTRegisterController::class, 'register']);

    Route::get('/password/reset', [PTForgotPasswordController::class, 'showLinkRequestForm'])->name('pt.password.request');
    Route::post('/password/email', [PTForgotPasswordController::class, 'sendResetLinkEmail'])->name('pt.password.email');
    Route::get('/password/reset/{token}', [PTResetPasswordController::class, 'showResetForm'])->name('pt.password.reset');
    Route::post('/password/reset', [PTResetPasswordController::class, 'reset'])->name('pt.password.update');

    Route::middleware('auth:pt')->group(function () {
        Route::get('/dashboard', [PTController::class, 'dashboard'])->name('pt.dashboard');
    });
});


Route::prefix('staff')->group(function () {
    Route::get('/login', [StaffLoginController::class, 'showLoginForm'])->name('staff.login');
    Route::post('/login', [StaffLoginController::class, 'login']);
    Route::post('/logout', [StaffLoginController::class, 'logout'])->name('staff.logout');

    Route::get('/register', [StaffRegisterController::class, 'showRegistrationForm'])->name('staff.register');
    Route::post('/register', [StaffRegisterController::class, 'register']);

    Route::get('/password/reset', [StaffForgotPasswordController::class, 'showLinkRequestForm'])->name('staff.password.request');
    Route::post('/password/email', [StaffForgotPasswordController::class, 'sendResetLinkEmail'])->name('staff.password.email');
    Route::get('/password/reset/{token}', [StaffResetPasswordController::class, 'showResetForm'])->name('staff.password.reset');
    Route::post('/password/reset', [StaffResetPasswordController::class, 'reset'])->name('staff.password.update');

    Route::middleware('auth:staff')->group(function () {
        Route::get('/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');
    });
});


Route::prefix('student')->group(function () {
    Route::get('/login', [StudentLoginController::class, 'showLoginForm'])->name('student.login');
    Route::post('/login', [StudentLoginController::class, 'login']);
    Route::post('/logout', [StudentLoginController::class, 'logout'])->name('student.logout');

    Route::get('/register', [StudentRegisterController::class, 'showRegistrationForm'])->name('student.register');
    Route::post('/register', [StudentRegisterController::class, 'register']);

    Route::get('/password/reset', [StudentForgotPasswordController::class, 'showLinkRequestForm'])->name('student.password.request');
    Route::post('/password/email', [StudentForgotPasswordController::class, 'sendResetLinkEmail'])->name('student.password.email');
    Route::get('/password/reset/{token}', [StudentResetPasswordController::class, 'showResetForm'])->name('student.password.reset');
    Route::post('/password/reset', [StudentResetPasswordController::class, 'reset'])->name('student.password.update');

    Route::middleware('auth:student')->group(function () {
        Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    });
});

Route::prefix('teacher')->group(function () {
    Route::get('/login', [TeacherLoginController::class, 'showLoginForm'])->name('teacher.login');
    Route::post('/login', [TeacherLoginController::class, 'login']);
    Route::post('/logout', [TeacherLoginController::class, 'logout'])->name('teacher.logout');

    Route::get('/register', [TeacherRegisterController::class, 'showRegistrationForm'])->name('teacher.register');
    Route::post('/register', [TeacherRegisterController::class, 'register']);

    Route::get('/password/reset', [TeacherForgotPasswordController::class, 'showLinkRequestForm'])->name('teacher.password.request');
    Route::post('/password/email', [TeacherForgotPasswordController::class, 'sendResetLinkEmail'])->name('teacher.password.email');
    Route::get('/password/reset/{token}', [TeacherResetPasswordController::class, 'showResetForm'])->name('teacher.password.reset');
    Route::post('/password/reset', [TeacherResetPasswordController::class, 'reset'])->name('teacher.password.update');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
    });
});

