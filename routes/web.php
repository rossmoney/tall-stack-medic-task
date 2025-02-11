<?php

use App\Models\Job;
use App\Models\Patient;
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

Route::view('/', 'home')->name('home');

Route::get('job/{job}', fn (Job $job) => view('job', ['job' => $job]))->name('job.edit');

Route::get('patient/{patient}', fn (Patient $patient) => view('patient', ['patient' => $patient]))->name('patient.edit');
