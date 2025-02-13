<?php

use App\Models\Location;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'), )) {
        return redirect()->route('filament.admin.pages.dashboard');
    }

    return back()->withErrors([
        'email' => 'Pogrešna email adresa ili lozinka.',
    ]);
})->name('filament.login');

Route::get('/home', function() {
//    $locations = Location::all();

    $locations = Location::query()->simplePaginate(6);

    return view('landing', compact('locations'));
});
