<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'CEO',
                'salary' => '$85000'
            ],
            [
                'title' => 'Project Manager',
                'salary' => '$65000'
            ],
            [
                'title' => 'Acountant',
                'salary' => '$40000'
            ]
        ]
    ]);
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'CEO',
                'salary' => '$85000'
            ],
            [
                'id' => '2',
                'title' => 'Project Manager',
                'salary' => '$65000'
            ],
            [
                'id' => '3',
                'title' => 'Acountant',
                'salary' => '$40000'
            ]
        ]
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {
    dd($id);
})->name('jobs');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
