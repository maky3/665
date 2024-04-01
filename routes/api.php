<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestResultController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/test-results', [TestResultController::class, 'store'])->name('test-results.store');
Route::get('/students/{student}/test-results', [TestResultController::class, 'showByStudent'])->name('test-results.showByStudent');
Route::get('/tests/average-score', [TestResultController::class, 'averageScore'])->name('tests.averageScore');
Route::get('/tests/median-score', [TestResultController::class, 'medianScore'])->name('tests.medianScore');
