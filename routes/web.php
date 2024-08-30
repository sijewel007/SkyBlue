<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PDFController;


Route::get('/', [SiteController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/redirect', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[SiteController::class,'redirect']);

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/credit',[SiteController::class,'credit'])->middleware('auth');
Route::get('/credit2nd',[SiteController::class,'credit2nd'])->middleware('auth');

Route::get('/debit',[SiteController::class,'debit'])->middleware('auth');
Route::get('/debit2nd',[SiteController::class,'debit2nd'])->middleware('auth');

Route::get('/balance',[SiteController::class,'balance'])->middleware('auth');
Route::get('/balance2nd',[SiteController::class,'balance2nd'])->middleware('auth');

Route::get('balance_pdf',[PDFController::class,'balance_pdf_get']);
Route::get('balance2nd_pdf',[PDFController::class,'balance2nd_pdf_get']);

Route::get('credit_pdf',[PDFController::class,'credit_pdf_get']);
Route::get('credit2nd_pdf',[PDFController::class,'credit2nd_pdf_get']);

Route::get('debit_pdf',[PDFController::class,'debit_pdf_get']);
Route::get('debit2nd_pdf',[PDFController::class,'debit2nd_pdf_get']);
