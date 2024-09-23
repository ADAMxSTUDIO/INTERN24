<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('api')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);

        Route::post('/leave-requests', [LeaveRequestController::class, 'store']); // Soumettre une demande de congé
        Route::get('/leave-requests', [LeaveRequestController::class, 'index']); // Obtenir les demandes de congé de l'utilisateur
        Route::put('/leave-requests/{leaveRequest}', [LeaveRequestController::class, 'update']) // Examen d'une demande de congé
            ->middleware('role:manager'); // Seul un responsable peut examiner

        Route::post('/reports/pdf', [ReportController::class, 'generatePDF'])
            ->middleware('role:admin'); // Seul l'admin peut examiner
    });
});
