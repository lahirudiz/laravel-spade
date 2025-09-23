<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => job::all(),
    ]);
})->name('jobs');

Route::get('/jobs/{id}', function ($id) {

    // foreach ($jobs as $job) {
    //     if($job['id'] == $id) {
    //         dd($job);
    //     }
    // }

    $job = Job::find($id);

    return view('job-view', ['job' => $job]);

})->name('jobs');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
