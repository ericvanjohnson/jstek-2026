<?php

use App\Models\Conference;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $conference = app('conference');
    if (!$conference) {
        abort(404, 'No conference found');
    }

    return view('welcome', compact('conference'));
})->name('home');

Route::get('/react', function () {
    $conference = Conference::first();

    return Inertia::render('Welcome', [
        'conference' => [
            'name' => $conference->name,
            'venue_name' => $conference->venue_name,
            'duration_in_days' => $conference->getDurationInDays(),
        ],
    ]);
})->name('react');
