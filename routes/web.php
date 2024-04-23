<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ScheduleVisitController;
use App\Models\ScheduleVisit;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/properties', [FrontendController::class, 'properties'])->name('properties');
Route::get('/property-details/{id}', [FrontendController::class, 'propertiesdetails'])->name('property-details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/schedule-visit', [FrontendController::class, 'schedule'])->name('schedule');
Route::post('/schedule-visit', [ScheduleVisitController::class, 'store'])->name('postschedule');


Route::get('/admin', function () {
    $schedule = ScheduleVisit::query()->paginate(5);
    return view('Villa.Admin.index',compact('schedule'));
});


Route::get('/dashboard', function () {
    $schedule = ScheduleVisit::query()->paginate(5);
    return view('Villa.Admin.index',compact('schedule'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', function () {
        $schedule = ScheduleVisit::query()->paginate(5);
        return view('Villa.Admin.index',compact('schedule'));
    });
    
    
    
    Route::resource('files', 'App\Http\Controllers\FileController');
    Route::resource('carousels', 'App\Http\Controllers\CarouselController');
    Route::resource('abouts', 'App\Http\Controllers\AboutController');
    Route::resource('facts', 'App\Http\Controllers\FactsController');
    Route::resource('properties', 'App\Http\Controllers\PropertyController');
    Route::resource('best_deals', 'App\Http\Controllers\BestDealController');
    Route::resource('siteconfig', 'App\Http\Controllers\SiteConfigsController');
    
   

   
    
});





require __DIR__.'/auth.php';