<?php

use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminAuth\AdminLogoutController;
use App\Http\Controllers\Admin\EmployeeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// User Profile
Route::get('/dashboard/profile', [UserProfileController::class, 'profile'])->middleware(['auth', 'verified'])->name('user.profile');

// Delete account(user)
Route::get('/dashboard/profile/delete{id}', [UserProfileController::class, 'delete'])->middleware(['auth', 'verified'])->name('user.delete');

// Add complaints
Route::get('/dashboard/profile/complaints', [ComplaintController::class, 'create'])->middleware(['auth', 'verified'])->name('user.create');

// Add complaints
//Route::get('/dashboard/profile/complaints/create', [ComplaintController::class, 'create'])->middleware(['auth', 'verified'])->name('user.create');

// Save complaints
Route::post('/dashboard/profile/complaints/save', [ComplaintController::class, 'save'])->middleware(['auth', 'verified'])->name('user.save');

// Appy  leave
Route::get('/dashboard/profile/leaves', [LeaveController::class, 'createLeave'])->middleware(['auth', 'verified'])->name('user.leave.create');

// Save leave
Route::post('/dashboard/profile/leaves/save', [LeaveController::class, 'saveLeave'])->middleware(['auth', 'verified'])->name('user.leave.save');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// User Logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.admin-dashboard');


// List all Employees
Route::get('admin/employees', [EmployeeController::class, 'list'])->name('admin.employee.list');

// Delete employee
Route::get('admin/employees/delete/{id}', [EmployeeController::class, 'delete'])->name('admin.employee.delete');

// Add Employee
Route::get('admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employee.create');
Route::post('admin/employees/save', [EmployeeController::class, 'save'])->name('admin.employee.save');

//Jobs
Route::get('admin/jobs', [JobController::class, 'listJob'])->name('admin.job.list');
Route::get('admin/create', [JobController::class, 'create'])->name('admin.job.create');
Route::post('admin/save', [JobController::class, 'save'])->name('admin.job.save');
Route::get('admin/delete/{id}', [JobController::class, 'delete'])->name('admin.job.delete');
Route::get('admin/edit/{id}', [JobController::class, 'edit'])->name('admin.job.edit');
Route::post('admin/update', [JobController::class, 'update'])->name('admin.job.update');

// Complaints
Route::get('admin/complaints', [ComplaintController::class, 'list'])->name('admin.complaint.list');


// Leaves
Route::get('admin/leaves', [LeaveController::class, 'list'])->name('admin.leave.list');

// Leave Approval
Route::get('admin/leaves/approve/{id}', [LeaveController::class, 'approve'])->name('admin.leave.approve');

// Leave rejection
Route::get('admin/leaves/reject/{id}', [LeaveController::class, 'reject'])->name('admin.leave.reject');

require __DIR__.'/adminauth.php';
