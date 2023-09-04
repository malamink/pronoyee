<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\Awardcat;
use App\Models\Writer;
use App\Models\Social;
use App\Models\Timeperiod;
use App\Models\Book;
use App\Models\Bookcat;
use App\Models\Bookshelf;
use App\Models\Almirah;
use App\Models\Bookpdf;
use App\Models\Language;
use App\Models\Publication;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Donor;
use App\Models\Donorcat;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Programme;
use App\Models\Programmecat;
use App\Models\Pichouse;
use App\Models\Ptube;
use App\Models\Staff;
use App\Models\Borrower;
use App\Models\Communication;
use App\Models\User; 


class DashboardController extends Controller
{
    public function Dashboard()
    {
        $award = Award::count();
        $awardcat = Awardcat::count();
        $writers = Writer::count();
        $social = Social::count();
        $timeperiod = Timeperiod::count();
        $books = Book::count();
        $bookshelf = Bookshelf::count();
        $almirah = Almirah::count();
        $bookpdf = Bookpdf::count();
        $bookcat = Bookcat::count();
        $language = Language::count();
        $publication = Publication::count();
        $country = Country::count();
        $state = State::count();
        $city = City::count();
        $donor = Donor::count();
        $donorcat = Donorcat::count();
        $menu = Menu::count();
        $submenu = SubMenu::count();
        $programme = Programme::count();
        $programmecat = Programmecat::count();
        $pichouse = Pichouse::count();
        $ptube = Ptube::count();
        $staff = Staff::count();
        $borrower = Borrower::count();
        $communication = Communication::count();
        $users = User::count();
        
        return view('Backend.Dashboard.dashboard', compact('award','awardcat','writers','social','timeperiod','books','bookcat','bookshelf','almirah','bookpdf','bookcat','language','publication',
        'country','state','city','donor','donorcat','menu','submenu','programme','programmecat','pichouse','ptube','staff','borrower','communication','users'));
    }
    
    
}
  