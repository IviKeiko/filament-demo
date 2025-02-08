<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
        return redirect()->route('filament.admin.pages.dashboard');
    }

    return back()->withErrors([
        'email' => 'Pogrešna email adresa ili lozinka.',
    ]);
})->name('filament.login');
