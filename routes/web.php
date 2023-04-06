<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\MeetingController;

use App\Http\Controllers\NoteController;

use App\Http\Controllers\AbsencesController;

use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
;


// '/' => '/',
// '/meeting/anggota/{id}' => '/reunion/membre/{id}',
// '/meeting/hasil' => '/reunion/resultats',
// '/meeting/hasil/{id}' => '/reunion/resultats/{id}',
// '/meeting/hasil/download/{id}' => '/reunion/resultats/telecharger/{id}',
// '/meeting/jadwal' => '/reunion/horaire',
// '/meeting/jadwal/{id}' => '/reunion/horaire/{id}',
// '/user/{id}' => '/utilisateur/{id}',
// '/user.updateProfile' => '/utilisateur/modifier/profil',
// '/user/edit/editPassword' => '/utilisateur/modifier/motdepasse',
// '/user/edit/editProfile' => '/utilisateur/modifier/profil',
// '/user/edit/{id}' => '/utilisateur/modifier/{id}'



Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/meeting/anggota/{id}', [MeetingController::class, 'anggotaRapat'])->name('meeting.members');

Route::get('/reunion/resultats',[MeetingController::class, 'hasilRapat'])->name('meeting.results');

Route::get('/meeting/hasil/{id}',[MeetingController::class, 'detailHasilRapat'])->name('meeting.results.details');

Route::get('/meeting/hasil/download/{id}',[MeetingController::class, 'printPdf'])->name('meeting.results.pdf');

Route::get('/meeting/jadwal',[MeetingController::class, 'jadwalRapat'])->name('meeting.schedule');

Route::get('/meeting/jadwal/{id}',[MeetingController::class, 'detailJadwalRapat'])->name('meeting.schedule.details');

Route::get('/user/{id}',[UserController::class, 'detail'])->name('user.details');

Route::get('/user.updateProfile',[UserController::class, 'updateProfile'])->name('user.update.profile');

Route::post('/user/edit/editPassword',[UserController::class, 'editPassword'])->name('user.edit.password');

Route::post('/user/edit/editProfile',[UserController::class, 'editProfile'])->name('user.edit.profile');

Route::get('/user/edit/{id}',[UserController::class, 'edit'])->name('user.edit');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/user',[UserController::class, 'index'])->name('admin.users');

    // Route::get('/delete/{id}',[UserController::class, 'delete'] );

});

Route::middleware(['auth', 'Responsable'])->group(function () {
    Route::get('/meeting/buatrapat', [MeetingController::class, 'buatRapat'])->name('meeting.create');

    Route::get('/meeting/edit/{id}',[MeetingController::class, 'editRapat'])->name('meeting.edit');

    Route::get('/meeting/delete/{id}',[MeetingController::class, 'deleteRapat'])->name('meeting.delete');

    Route::post('/meeting-store',[MeetingController::class, 'createRapat'])->name('meeting.store');

    Route::post('/meetingupdate',[MeetingController::class, 'updateRapat'])->name('meeting.update');

    Route::get('meeting/hasil/terimaHasilRapat/{id}', [NoteController::class, 'acceptHasilRapat'])->name('note.accept');

    Route::post('meeting/hasil/tolakHasilRapat', [NoteController::class, 'rejectHasilRapat'])->name('note.reject');

});


Route::middleware(['auth', 'Maitreconf'])->group(function () {
    Route::get('/absen/buatabsen/{id}', [AbsencesController::class, 'buatAbsensi'])->name('absen.buatabsen');

    Route::post('/absen/input/{id}', [AbsencesController::class, 'inputAbsensi'])->name('absen.input');

    Route::get('/meeting/notulensi/{id}',[NoteController::class, 'lihatCatatan'])->name('meeting.notulensi');

    Route::post('/meeting/buatNotulensi',[NoteController::class, 'buatCatatan'])->name('meeting.buatNotulensi');

    Route::get('/undangan/terimaUndangan/{id}', [HomeController::class, 'terimaUndangan'])->name('undangan.terimaUndangan');

    Route::post('/undangan/tolakUndangan', [HomeController::class, 'tolakUndangan'])->name('undangan.tolakUndangan');
});

