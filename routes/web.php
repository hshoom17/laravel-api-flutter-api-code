<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();
    return view('welcome', compact('users'));
});
