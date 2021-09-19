<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TractorController;
use App\Http\Controllers\Tractor\AccountController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/school', [SchoolController::class,'index'])->name('school');




// NewTractor
Route::get('/tractor', [TractorController::class,'index'])->name('tractor');

Route::resource('/movies', MoviesController::class);

Route::get('/category', [MoviesController::class,'category'])->name('category');

Route::resource('/news', NewsController::class);

Route::resource('/books', BooksController::class);
Route::get('/settings', [BooksController::class,'settings'])->name('settings');
Route::get('/addBook', [BooksController::class,'addBook'])->name('addBook');
Route::get('/editBook/{id}', [BooksController::class,'editBook'])->name('editBook');
Route::get('/viewBook/{id}', [BooksController::class,'viewBook'])->name('viewBook');
Route::get('/listBook', [BooksController::class,'listBook'])->name('listBook');
Route::get('/provideBook', [BooksController::class,'provideBook'])->name('provideBook');
Route::get('/returnBook', [BooksController::class,'returnBook'])->name('returnBook');
Route::get('/returnBookList/{id}', [BooksController::class,'returnBookList'])->name('returnBookList');
Route::get('/todayList', [BooksController::class,'todayList'])->name('todayList');


// Tractor Route

// Admin Route

// Route::get('/tractor', [TractorController::class, 'index'])->name('tractor');
// Route::get('/tractor_details', [TractorController::class, 'tractorDetails'])->name('tractor_details');
// Route::get('/tractor_earnings', [TractorController::class, 'tractorEarnings'])->name('tractor_earnings');
// Route::get('/tractor_spendings', [TractorController::class, 'tractorSpendings'])->name('tractor_spendings');
// Route::get('/receive_payments', [TractorController::class, 'receivePayments'])->name('receive_payments');
// Route::get('/provide_payments', [TractorController::class, 'providePayments'])->name('provide_payments');
// Route::get('/requested_payments', [TractorController::class, 'requestedPayments'])->name('requested_payments');
// Route::get('/settings', [TractorController::class, 'settings'])->name('settings');
// Route::get('/manage_accounts', [TractorController::class, 'manageAccounts'])->name('manage_accounts');
// Route::get('/assign_driver', [TractorController::class, 'assignDriver'])->name('assign_driver');
// Route::get('/add_tractor', [TractorController::class, 'addTractor'])->name('add_tractor');
// Route::post('/add_tractor_validation', [TractorController::class, 'addTractorValidation'])->name('add_tractor_validation');
// Route::get('/edit_account/{id}', [TractorController::class, 'editAccount'])->name('edit_account');

// Route::get('/spend_money', [TractorController::class, 'spendMoney'])->name('spend_money');

// // Driver Route

// Route::get('/update_tractor_details', [TractorController::class, 'updateTractorDetails'])->name('update_tractor_details');
// Route::get('/add_work', [TractorController::class, 'addWork'])->name('add_work');
// Route::get('/request_payments', [TractorController::class, 'requestPayments'])->name('request_payments');
// Route::get('/all_requests', [TractorController::class, 'allRequests'])->name('all_requests');

// // Both Route
// Route::get('/phone', [TractorController::class, 'phone'])->name('phone');
// Route::get('/profile', [TractorController::class, 'profile'])->name('profile');
// Route::get('/single_bill', [TractorController::class, 'singleBill'])->name('single_bill');

// Route::resource('/login', AccountController::class);
// Route::post('/logout', [AccountController::class, 'logout'])->name('logout');
// Route::get('/register', [AccountController::class, 'register'])->name('register');
// Route::post('/register_validation', [AccountController::class, 'registerValidation'])->name('register_validation');