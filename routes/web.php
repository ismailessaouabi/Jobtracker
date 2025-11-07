<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Tableaux;
use App\Livewire\Dashboard\AjouterCondidature;
use App\Livewire\Dashboard\ListCondidatures;


Route::get('/', Register::class)->name('register');
Route::post('/register', [Register::class, 'register'])->name('register.post');
Route::get('/login', Login::class)->name('login');
Route::post('/login', [Login::class, 'login'])->name('login.post');


Route::get('/dashboard', Tableaux::class)->name('dashboard')->middleware('auth');
Route::get('/dashboard/ajouter-condidature', AjouterCondidature::class)->name('ajouter.condidature')->middleware('auth');
Route::get('/dashboard/list-condidatures', ListCondidatures::class)->name('list.condidatures')->middleware('auth');

