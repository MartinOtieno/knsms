<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestEnrollmentController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
// use Illuminate\Console\Application;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact.create', function () {
    return view('contact.create');
});
Route::get('/help', function () {
    return view('help');
});


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/apply', [StudentController::class, 'apply'])->name('students.apply');
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
Route::get('approve_student/{id}', [StudentController::class, 'approve_student']);
Route::get('reject_student/{id}', [StudentController::class, 'reject_student']);
Route::get('/search', [StudentController::class, 'search']);

Route::get('/donors', [DonorController::class, 'index'])->name('donors.donate');
Route::get('/donors/donate', [DonorController::class, 'donate'])->name('donors.index');
Route::post('/donors', [DonorController::class, 'store']);
Route::get('/donors/{id}', [DonorController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/create', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact/{id}', [ContactController::class, 'show']);

Route::get('/staff-list', [StaffController::class, 'index'])->name('staff-list.index');
Route::get('/add-staff', [StaffController::class, 'addstaff']);
Route::post('/save-staff', [StaffController::class, 'saveStaff']);
Route::get('/edit-staff/{id}', [StaffController::class, 'editStaff']);
Route::post('/update-staff/{id}', [StaffController::class, 'updateStaff']);
Route::get('/delete-staff/{id}', [StaffController::class, 'deleteStaff']);

Route::get('/search', [StaffController::class, 'search']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';

require __DIR__.'/adminauth.php';
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');


Route::get('/applicant/dashboard', function () {
    return view('applicant.dashboard');
})->name('applicant.dashboard');//->middleware(['auth:applicant', 'verified'])->name('applicant.dashboard');
require __DIR__.'/applicantauth.php';

require __DIR__.'/staffauth.php';
Route::get('/staff/dashboard', function () {
    return view('staff.dashboard');
})->middleware(['auth:staff', 'verified'])->name('staff.dashboard');

require __DIR__.'/sponsorauth.php';
Route::get('/sponsor/dashboard', function () {
    return view('sponsor.dashboard');
})->middleware(['auth:sponsor', 'verified'])->name('sponsor.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/send-testenrollment', [TestEnrollmentController::class, 'sentTestNotification']);