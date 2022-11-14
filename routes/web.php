<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginCreateController;
use App\Http\Controllers\Auth\LoginStoreController;
use App\Http\Controllers\Blogs\BlogsController;
use App\Http\Controllers\Blogs\BlogsCreateController;
use App\Http\Controllers\Blogs\BlogsDeleteController;
use App\Http\Controllers\Blogs\BlogsEditController;
use App\Http\Controllers\Blogs\BlogsIndexController;
use App\Http\Controllers\Blogs\BlogsStatusController;
use App\Http\Controllers\Blogs\BlogsStoreController;
use App\Http\Controllers\Blogs\BlogsUpdateController;
use App\Http\Controllers\Mcqs\McqsController;
use App\Http\Controllers\Mcqs\McqsCreateController;
use App\Http\Controllers\Mcqs\McqsDeleteController;
use App\Http\Controllers\Mcqs\McqsEditController;
use App\Http\Controllers\Mcqs\McqsIndexController;
use App\Http\Controllers\Mcqs\McqsStatusController;
use App\Http\Controllers\Mcqs\McqsStoreController;
use App\Http\Controllers\Mcqs\McqsUpdateController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Quiz App Routes

Route::get('/', LandingPageController::class)
    ->name('landingPage');

// Authentication
// Route::get('/login/create', LoginCreateController::class)
//     ->name('login.create');

// Route::post('/login/store', LoginStoreController::class)
//     ->name('login.store');

// Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
//     ->name('password.request');

// Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
//     ->name('password.email');

// Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
//     ->name('password.reset');

// Route::post('/reset-password', [NewPasswordController::class, 'store'])
//     ->name('password.update');

// Subject Routes

Route::get('/subjects', SubjectController::class)
    ->name('subjects.index');

Route::get('/subjects/create', SubjectCreateController::class)
    ->name('subjects.create');

Route::post('/subjects/store', SubjectStoreController::class)
    ->name('subjects.store');

Route::get('/subjects/{subject:id}/edit', SubjectEditController::class)
    ->name('subjects.edit');

Route::put('/subjects/{subject:id}/update', SubjectUpdateController::class)
    ->name('subjects.update');

Route::get('/subjects/{subject:id}/delete', SubjectDeleteController::class)
    ->name('subjects.delete');

// Materials Routes

Route::get('/material/{subject:id}', MaterialIndexController::class)
    ->name('material.index');

// Mcqs Routes

Route::get('/mcqs', McqsController::class)
    ->name('mcqs.index');

Route::get('/mcqs/{subject:id}', McqsIndexController::class)
    ->name('mcqs');

Route::get('/mcq/{subject:id}/create', McqsCreateController::class)
    ->name('mcq.create');

Route::post('/mcqs/{subject:id}/store', McqsStoreController::class)
    ->name('mcqs.store');

Route::get('/mcqs/{mcq:id}/edit', McqsEditController::class)
    ->name('mcqs.edit');

Route::get('/mcqs/{mcq:id}/edit', McqsEditController::class)
    ->name('mcqs.edit');

Route::put('/mcq/{mcq:id}/update', McqsUpdateController::class)
    ->name('mcq.update');

Route::get('/mcqs/{mcq:id}/delete', McqsDeleteController::class)
    ->name('mcqs.delete');

// Blogs Routes

Route::get('/blogs', BlogsIndexController::class)
    ->name('blogs.index');

Route::get('/blogs/{subject:id}', BlogsController::class)
    ->name('blogs');

Route::get('/blogs/{subject:id}/create', BlogsCreateController::class)
    ->name('blogs.create');

Route::post('/blogs/{subject:id}/store', BlogsStoreController::class)
    ->name('blogs.store');

Route::get('/blogs/{blog:id}/edit', BlogsEditController::class)
    ->name('blogs.edit');

Route::put('/blogs/{blog:id}/update', BlogsUpdateController::class)
    ->name('blogs.update');

Route::get('/blogs/{blog:id}/status', BlogsStatusController::class)
    ->name('blogs.status');

Route::get('/blogs/{blog:id}/delete', BlogsDeleteController::class)
    ->name('blogs.delete');

// Lictures Routes

Route::get('/lectures/{subject:id}', LecturesIndexController::class)
    ->name('lectures.index');

// Route::get('/blogs', function () {
//     return Inertia::render('Blogs');
// })->name('blogs');

// Route::get('/lectures', function () {
//     return Inertia::render('Lectures');
// })->name('lectures');

// Route::get('/mcqs/admin-panel', function () {
//     return Inertia::render('McqsAdminPanel');
// })->name('mcqs.adminPanel');

// Route::get('/blogs/admin-panel', function () {
//     return Inertia::render('BlogsAdminPanel');
// })->name('blogs.adminPanel');

// Route::get('/lictures/admin-panel', function () {
//     return Inertia::render('LicturesAdminPanel');
// })->name('lictures.adminPanel');

// Route::get('/subjects/admin-panel', function () {
//     return Inertia::render('SubjectsAdminPanel');
// })->name('subjects.adminPanel');

// Route::get('/blogs/create', function () {
//     return Inertia::render('BlogsCreate');
// })->name('blogs.create');

// Route::get('/lictures/create', function () {
//     return Inertia::render('LicturesCreate');
// })->name('lictures.create');

// Route::get('/quizzes', function () {
//     return Inertia::render('Quizzes');
// })->name('quizzes.index');

// Route::get('/draft', function () {
//     return Inertia::render('Draft');
// })->name('draft');

// Route::get('/previousQuiz', function () {
//     return Inertia::render('PreviousQuiz');
// })->name('previousQuiz');
