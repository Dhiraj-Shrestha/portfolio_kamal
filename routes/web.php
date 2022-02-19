<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ToolBackendController;
use App\Http\Controllers\ToolBoxController;
use App\Http\Controllers\ToolFrontEndController;
use App\Http\Controllers\ToolGeneralController;
use App\Http\Controllers\UseCaseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');

//login
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/authenticate', [HomeController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//
Route::get('use-case-study/{id}', [UseCaseController::class, 'show'])->name('use.case.study');


//toolbox-frontend
Route::get('/toolbox-frontend', [ToolFrontEndController::class, 'index'])->name('toolbox.frontend');
Route::get('/toolbox-frontend-create', [ToolFrontEndController::class, 'create'])->name('toolbox.frontend.create');
Route::post('/toolbox-frontend-upload', [ToolFrontEndController::class, 'upload'])->name('toolbox.frontend.upload');
Route::get('/toolbox-frontend-delete/{id}', [ToolFrontEndController::class, 'delete'])->name('toolbox.frontend.delete');
Route::get('/toolbox-frontend-edit/{id}', [ToolFrontEndController::class, 'edit'])->name('toolbox.frontend.edit');
Route::put('/toolbox-frontend-update/{id}', [ToolFrontEndController::class, 'update'])->name('toolbox.frontend.update');

//toolbox-backend
Route::get('/toolbox-backend', [ToolBackendController::class, 'index'])->name('toolbox.backend');
Route::get('/toolbox-backend-create', [ToolBackendController::class, 'create'])->name('toolbox.backend.create');
Route::post('/toolbox-backend-upload', [ToolBackendController::class, 'upload'])->name('toolbox.backend.upload');
Route::get('/toolbox-backend-delete/{id}', [ToolBackendController::class, 'delete'])->name('toolbox.backend.delete');
Route::get('/toolbox-backend-edit/{id}', [ToolBackendController::class, 'edit'])->name('toolbox.backend.edit');
Route::put('/toolbox-backend-update/{id}', [ToolBackendController::class, 'update'])->name('toolbox.backend.update');

//toolbox-general
Route::get('/toolbox-general', [ToolGeneralController::class, 'index'])->name('toolbox.general');
Route::get('/toolbox-general-create', [ToolGeneralController::class, 'create'])->name('toolbox.general.create');
Route::post('/toolbox-general-upload', [ToolGeneralController::class, 'upload'])->name('toolbox.general.upload');
Route::get('/toolbox-general-delete/{id}', [ToolGeneralController::class, 'delete'])->name('toolbox.general.delete');
Route::get('/toolbox-general-edit/{id}', [ToolGeneralController::class, 'edit'])->name('toolbox.general.edit');
Route::put('/toolbox-general-update/{id}', [ToolGeneralController::class, 'update'])->name('toolbox.general.update');

//Project category
Route::get('/projects', [ProjectController::class, 'project'])->name('projects');
Route::get('/project-category', [ProjectController::class, 'index'])->name('project.category');
Route::get('/project-category/create', [ProjectController::class, 'create'])->name('project.category.create');
Route::post('/project-category/store', [ProjectController::class, 'store'])->name('project.category.store');
Route::get('/project-category/edit/{id}', [ProjectController::class, 'edit'])->name('project.category.edit');
Route::put('/project-category/update/{id}', [ProjectController::class, 'update'])->name('project.category.update');
Route::get('/project-category/delete/{id}', [ProjectController::class, 'delete'])->name('project.category.delete');


//contact
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

Route::resource('myproject', AdminProjectController::class);
