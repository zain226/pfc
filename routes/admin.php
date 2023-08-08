<?php

use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GalleryGridController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\LiveStreamController;
use App\Http\Controllers\Admin\PrintPedigreeController;
use App\Http\Controllers\Admin\SellCatController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ShowEntryController;
use App\Http\Controllers\Admin\SingleCatRegistrationController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TitlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\GenderManagementController;
use App\Http\Controllers\Admin\ColorManagementController;
use App\Http\Controllers\Admin\BreedManagementController;
use App\Http\Controllers\Admin\BreederManagementController;
use App\Http\Controllers\Admin\OwnerManagementController;
use App\Http\Controllers\Admin\StudCertificateController;
use App\Http\Controllers\Admin\LitterRegistrationController;
use App\Http\Controllers\Admin\TransferLeaseController;
use App\Http\Controllers\Admin\TransactionLogController;
use App\Http\Controllers\Admin\MembershipApplicationController;
use App\Http\Controllers\Admin\EventManagementController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PfcTeamController;
use App\Http\Controllers\Admin\VisitngJudgeController;
use App\Http\Controllers\Admin\JudgeController;



Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    
    Route::resource('blogs', BlogController::class);
    Route::resource('visting_judges', VisitngJudgeController::class);
    Route::resource('judges', JudgeController::class);
    
    Route::get('/settings', [SettingController::class,'index'])->name('cms');
    Route::post('/settings', [SettingController::class,'settingCms'])->name('cms.setting');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('cats')->name('cat.')->middleware(['auth'])->group(function () {

        Route::get('/', [CatController::class, 'index'])->name('index');
        Route::get('/create', [CatController::class, 'create'])->name('create');
        Route::post('/store', [CatController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [CatController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [CatController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [CatController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [CatController::class, 'destroy'])->name('delete');
        Route::get('/cat-datatables', [CatController::class, 'datatables'])->name('datatable'); //JSON REQUEST
        Route::get('/get-males', [CatController::class, 'getMales'])->name('get_males'); //JSON REQUEST
        Route::get('/get-females', [CatController::class, 'getFemales'])->name('get_females'); //JSON REQUEST
        Route::get('/get-registered-cats', [CatController::class, 'getRegCats'])->name('get_reg_cats'); //JSON REQUEST
        Route::get('/deduct-export-pedigree-fee/{catId}', [CatController::class, 'deductExportPedigreeFee'])->name('deduct.export.fee');
        Route::get('/deduct-duplicate-pedigree-fee/{catId}', [CatController::class, 'deductDuplicatePedigreeFee'])->name('deduct.duplicate.fee');

        Route::get('/print-pedigree-front/{id}', [PrintPedigreeController::class, 'generateFrontPedigree'])->name('cat_print_front');
        Route::get('/print-pedigree-front/{id}/{export?}', [PrintPedigreeController::class, 'generateFrontPedigree'])->name('cat_print_front.export');
        Route::get('/print-pedigree-back/{id}', [PrintPedigreeController::class, 'generateBackPedigree'])->name('cat_print_back');
        Route::get('/print-pedigree-back/{id}/{export?}', [PrintPedigreeController::class, 'generateBackPedigree'])->name('cat_print_back.export');
        Route::get('/print-champion-certificate/{id}', [PrintPedigreeController::class, 'printChampionCertificate'])->name('champion.certificate');
    });
    Route::prefix('gender-management')->name('gender-management.')->middleware(['auth'])->group(function () {

        Route::get('/', [GenderManagementController::class, 'index'])->name('index');
        Route::get('/create', [GenderManagementController::class, 'create'])->name('create');
        Route::post('/store', [GenderManagementController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [GenderManagementController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [GenderManagementController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [GenderManagementController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [GenderManagementController::class, 'destroy'])->name('delete');
    });
    Route::prefix('color-management')->name('color-management.')->middleware(['auth'])->group(function () {

        Route::get('/', [ColorManagementController::class, 'index'])->name('index');
        Route::get('/create', [ColorManagementController::class, 'create'])->name('create');
        Route::post('/store', [ColorManagementController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [ColorManagementController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [ColorManagementController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [ColorManagementController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [ColorManagementController::class, 'destroy'])->name('delete');
        Route::get('/get-colors', [ColorManagementController::class, 'getColors'])->name('get_color'); //JSON REQUEST
    });
    Route::prefix('breed-management')->name('breed-management.')->middleware(['auth'])->group(function () {

        Route::get('/', [BreedManagementController::class, 'index'])->name('index');
        Route::get('/create', [BreedManagementController::class, 'create'])->name('create');
        Route::post('/store', [BreedManagementController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [BreedManagementController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [BreedManagementController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [BreedManagementController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [BreedManagementController::class, 'destroy'])->name('delete');
        Route::get('/get-breeds', [BreedManagementController::class, 'getBreeds'])->name('get_breed'); //JSON REQUEST
    });
    Route::prefix('groups')->name('group.')->middleware(['auth'])->group(function () {
        Route::get('/', [GroupController::class, 'index'])->name('index');
        Route::get('/create', [GroupController::class, 'create'])->name('create');
        Route::post('/store', [GroupController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [GroupController::class, 'update'])->name('update');
        Route::get('/show/{id}', [GroupController::class, 'show'])->name('show');
        Route::get('/delete/{id}', [GroupController::class, 'destroy'])->name('delete');
    });
    Route::prefix('breeder-management')->name('breeder-management.')->middleware(['auth'])->group(function () {

        Route::get('/', [BreederManagementController::class, 'index'])->name('index');
        Route::get('/create', [BreederManagementController::class, 'create'])->name('create');
        Route::post('/store', [BreederManagementController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [BreederManagementController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [BreederManagementController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [BreederManagementController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [BreederManagementController::class, 'destroy'])->name('delete');
        Route::get('/transaction-log/{breederId}', [BreederManagementController::class, 'getTransactionLog'])->name('log');
        Route::get('/breeder-datatable', [BreederManagementController::class, 'datatables'])->name('datatable'); //JSON REQUEST
        Route::get('/get-breeders', [BreederManagementController::class, 'getBreeders'])->name('get_breeder'); //JSON REQUEST
        Route::get('/print-kennel-card/{id}', [PrintPedigreeController::class, 'printKennelCard'])->name('print_kennel_card');
    });
    Route::prefix('owner-management')->name('owner_management.')->middleware(['auth'])->group(function () {

        Route::get('/', [OwnerManagementController::class, 'index'])->name('index');
        Route::get('/create', [OwnerManagementController::class, 'create'])->name('create');
        Route::post('/store', [OwnerManagementController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [OwnerManagementController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [OwnerManagementController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [OwnerManagementController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [OwnerManagementController::class, 'destroy'])->name('delete');
        Route::get('/owner-datatable', [OwnerManagementController::class, 'datatables'])->name('datatable'); //JSON REQUEST
        Route::get('/get-owners', [OwnerManagementController::class, 'getOwners'])->name('get_owner'); //JSON REQUEST
    });
    Route::prefix('stud-certificate')->name('stud_certificate.')->middleware(['auth'])->group(function () {

        Route::get('/', [StudCertificateController::class, 'index'])->name('index');
        Route::get('/create', [StudCertificateController::class, 'create'])->name('create');
        Route::post('/store', [StudCertificateController::class, 'store'])->name('store');
//        Route::get('/edit/{catId}', [StudCertificateController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [StudCertificateController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [StudCertificateController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [StudCertificateController::class, 'destroy'])->name('delete');
        Route::post('/get-dames',[StudCertificateController::class,'getDames'])->name('get_dames');
        Route::post('/get-owner',[StudCertificateController::class,'getDameOwner'])->name('get_dame_owner');
    });
    Route::prefix('litter-registration')->name('litter_registration.')->middleware(['auth'])->group(function () {

        Route::get('/', [LitterRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [LitterRegistrationController::class, 'create'])->name('create');
        Route::post('/store', [LitterRegistrationController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [LitterRegistrationController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [LitterRegistrationController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [LitterRegistrationController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [LitterRegistrationController::class, 'destroy'])->name('delete');
    });

    Route::prefix('single-cat-registration')->name('single_cat_reg.')->group(function () {
        Route::get('/', [SingleCatRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [SingleCatRegistrationController::class, 'create'])->name('create');
        Route::post('/store', [SingleCatRegistrationController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [SingleCatRegistrationController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [SingleCatRegistrationController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [SingleCatRegistrationController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [SingleCatRegistrationController::class, 'destroy'])->name('delete');
    });

    Route::prefix('transfer-lease')->name('transfer_lease.')->middleware(['auth'])->group(function () {

        Route::get('/', [TransferLeaseController::class, 'index'])->name('index');
        Route::get('/create', [TransferLeaseController::class, 'create'])->name('create');
        Route::post('/store', [TransferLeaseController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [TransferLeaseController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [TransferLeaseController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [TransferLeaseController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [TransferLeaseController::class, 'destroy'])->name('delete');
    });
    Route::prefix('transaction-log')->name('transaction_log.')->middleware(['auth'])->group(function () {
        Route::get('/', [TransactionLogController::class, 'index'])->name('index');
        Route::get('/credit-sheet', [TransactionLogController::class, 'creditSheet'])->name('credit.sheet');
        Route::get('/create', [TransactionLogController::class, 'create'])->name('create');
        Route::post('/store', [TransactionLogController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [TransactionLogController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [TransactionLogController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [TransactionLogController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [TransactionLogController::class, 'destroy'])->name('delete');
    });
    Route::prefix('expenses')->name('expense.')->middleware(['auth'])->group(function () {
        Route::get('/', [ExpenseController::class, 'index'])->name('index');
        Route::get('/create', [ExpenseController::class, 'create'])->name('create');
        Route::post('/store', [ExpenseController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ExpenseController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ExpenseController::class, 'update'])->name('update');
        Route::get('/show/{id}', [ExpenseController::class, 'show'])->name('show');
        Route::get('/delete/{id}', [ExpenseController::class, 'destroy'])->name('delete');
        Route::post('/report', [ExpenseController::class, 'report'])->name('report');
    });
    Route::prefix('membership-application')->name('membership_application.')->middleware(['auth'])->group(function () {
        Route::get('/', [MembershipApplicationController::class, 'index'])->name('index');
//        Route::get('/create', [MembershipApplicationController::class, 'create'])->name('create');
//        Route::post('/store', [MembershipApplicationController::class, 'store'])->name('store');
        Route::get('/edit/{applicationId}', [MembershipApplicationController::class, 'edit'])->name('edit');
        Route::post('/update/{applicationId}', [MembershipApplicationController::class, 'update'])->name('update');
        Route::get('/show/{applicationId}', [MembershipApplicationController::class, 'show'])->name('show');
        Route::get('/delete/{applicationId}', [MembershipApplicationController::class, 'destroy'])->name('delete');
    });
    Route::prefix('event-management')->name('event_management.')->middleware(['auth'])->group(function () {
        Route::get('/', [EventManagementController::class, 'index'])->name('index');
        Route::get('/create', [EventManagementController::class, 'create'])->name('create');
        Route::post('/store', [EventManagementController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [EventManagementController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [EventManagementController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [EventManagementController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [EventManagementController::class, 'destroy'])->name('delete');
    });
    Route::prefix('entries')->name('entry.')->middleware(['auth'])->group(function () {
        Route::get('/{event_id}', [ShowEntryController::class, 'index'])->name('index');
        Route::get('/create/{event_id}', [ShowEntryController::class, 'create'])->name('create');
        Route::post('/store/{event_id}', [ShowEntryController::class, 'store'])->name('store');
        Route::get('/edit/{entryId}/{event_id}', [ShowEntryController::class, 'edit'])->name('edit');
        Route::post('/update/{entryId}', [ShowEntryController::class, 'update'])->name('update');
        Route::get('/show/{entryId}', [ShowEntryController::class, 'show'])->name('show');
        Route::get('/delete/{entryId}', [ShowEntryController::class, 'destroy'])->name('delete');
        Route::post('/prefill', [ShowEntryController::class, 'preFill'])->name('prefill');
        Route::get('/export-catalog/{event_id}', [ShowEntryController::class, 'exportCatalog'])->name('catalog');
    });
    Route::get('profile', function () {
        return view('admin.profile');
    })->name('profile');
    Route::prefix('pfc-team')->name('pfc-team.')->middleware(['auth'])->group(function () {

        Route::get('/', [PfcTeamController::class, 'index'])->name('index');
        // Route::post('/store', [MembershipApplicationController::class, 'store'])->name('store');
        Route::post('/store', [PfcTeamController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [PfcTeamController::class, 'edit'])->name('edit');
        Route::get('/show/{catId}', [PfcTeamController::class, 'show'])->name('show');
        Route::post('/update/{catId}', [PfcTeamController::class, 'update'])->name('update');
        Route::get('/delete/{catId}', [PfcTeamController::class, 'destroy'])->name('delete');
        Route::get('/create', [PfcTeamController::class, 'create'])->name('create');
    });

    Route::prefix('services')->name('service.')->middleware(['auth'])->group(function () {

        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [ServiceController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [ServiceController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [ServiceController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [ServiceController::class, 'destroy'])->name('delete');
    });

    Route::prefix('gallery-grid')->name('gallery_grid.')->middleware(['auth'])->group(function () {
        Route::get('/', [GalleryGridController::class, 'index'])->name('index');
        Route::get('/create', [GalleryGridController::class, 'create'])->name('create');
        Route::post('/store', [GalleryGridController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [GalleryGridController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [GalleryGridController::class, 'update'])->name('update');
        Route::get('/delete/{catId}', [GalleryGridController::class, 'destroy'])->name('delete');
    });

    Route::prefix('gallery')->name('gallery.')->middleware(['auth'])->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index');
        Route::get('/create', [GalleryController::class, 'create'])->name('create');
        Route::post('/store', [GalleryController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [GalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [GalleryController::class, 'update'])->name('update');
        Route::get('/delete/{catId}', [GalleryController::class, 'destroy'])->name('delete');
    });
    Route::prefix('cat-selling-adds')->name('sell_cat.')->middleware(['auth'])->group(function () {
        Route::get('/', [SellCatController::class, 'index'])->name('index');
        Route::get('/create', [SellCatController::class, 'create'])->name('create');
        Route::post('/store', [SellCatController::class, 'store'])->name('store');
        Route::get('/edit/{addId}', [SellCatController::class, 'edit'])->name('edit');
        Route::get('/show/{addId}', [SellCatController::class, 'show'])->name('show');
        Route::post('/update/{catId}', [SellCatController::class, 'update'])->name('update');
        Route::get('/delete/{catId}', [SellCatController::class, 'destroy'])->name('delete');
    });
    Route::prefix('live-stream')->name('live_stream.')->middleware(['auth'])->group(function () {
        Route::get('/', [LiveStreamController::class, 'edit'])->name('edit');
        Route::post('/update/{Id}', [LiveStreamController::class, 'update'])->name('update');
    });

    Route::prefix('subscribers')->name('subscriber.')->middleware(['auth'])->group(function () {

        Route::get('/', [SubscriberController::class, 'index'])->name('index');
        Route::get('/delete/{id}', [SubscriberController::class, 'destroy'])->name('delete');
    });
    Route::prefix('show-titles')->name('title.')->middleware(['auth'])->group(function () {

        Route::get('/', [TitlesController::class, 'index'])->name('index');
        Route::get('/create', [TitlesController::class, 'create'])->name('create');
        Route::post('/store', [TitlesController::class, 'store'])->name('store');
        Route::get('/edit/{catId}', [TitlesController::class, 'edit'])->name('edit');
        Route::post('/update/{catId}', [TitlesController::class, 'update'])->name('update');
        Route::get('/show/{catId}', [TitlesController::class, 'show'])->name('show');
        Route::get('/delete/{catId}', [TitlesController::class, 'destroy'])->name('delete');
    });

    Route::get('/get-colors-json',[ColorManagementController::class,'getColorsJson'])->name('get_colors_json');
    Route::get('/get-owners-json',[OwnerManagementController::class,'getOwnersJson'])->name('get_owners_json');
    Route::get('/get-breeders-json',[BreederManagementController::class,'getBreedersJson'])->name('get_breeders_json');
    Route::get('/get-breeds-json',[BreedManagementController::class,'getBreedsJson'])->name('get_breeds_json');
    Route::get('/get-cat-sires-json',[CatController::class,'getCatSiresJson'])->name('get_cat_sires_json');
    Route::get('/get-cat-dams-json',[CatController::class,'getCatDamsJson'])->name('get_cat_dams_json');

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');

});
