<?php


use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\LitterRegistrationController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\SellCatController;
use App\Http\Controllers\User\ShowEntryController;
use App\Http\Controllers\User\SingleCatRegistrationController;
use App\Http\Controllers\User\StudCertificateController;
use App\Http\Controllers\User\TransactionLogController;
use App\Http\Controllers\User\TransferLeaseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\User\CatController;


Route::prefix('user')->name('user.')->middleware(['auth','member'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('stud-certificate')->middleware(['balance.below.zero'])->name('stud_certificate.')->group(function () {

        Route::get('/', [StudCertificateController::class, 'index'])->name('index');
        Route::get('/create', [StudCertificateController::class, 'create'])->name('create');
        Route::post('/store', [StudCertificateController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [StudCertificateController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [StudCertificateController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [StudCertificateController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [StudCertificateController::class, 'destroy'])->name('delete');
    });
    Route::prefix('cats')->name('cat.')->middleware(['balance.below.zero'])->group(function () {

        Route::get('/', [CatController::class, 'index'])->name('index');
        Route::get('/edit/{catId}', [CatController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [CatController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [CatController::class, 'show'])->name('show');
        Route::get('/cat-datatables', [CatController::class, 'datatables'])->name('datatable'); //JSON REQUEST
        Route::get('/get-registered-cats', [CatController::class, 'getRegCats'])->name('get_reg_cats'); //JSON REQUEST
    });
    Route::prefix('litter-registration')->name('litter_registration.')->middleware(['balance.below.zero'])->group(function () {

        Route::get('/', [LitterRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [LitterRegistrationController::class, 'create'])->name('create');
        Route::post('/store', [LitterRegistrationController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [LitterRegistrationController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [LitterRegistrationController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [LitterRegistrationController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [LitterRegistrationController::class, 'destroy'])->name('delete');
    });

    Route::prefix('single-cat-registration')->name('single_cat_reg.')->middleware(['balance.below.zero'])->group(function () {

        Route::get('/', [SingleCatRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [SingleCatRegistrationController::class, 'create'])->name('create');
        Route::post('/store', [SingleCatRegistrationController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [SingleCatRegistrationController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [SingleCatRegistrationController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [SingleCatRegistrationController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [SingleCatRegistrationController::class, 'destroy'])->name('delete');
    });

    Route::prefix('transfer-lease')->name('transfer_lease.')->middleware(['balance.below.zero'])->group(function () {

        Route::get('/', [TransferLeaseController::class, 'index'])->name('index');
        Route::get('/create', [TransferLeaseController::class, 'create'])->name('create');
        Route::post('/store', [TransferLeaseController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [TransferLeaseController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [TransferLeaseController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [TransferLeaseController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [TransferLeaseController::class, 'destroy'])->name('delete');
    });
    Route::prefix('profile')->name('profile.')->middleware(['auth'])->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/update/{id}', [ProfileController::class, 'update'])->name('update');
    });
    Route::prefix('stud-certificate')->name('stud_certificate.')->middleware(['balance.below.zero'])->group(function () {
        Route::get('/', [StudCertificateController::class, 'index'])->name('index');
        Route::get('/create', [StudCertificateController::class, 'create'])->name('create');
        Route::post('/store', [StudCertificateController::class, 'store'])->name('store');
        Route::post('/get-dames',[StudCertificateController::class,'getDames'])->name('get_dames');
        Route::post('/get-owner',[StudCertificateController::class,'getDameOwner'])->name('get_dame_owner');
    });

    Route::prefix('transaction-log')->name('transaction_log.')->middleware(['auth'])->group(function () {
        Route::get('/', [TransactionLogController::class, 'index'])->name('index');
        Route::get('/transfer-funds', [TransactionLogController::class, 'create'])->name('funds_transfer')->middleware(['balance.below.zero']);
        Route::post('/transfer-funds', [TransactionLogController::class, 'transferFunds'])->name('funds_transfer_post')->middleware(['balance.below.zero']);
        Route::get('/show/{id}', [TransactionLogController::class, 'show'])->name('show');
    });
    Route::prefix('transfer-lease')->name('transfer_lease.')->middleware(['balance.below.zero'])->group(function () {
        Route::get('/', [TransferLeaseController::class, 'index'])->name('index');
    });
    Route::prefix('litter-registration')->name('litter_registration.')->middleware(['balance.below.zero'])->group(function () {
        Route::get('/', [LitterRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [LitterRegistrationController::class, 'create'])->name('create');
        Route::post('/store', [LitterRegistrationController::class, 'store'])->name('store');
    });

    Route::prefix('litter-registration')->name('litter_registration.')->middleware(['balance.below.zero'])->group(function () {
        Route::get('/', [LitterRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [LitterRegistrationController::class, 'create'])->name('create');
        Route::post('/store', [LitterRegistrationController::class, 'store'])->name('store');
    });

    Route::prefix('events')->name('event.')->middleware(['balance.below.zero'])->group(function () {
        Route::get('/cat-entered', [ShowEntryController::class, 'catEntered'])->name('cat_entered');
        Route::get('/cat-entered/{eventId}', [ShowEntryController::class, 'showCatEntered'])->name('show_cat_entered');
        Route::prefix('show-entries')->name('entry.')->middleware(['auth'])->group(function () {
            Route::get('/', [ShowEntryController::class, 'index'])->name('index');
            Route::get('/entries/{event_id}', [ShowEntryController::class, 'showEntries'])->name('entries');
            Route::get('/create/{id?}', [ShowEntryController::class, 'create'])->name('create');
            Route::post('/store', [ShowEntryController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [ShowEntryController::class, 'show'])->name('show');
            Route::post('/prefill', [ShowEntryController::class, 'preFill'])->name('prefill');
            Route::get('/export-catalog/{event_id}', [ShowEntryController::class, 'exportCatalog'])->name('catalog');
        });
    });

    // Routes to handle Advertisement
    Route::prefix('advertisements')->name('sell_cat.')->middleware(['balance.below.zero'])->group(function () {
        Route::get('/', [SellCatController::class, 'index'])->name('index');
        Route::get('/create', [SellCatController::class, 'create'])->name('create');
        Route::post('/store', [SellCatController::class, 'store'])->name('store');
        Route::get('/edit/{addId}', [SellCatController::class, 'edit'])->name('edit');
        Route::get('/show/{addId}', [SellCatController::class, 'show'])->name('show');
        Route::post('/update/{catId}', [SellCatController::class, 'update'])->name('update');
        Route::get('/delete/{catId}', [SellCatController::class, 'destroy'])->name('delete');
    });


});
