<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Writer;
use App\Models\User;
use App\Models\Writup;
use App\Models\Book;
use App\Models\Almirah;
use App\Models\Country;
use App\Models\State;
use App\Models\Timeperiod;
use App\Models\Bookcat;
use App\Models\Publication;
use App\Models\Programme;
use App\Models\Programmecat;
use App\Models\Award;
use App\Models\Awardcat;
use App\Models\Donor;
use App\Models\Donorcat;
use App\Models\Pichouse;
use App\Models\Ptube;
use App\Models\Language;
use App\BnTime;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        View::share('writer', Writer::all());
        View::share('user', User::all());
        View::share('book', Book::all());
        View::share('writup', Writup::all());

        
        View::share('almirah', Almirah::all());
        View::share('allbookshelf', Almirah::paginate(1));

        View::share('writerview', Writer::paginate(4));
        View::share('writuptotal', Writup::paginate(1));
        View::share('bookview', Book::paginate(1));
        View::share('books', Book::paginate(1)); 
        View::share('booksearch', Book::paginate(1));
        View::share('writers', Writer::paginate(1));
        View::share('writersearch', Writer::paginate(2));
        View::share('programmepdf', Programme::all());
        View::share('awardpdf', Award::all());
        View::share('donorpdf', Donor::all());
        View::share('bookread', Book::all());
        View::share('allbook', Book::paginate(1));
        View::share('allbookcatnum', Bookcat::paginate(2));
        View::share('allpublicationnum', Publication::paginate(2));
        View::share('alldistrictwisewriternum', State::paginate(1));
        View::share('allprogrammeecategorynum', Programmecat::paginate(2));
        View::share('allawardcategorynum', Awardcat::paginate(2));
        View::share('alldonorcategorynum', Donorcat::paginate(2));

        View::share('timeperiod', Timeperiod::all());
        View::share('writertimeperiod', Timeperiod::all());
        View::share('bookcategory', Bookcat::all());
        View::share('publication', Publication::all());
        View::share('programme', Programme::all());
        View::share('programmecat', Programmecat::all());
        View::share('award', Award::all());
        View::share('awardcat', Awardcat::all());
        View::share('donor', Donor::all());
        View::share('donorcat', Donorcat::all());
        View::share('pichouse', Pichouse::all());
        View::share('ptube', Ptube::all());
        View::share('country', Country::all());
        View::share('state', State::all());
        View::share('language', Language::all());
        View::share('bnTime', $this->BDdate(time()));
    }

    public function BDdate($time)
{
$bn = new BnTime($time);
 $output = $bn->get_date();
 $ReadyDate = "$output[0] $output[1] $output[2]";
 return $ReadyDate;
}

}
