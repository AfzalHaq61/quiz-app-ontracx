<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginCreateController;
use App\Http\Controllers\Auth\LoginStoreController;
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

Route::get('/mcqs/{subject:id}', McqsIndexController::class)
    ->name('mcqs.index');

Route::get('/mcqs/{subject:id}/create', McqsCreateController::class)
    ->name('mcqs.create');

Route::get('/mcqs/{subject:id}/store', McqsCreateController::class)
    ->name('mcqs.store');

Route::get('/mcqs/{subject:id}/edit', McqsCreateController::class)
    ->name('mcqs.edit');

Route::get('/mcqs/{subject:id}/update', McqsCreateController::class)
    ->name('mcqs.update');

Route::get('/mcqs/{subject:id}/delete', McqsCreateController::class)
    ->name('mcqs.delete');

// Blogs Routes

Route::get('/blogs/{subject:id}', BlogsIndexController::class)
    ->name('blogs.index');

// Lictures Routes

Route::get('/lectures/{subject:id}', LecturesIndexController::class)
    ->name('lectures.index');

Route::get('/blogs', function () {
    return Inertia::render('Blogs');
})->name('blogs');

Route::get('/lectures', function () {
    return Inertia::render('Lectures');
})->name('lectures');

Route::get('/mcqs/admin-panel', function () {
    return Inertia::render('McqsAdminPanel');
})->name('mcqs.adminPanel');

Route::get('/blogs/admin-panel', function () {
    return Inertia::render('BlogsAdminPanel');
})->name('blogs.adminPanel');

Route::get('/lictures/admin-panel', function () {
    return Inertia::render('LicturesAdminPanel');
})->name('lictures.adminPanel');

Route::get('/subjects/admin-panel', function () {
    return Inertia::render('SubjectsAdminPanel');
})->name('subjects.adminPanel');

Route::get('/mcqs/create', function () {
    return Inertia::render('McqsCreate');
})->name('mcqs.create');

Route::get('/blogs/create', function () {
    return Inertia::render('BlogsCreate');
})->name('blogs.create');

Route::get('/lictures/create', function () {
    return Inertia::render('LicturesCreate');
})->name('lictures.create');

Route::get('/quizzes', function () {
    return Inertia::render('Quizzes');
})->name('quizzes.index');

Route::get('/draft', function () {
    return Inertia::render('Draft');
})->name('draft');

Route::get('/previousQuiz', function () {
    return Inertia::render('PreviousQuiz');
})->name('previousQuiz');
