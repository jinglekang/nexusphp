<?php
use Illuminate\Support\Facades\Route;

Route::post('nastools/approve', [\App\Http\Controllers\AuthenticateController::class, 'nasToolsApprove']);
Route::get('iyuu/verify', [\App\Http\Controllers\AuthenticateController::class, 'iyuuVerify']);
