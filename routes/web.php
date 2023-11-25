<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ValidateFormController;

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

Route::get('/', [WebController::class, 'index'])->name("index");
Route::get('/about', [WebController::class, 'about'])->name("about");
Route::get('/projects', [WebController::class, 'projects'])->name("projects");
Route::get('/contact', [WebController::class, 'contract'])->name("contact");
Route::post('/contact', [ValidateFormController::class, 'validateForm'])->name("submit.contact");
