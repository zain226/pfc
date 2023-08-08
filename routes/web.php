<?php

use App\Http\Controllers\Admin\ColorManagementController;
use App\Http\Controllers\Admin\OwnerManagementController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DatabaseController;
use App\Http\Controllers\Front\CatListController;
use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\KennelDirectoryController;
use App\Http\Controllers\Front\MarketPlaceController;
use App\Http\Controllers\Front\MemberDirectoryController;
use App\Http\Controllers\Front\MembershipApplicationController;
use App\Http\Controllers\Front\PedigreeController;
use App\Http\Controllers\Front\RecentMatingController;
use App\Http\Controllers\Front\RegistrationController;
use App\Http\Controllers\Front\ShowResultController;
use App\Http\Controllers\Front\SubscriberController;
use App\Http\Controllers\ImportOldDataController;
use Illuminate\Support\Facades\Route;
use App\Models\Breeder;
use App\Models\Title;
use App\Models\ShowEntry;
use Illuminate\Support\Str;
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

require __DIR__.'/auth.php';



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blog/{slug}', [HomeController::class,'singleBlog'])->name('single_blog');
Route::get('/blogs', [HomeController::class,'blogs'])->name('blogs');
Route::get('/pkc-judges', [HomeController::class,'judges'])->name('judges');
Route::get('/pkc-team', [HomeController::class,'pkcTeam'])->name('team');
Route::get('/testing', [HomeController::class,'testing'])->name('testing');

Route::get('/about-pkc', function () {
    return view('frontend.about');
})->name('about');

Route::get('/rules-regulations', function () {
    return view('frontend.rules_regulations');
})->name('rules_regulations');

Route::get('/pedigree/{slug}', [PedigreeController::class,'index'])->name('pedigree');
Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::get('/show-fancier-form',[RegistrationController::class,'showFancier'])->name('show-fancier-form');
Route::get('/virtual-breed-cats',[PedigreeController::class,'virtualBreedCats'])->name('virtual_breed_cats');
Route::get('/show-result-json',[ShowResultController::class,'showResultJson'])->name('show_result_json');
Route::get('/virtual-breed-pedigree',[PedigreeController::class,'getPedigreeJson'])->name('virtual_breed_pedigree');

Route::get('/full-pedigree', function () {
    return view('frontend.full_pedigree');
})->name('full_pedigree');

Route::get('/pkc-team/general-r-zahid-mubashir-sheikh', function () {
   return view('frontend.patron_in_chief_detail');
})->name('patron_in_chief_detail');


Route::get('/kennels-profile', function () {
    return view('frontend.kennels-profile');
})->name('kennels-profile');

Route::get('/breed-groups-standards', function () {
    return view('frontend.breed-groups-standards');
})->name('breed-groups-standards');

Route::get('/market-place',[MarketPlaceController::class,'index'])->name('market_place');
Route::get('/market-place/pet-detail/{slug}',[MarketPlaceController::class,'show'])->name('market_place_detail');

Route::get('/show-results',[ShowResultController::class,'index'])->name('show-results');
Route::get('/show-results/{slug}/{id}',[ShowResultController::class,'show'])->name('show-results-pkc');




Route::get('/visiting-judges',[HomeController::class,'visitingJudges'])->name('visiting-judge');
Route::get('/visiting-judges/{slug}',[HomeController::class,'visitingJudgeDetail'])->name('visiting.judge.detail');

Route::get('/pkc-team/{slug}',[HomeController::class,'pkcTeamDetail'])->name('pkc.team.detail');

Route::get('/pkc-judges/{slug}',[HomeController::class,'JudgeDetail'])->name('judge.detail');


Route::get('/pkc-show-season-2023-24', function () {
    return view('frontend.pkc-show-season-2023-24');
})->name('pkc-show-23-24');




Route::get('/testimonials', function () {
    return view('frontend.testimonials');
})->name('testimonials');

Route::get('/database-3', function () {
    return view('frontend.pkc_database-3');
})->name('database-3');

Route::prefix('database')->name('database.')->group(function () {
    Route::get('/', [DatabaseController::class,'index'])->name('index');
    Route::get('/breed-detail/{slug}', [DatabaseController::class,'breedDetail'])->name('breed_detail');
});
Route::prefix('/gallery')->name('gallery.')->group(function () {
    Route::get('/', [GalleryController::class,'index'])->name('index');
    Route::get('/{slug}', [GalleryController::class,'gallery'])->name('detail_page');
});

Route::prefix('kennels-directory')->name('kennel_directory.')->group(function () {
    Route::get('/', [KennelDirectoryController::class,'index'])->name('index');
    Route::get('/{slug}', [KennelDirectoryController::class,'kennelProfile'])->name('profile');
});
Route::prefix('members-directory')->name('member_directory.')->group(function () {
    Route::get('/', [MemberDirectoryController::class,'index'])->name('index');
    Route::get('/{slug}', [MemberDirectoryController::class,'memberProfile'])->name('profile');
});
Route::prefix('contact-us')->name('contact_us.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/submit', [ContactController::class, 'store'])->name('submit');
});
Route::prefix('events')->name('event.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
});
Route::any('/members-directory-search', [MemberDirectoryController::class,'searchString'])->name('member_directory.search');
Route::any('/kennels-directory-search', [KennelDirectoryController::class,'searchString'])->name('kennel_directory.search');
Route::any('/recent-matings-search', [RecentMatingController::class,'searchString'])->name('recent_mating.search');
Route::any('/recent-matings-search-sire', [RecentMatingController::class,'searchStringSire'])->name('recent_mating.search.sire');
Route::any('/recent-matings-search-dam', [RecentMatingController::class,'searchStringDam'])->name('recent_mating.search.dam');

Route::get('/cats-page-3/{slug}', function ($slug) {
    return redirect()->route('pedigree',$slug);
});
Route::get('/cats-list/{slug}', [CatListController::class,'index'])->name('cats_list');
Route::any('/cats-search', [CatListController::class,'searchString'])->name('cat.search');

Route::get('/membership', function () {
    return view('frontend.membership');
})->name('membership');

Route::prefix('membership-application')->name('membership-application.')->group(function () {
    Route::get('/', [MembershipApplicationController::class, 'index'])->name('index');
    Route::post('/store', [MembershipApplicationController::class, 'store'])->name('store');
});



Route::get('/list', function () {
    return view('admin.cats.list');
})->name('list');

Route::get('/check', function () {
    
    dd(123);
    $entries =ShowEntry::get();
    foreach($entries as $e)
    {
        $e->group_id = $e->breed->group_id ?? null;
        $key = array_search($e->class, getClasses());
        $e->class_order = $key ?? null;
        $e->save();
    }
dd(123);
   $bs=  Breeder::get();
   foreach($bs as $b)
   {
    if($b->contact)
    {
        $number = $b->contact;
        $number = str_replace(", ",",",$number);
        $number = str_replace("-","",$number);
        $number = str_replace("/","",$number);
        $numbers = explode(",",$number);
        $number = substr_replace($numbers[0], "92", 0, 1);
        $b->contact = $number;
        $b->save();
    }
 
   }
});
Route::get('/grade/order', function () {
    $titles = Title::with('entries')->get();
    
    foreach($titles as $t)
    {
      foreach($t->entries as $e)
      {
          $e->grade_order = $t->sort;
          $e->save();
      }
    }
});
Route::get('/class/base', function () {
    $entries =ShowEntry::get();
    foreach($entries as $e)
    {
       foreach(getClasseBase() as $key => $c)
       {
           if (Str::contains($e->class, $c)) {
               $e->class_base_order = in_array($key,[7,9,11,13]) ? 7 : $key;
               $e->save();
           }
           
       }
    }
    
});

Route::get('/entries-registration', function () {
    return view('frontend.entries_registration');
})->name('entries_registration');

Route::get('/recent-matings', [RecentMatingController::class,'index'])->name('recent_matings');

Route::post('/subscribe', [SubscriberController::class,'index'])->name('subscribe');


// Data Import Routes

Route::get('/import/breed', [ImportOldDataController::class, 'importBreed'])->name('import.breed')->middleware('auth');
Route::get('/import/color', [ImportOldDataController::class, 'importColor'])->name('import.color')->middleware('auth');
Route::get('/import/gender', [ImportOldDataController::class, 'importGender'])->name('import.gender')->middleware('auth');
Route::get('/import/breeder', [ImportOldDataController::class, 'importBreeder'])->name('import.breeder')->middleware('auth');
Route::get('/import/owner', [ImportOldDataController::class, 'importOwner'])->name('import.owner')->middleware('auth');
Route::get('/import/cat', [ImportOldDataController::class, 'importCat'])->name('import.cat')->middleware('auth');
Route::get('/add/breed/slug', [ImportOldDataController::class, 'addSlug'])->name('add.breed.slug')->middleware('auth');
Route::get('/set/breed/duplication', [ImportOldDataController::class, 'setBreedDuplication'])->name('set.breed.duplication')->middleware('auth');


