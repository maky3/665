<?php

use App\Http\Controllers\TestResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/test-results', [TestResultController::class, 'store'])->name('test-results.store');
Route::get('/students/{student}/test-results', [TestResultController::class, 'showByStudent'])->name('test-results.showByStudent');
Route::get('/tests/average-score', [TestResultController::class, 'averageScore'])->name('tests.averageScore');
Route::get('/tests/median-score', [TestResultController::class, 'medianScore'])->name('tests.medianScore');

/*
Route::get('/students/{student}/tests', [TestResultController::class, 'testsByStudent'])->name('tests.testsByStudent'); Route::post('/test-results', [TestResultController::class , 'store'])->name('test-results');
Route::get('/students/{studentId}/test-results', [TestResultController::class, 'show'])->name('student.test-results');
Route::get('/test-results/average-score', [TestResultController::class , 'show'])->name('test-results.averageScore');
Route::get('/test-results/median-score', [TestResultController::class, 'show'])->name('test-results.median-score');
*/

