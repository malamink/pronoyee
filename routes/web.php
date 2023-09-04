<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserDashboardController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\TimeperiodController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookcatController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BookpdfController;
use App\Http\Controllers\AlmirahController;
use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\BookrequestController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WritupController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\ProgrammecatController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\AwardcatController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\DonorcatController;
use App\Http\Controllers\PichouseController;
use App\Http\Controllers\PtubeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SliderController;



use App\Http\Controllers\CommunicationController;


 
/*
|--------------------------------------------------------------------------
| pronoyee Web Routes
|--------------------------------------------------------------------------
|*/

//Admin login start 
Route::get('admin',[AdminController::class,'Admin']);
Route::post('admin-login',[AdminController::class,'AdminLogin']);
//Admin login end

//route group admin start
Route::group(['middleware'=>'admin'],function(){          
    Route::get('logout',[AdminController::class,'Logout']);
    Route::get('/dashboard/',[DashboardController::class,'Dashboard']);
    Route::resource('writers',WriterController::class);  
    Route::resource('timeperiods',TimeperiodController::class);
    Route::resource('socials',SocialController::class);
    Route::resource('books',BookController::class);   
    Route::resource('bookcats',BookcatController::class); 
    Route::resource('languages',LanguageController::class);    
    Route::resource('bookpdfs',BookpdfController::class);
    Route::resource('almirahs',AlmirahController::class);  
    Route::resource('bookshelves',BookshelfController::class); 
    Route::resource('borrowers',BorrowerController::class);
    Route::resource('publications',PublicationController::class);  
    Route::resource('writups',WritupController::class);
    Route::resource('programmes',ProgrammeController::class);  
    Route::resource('programmecats',ProgrammecatController::class);
    Route::resource('awards',AwardController::class);  
    Route::resource('awardcats',AwardcatController::class); 
    Route::resource('donors',DonorController::class);  
    Route::resource('donorcats',DonorcatController::class);  
    Route::resource('pichouses',PichouseController::class);  
    Route::resource('ptubes',PtubeController::class);  
    Route::resource('staff',StaffController::class);
    Route::resource('countries',CountryController::class);
    Route::resource('states',StateController::class);
    Route::resource('cities',CityController::class);
    Route::resource('sliders',SliderController::class);
    //End menu route 
});
//route group admin end

//route group user start
Route::group(['middleware'=>'auth'],function(){
    Route::get('/user-dashboard', [App\Http\Controllers\UserDashboardController::class, 'UserDashboard']);
});
//route group user end

//country state city start
Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
//country state city end

//public controller start
//Star home view
Route::get('/',[PublicController::class,'Index']); 
Route::get('/our-writers',[PublicController::class,'OurWriters']);
Route::get('/app',[PublicController::class,'App']);
Route::get('/ourwise-more',[PublicController::class,'OurwiseMore']);
Route::get('/congratulation-all',[PublicController::class,'CongratulationAll']);

Route::get('/monthly-pronoyee',[PublicController::class,'MonthlyPronoyee']);
Route::get('/sub-programme',[PublicController::class,'SubProgramme']);
Route::get('/pronoyee-publication',[PublicController::class,'PronoyeePublication']);
Route::get('/talent-development',[PublicController::class,'TalentDevelopment']);

Route::get('contactus',[PublicController::class,'Contactus']);

Route::get('writer-view',[PublicController::class,'WriterView']);
Route::get('writer-view-single/{id}',[PublicController::class,'WriterViewSingle']);
//End home view

//For Start leftside for monthly pronoyee
// Route::get('writer-writup',[PublicController::class,'WriterWritup']);
//For End leftside for monthly pronoyee
//For leftside
Route::get('time-period',[PublicController::class,'TimePeriod']);
Route::get('writer-time-period/{id}',[PublicController::class,'WriterTimePeriod']);


Route::get('bookshelf/{id}',[PublicController::class,'BookShelf']); 



Route::get('writer-search',[PublicController::class,'WriterSearch']);
Route::get('writer-search2',[PublicController::class,'WriterSearch2']);
Route::get('book-search',[PublicController::class,'BookSearch']);
Route::get('book-search2',[PublicController::class,'BookSearch2']);
  


Route::get('book-category',[PublicController::class,'BookCategory']);
Route::get('book-cat/{id}',[PublicController::class,'BookCat']);
Route::get('book-cat/{id}',[PublicController::class,'BookCat']);

Route::get('publication',[PublicController::class,'Publication']);
Route::get('publication-view/{id}',[PublicController::class,'PublicationView']);
Route::get('district-wise',[PublicController::class,'DistrictWise']);
Route::get('district-wise-writer/{id}',[PublicController::class,'DistrictWiseWriter']);
Route::get('programme',[PublicController::class,'Programme']);
Route::get('programme-view/{id}',[PublicController::class,'ProgrammeView']);
Route::get('programmee-category/{id}',[PublicController::class,'ProgrammeeCategory']);
Route::get('award-category/{id}',[PublicController::class,'AwardCategory']);
Route::get('award',[PublicController::class,'Award']);
Route::get('award-view/{id}',[PublicController::class,'AwardView']);
Route::get('award-pdf/{id}',[PublicController::class,'AwardPdf']);
Route::get('donor',[PublicController::class,'Donor']);
Route::get('donor-cat',[PublicController::class,'Donorcat']);
Route::get('donor-category/{id}',[PublicController::class,'DonorCategory']); 
Route::get('donor-view/{id}',[PublicController::class,'DonorView']);
//end leftside
//footer start
Route::get('ptube',[PublicController::class,'Ptube']);
Route::get('pichouse',[PublicController::class,'PicHouse']);
Route::get('contactus',[PublicController::class,'Contactus']);
//end footer



Route::get('programme-pdf/{id}',[PublicController::class,'ProgrammePdf']);
Route::get('award-pdf/{id}',[PublicController::class,'AwardPdf']);
Route::get('donor-pdf/{id}',[PublicController::class,'DonorPdf']);

Route::get('book-view-read/{id}',[PublicController::class,'BookViewRead']);


Route::get('writer-view-details/{id}',[PublicController::class,'WriterViewDetails']);

Route::get('book-view',[PublicController::class,'BookView']);
Route::get('notice',[PublicController::class,'Notice']);
Route::get('form',[PublicController::class,'Form']);
Route::get('entrepreneur',[PublicController::class,'Entrepreneur']);
Route::get('book-view-details/{id}',[PublicController::class,'BookViewDetails']);
Route::get('writup-view',[PublicController::class,'WritupView']);
Route::get('writup-view-details/{id}',[PublicController::class,'WritupViewDetails']);

Route::get('book-category-view',[PublicController::class,'BookCategoryView']);


Route::get('book',[PublicController::class,'Book']);
Route::get('master',[PublicController::class,'Master']);
Route::get('ruhul',[PublicController::class,'Ruhul']);
Route::get('leftmenu',[PublicController::class,'LeftMenu']);
Route::get('leftmenu',[PublicController::class,'LeftMenu']);
Route::get('all-writer',[PublicController::class,'AllWriter']);

//public controller end



/*
update date : 09 august 2023
end 
*/


 


 
Route::get('category-view',[PublicController::class,'CategoryView']);

Route::resource('communications',CommunicationController::class);
Route::resource('bookrequests',BookrequestController::class);


Auth::routes();

// Route::get('/home0000', [App\Http\Controllers\HomeController::class, 'index']);






