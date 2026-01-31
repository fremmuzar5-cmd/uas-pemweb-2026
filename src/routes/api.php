<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SubmissionController;
use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Api\ApprovalController;
use App\Http\Controllers\Api\LecturerController;
use App\Http\Controllers\Api\NotificationController;

/*
|--------------------------------------------------------------------------
| Public API Routes
|--------------------------------------------------------------------------
| API ini digunakan oleh client (frontend / web app)
| untuk mengakses sistem pengajuan dan persetujuan sidang skripsi
| berbasis web dengan fitur Tanda Tangan Elektronik (TTE)
*/

/*
|--------------------------------------------------------------------------
| SUBMISSION (Pengajuan Sidang)
|--------------------------------------------------------------------------
*/
Route::get('/submissions', [SubmissionController::class, 'index']);       // tampil semua pengajuan
Route::post('/submissions', [SubmissionController::class, 'store']);      // ajukan sidang
Route::get('/submissions/{submission}', [SubmissionController::class, 'show']); // detail pengajuan
Route::put('/submissions/{submission}', [SubmissionController::class, 'update']); // update data
Route::delete('/submissions/{submission}', [SubmissionController::class, 'destroy']); // hapus pengajuan

/*
|--------------------------------------------------------------------------
| DOCUMENT (Upload & Verifikasi Berkas)
|--------------------------------------------------------------------------
*/
Route::post('/documents', [DocumentController::class, 'store']);          // upload berkas
Route::get('/documents/{submission}', [DocumentController::class, 'index']); // list dokumen
Route::delete('/documents/{document}', [DocumentController::class, 'destroy']); // hapus dokumen

/*
|--------------------------------------------------------------------------
| APPROVAL (Verifikasi & Persetujuan Admin)
|--------------------------------------------------------------------------
*/
Route::post('/approvals/{submission}/approve', [ApprovalController::class, 'approve']); // setujui
Route::post('/approvals/{submission}/reject', [ApprovalController::class, 'reject']);   // tolak

/*
|--------------------------------------------------------------------------
| LECTURER (Plotting Dosen & Penugasan)
|--------------------------------------------------------------------------
*/
Route::get('/lecturers', [LecturerController::class, 'index']);           // daftar dosen
Route::post('/lecturers/assign', [LecturerController::class, 'assign']); // plotting dosen

/*
|--------------------------------------------------------------------------
| NOTIFICATION
|--------------------------------------------------------------------------
*/
Route::get('/notifications', [NotificationController::class, 'index']);  // notifikasi user

/*
|--------------------------------------------------------------------------
| TEST API
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API Pengajuan Sidang Skripsi is working properly'
    ]);
});
