<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Dashboard\MainController as DashboardMainController;
use App\Http\Controllers\Dashboard\ProjectController as DashboardProjectsController;
use App\Http\Controllers\Dashboard\SubscriberMailController;


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

Route::prefix('dashboard')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'admin',
])->group(function () {
    Route::get('/', [DashboardMainController::class, 'dashboard'])->name('dashboard');

    Route::resource('/projects', DashboardProjectsController::class, ['as' => 'dashboard']);

    Route::get('/mails/create', [SubscriberMailController::class, 'create'])->name('dashboard.mails.create');
    Route::post('/mails/send', [SubscriberMailController::class, 'send'])->name('dashboard.mails.send');
});
Route::post('/suscribers', [SubscriberController::class, 'store'])->name('subscribers.store');

Route::get('/lang/{lang}', [MainController::class, 'lang'])->name('lang');

Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/{project}', [ProjectController::class, 'show'])->name('home.project');
