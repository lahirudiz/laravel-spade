<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'CEO',
                'salary' => '$85000',
            ],
            [
                'id' => '2',
                'title' => 'Project Manager',
                'salary' => '$65000',
            ],
            [
                'id' => '3',
                'title' => 'Acountant',
                'salary' => '$40000',
            ],
        ],
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => '1',
            'title' => 'CEO',
            'salary' => '$85000',
        ],
        [
            'id' => '2',
            'title' => 'Project Manager',
            'salary' => '$65000',
        ],
        [
            'id' => '3',
            'title' => 'Acountant',
            'salary' => '$40000',
        ],
    ];

    // foreach ($jobs as $job) {
    //     if($job['id'] == $id) {
    //         dd($job);
    //     }
    // }

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job-view', ['job' => $job]);

})->name('jobs');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
