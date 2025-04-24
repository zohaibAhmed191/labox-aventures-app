<?php

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('index');  // Return the index.blade.php view
});
Route::get('/faqs', function () {
    return view('faqs');  // Return the index.blade.php view
});
Route::get('/aprops', function () {
    return view('aprops');  // Return the index.blade.php view
});
Route::get('/blogs', function () {
    return view('blogs');  // Return the index.blade.php view
});

// Define login route that redirects to Filament login
Route::get('login', function () {
    return redirect()->to(Filament::getLoginUrl());
})->name('login');

Route::get('/admin/dashboard', function () {
    return view('filament.pages.dashboard');  // This is Filament's default dashboard view
})->name('filament.pages.dashboard');



Route::post('/contact/submit', function (\Illuminate\Http\Request $request) {
    // Validate form data
    $request->validate([
        'name' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email',
        'city' => 'required|string',
        'zip_code' => 'required|string',
        'subject' => 'required|string',
        'description' => 'required|string',
    ]);

    // Create an array of the form data
    $formData = $request->only(['name', 'phone', 'email', 'city', 'zip_code', 'subject', 'description']);

    // Send the email to the user-provided email address
    Mail::to($request->email) // This sends the email to the address provided by the user
        ->send(new ContactUsMail($formData));

    // Return a success message
    return response()->json(['message' => 'Your message has been sent successfully!']);
})->name('contact.submit');