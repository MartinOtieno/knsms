<?php

use App\Http\Controllers\SponsorAuth\AuthenticatedSessionController;
use App\Http\Controllers\SponsorAuth\ConfirmablePasswordController;
use App\Http\Controllers\SponsorAuth\EmailVerificationNotificationController;
use App\Http\Controllers\SponsorAuth\EmailVerificationPromptController;
use App\Http\Controllers\SponsorAuth\NewPasswordController;
use App\Http\Controllers\SponsorAuth\PasswordController;
use App\Http\Controllers\SponsorAuth\PasswordResetLinkController;
use App\Http\Controllers\SponsorAuth\RegisteredUserController;
use App\Http\Controllers\SponsorAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:sponsor')->group(function () {
    
    Route::get('sponsor/register', [RegisteredUserController::class, 'create'])
    ->name('sponsor.register');

Route::post('sponsor/register', [RegisteredUserController::class, 'store']);

    Route::get('sponsor/login', [AuthenticatedSessionController::class, 'create'])
                ->name('sponsor.login');

    Route::post('sponsor/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('sponsor/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('sponsor.password.request');

    Route::post('sponsor/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('sponsor.password.email');

    Route::get('sponsor/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('sponsor.password.reset');

    Route::post('sponsor/reset-password', [NewPasswordController::class, 'store'])
                ->name('sponsor.password.store');
});

Route::middleware('auth:sponsor')->group(function () {
    Route::get('sponsor/verify-email', EmailVerificationPromptController::class)
                ->name('sponsor.verification.notice');

    Route::get('sponsor/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('sponsor.verification.verify');

    Route::post('sponsor/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('sponsor.verification.send');

    Route::get('sponsor/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('sponsor.password.confirm');

    Route::post('sponsor/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('sponsor/password', [PasswordController::class, 'update'])->name('sponsor.password.update');

    Route::post('sponsor/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('sponsor.logout');
});
