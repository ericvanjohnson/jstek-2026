<?php

use App\Models\Conference;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $conference = app('conference');

    return view('welcome', compact('conference'));
})->name('home');

Route::get('/react', function () {
    $conference = Conference::first();

    return Inertia::render('Welcome', [
        'conference' => [
            'name' => $conference->name,
            'venue_name' => $conference->venue_name,
            'venue_city' => $conference->venue_city,
            'venue_state' => $conference->venue_state,
            'duration_in_days' => $conference->getDurationInDays(),
        ],
    ]);
})->name('react');
