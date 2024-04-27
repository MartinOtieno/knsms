<?php

use App\Http\Controllers\ApplicantAuth\AuthenticatedSessionController;
use App\Http\Controllers\ApplicantAuth\ConfirmablePasswordController;
use App\Http\Controllers\ApplicantAuth\EmailVerificationNotificationController;
use App\Http\Controllers\ApplicantAuth\EmailVerificationPromptController;
use App\Http\Controllers\ApplicantAuth\NewPasswordController;
use App\Http\Controllers\ApplicantAuth\PasswordController;
use App\Http\Controllers\ApplicantAuth\PasswordResetLinkController;
use App\Http\Controllers\ApplicantAuth\RegisteredUserController;
use App\Http\Controllers\ApplicantAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('applicant.register', [RegisteredUserController::class, 'create'])
                ->name('applicant.register');

    Route::post('applicant.register', [RegisteredUserController::class, 'store']);

    Route::get('applicant.login', [AuthenticatedSessionController::class, 'create'])
                ->name('applicant.login');

    Route::post('applicant.login', [AuthenticatedSessionController::class, 'store']);

    Route::get('applicant.forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('applicant.password.request');

    Route::post('applicant.forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('applicant.password.email');

    Route::get('applicant.reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('applicant.password.reset');

    Route::post('applicant.reset-password', [NewPasswordController::class, 'store'])
                ->name('applicant.password.store');
});

Route::middleware('applicant.auth')->group(function () {
    Route::get('applicant.verify-email', EmailVerificationPromptController::class)
                ->name('applicant.verification.notice');

    Route::get('applicant.verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('applicant.verification.verify');

    Route::post('applicant.email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('applicant.verification.send');

    Route::get('applicant.confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('applicant.password.confirm');

    Route::post('applicant.confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('applicant.password', [PasswordController::class, 'update'])->name('applicant.password.update');

    Route::post('applicant.logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('applicant.logout');
});
