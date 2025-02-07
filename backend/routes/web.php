<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'), )) {
        return redirect()->route('filament.dashboard');
    }

    return back()->withErrors([
        'email' => 'Pogrešna email adresa ili lozinka.',
    ]);
})->name('filament.login');
