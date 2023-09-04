<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Writer;
use App\Models\Writup; 
use App\Models\Almirah;
use App\Models\Book;
use App\Models\Category;
use App\Models\Bookcat;
use App\Models\Timeperiod;
use App\Models\Publication;
use App\Models\State;
use App\Models\Programme; 
use App\Models\Programmecat;
use App\Models\Award;
use App\Models\Awardcat;
use App\Models\Donor;
use App\Models\Donorcat;
use App\Models\Pichouse;
use App\Models\Ptube;


class PublicController extends Controller
{
     public function Error()
   {
        return view('error.404');
   }
   
   //homepage start
   public function App()  
    {
            return view('Frontend.Layout.app');
    }
   public function Index() 
   {
    $writerfamous= DB::table('writers')->inRandomOrder()->limit(1)->get();
    $bookfamaus= DB::table('books')->inRandomOrder()->limit(1)->get();

    $writer_list= DB::table('writers')
    ->join('countries', 'countries.id', '=', 'writers.CountryName')
    ->select('writers.*','countries.name as country_name')
    ->inRandomOrder()
    ->limit(4)
    ->get();

        return view('Frontend.Home.index',compact('writer_list','writerfamous','bookfamaus'));
   }
   public function MonthlyPronoyee() 
   {
        return view('Frontend.Home.monthly-pronoyee');
   }
   public function SubProgramme() 
   {
        return view('Frontend.Home.sub-programme');
   }
   public function PronoyeePublication()  
   {
        return view('Frontend.Home.pronoyee-publication');
   }
   public function TalentDevelopment() 
   {
        return view('Frontend.Home.talent-development');
   }
//homepage end


  
   

   public function OurwiseMore() 
   {
        return view('Frontend.Home.Partial.ourwise-more');
   }
   public function CongratulationAll() 
   {
        return view('Frontend.Home.congratulation-all');
   }


   
   public function hMaster() 
   {
        return view('pHome.hMaster');
   }
   

  

   
   //FrontEnd writers start
   public function WriterView()
    { 
        $writers = Writer::count();
        $writerview = Writer::simplePaginate(4);
        return view('Frontend.Writers.writer-view', compact('writerview','writers'));
    }




 


   public function WriterViewSingle($id)
    {
        $writerview = Writer::find($id)->increment('writerViews');
        $writer = Writer::find($id);
        return view('Frontend.Writers.writer-view-single', compact('writer'));
    }
    
  
     public function WriterViewDetails($id)
     {
         $writer = Writer::find($id);
         $booknum =  DB::table('books')->where('wName',$writer->wNameBn)->count();
         $allbook =  DB::table('books')->where('wName',$writer->wNameBn)->simplePaginate(3);
         return view('Frontend.Writers.writer-view-details', compact('writer','booknum','allbook'));
     }
 //FrontEnd writers end  

 //FrontEnd books start   
     




public function WriterSearch(){
    $writer_search = $_GET['querywriter'] ?? "";
    if($writer_search !=""){
     $writers = Writer::where('wNameBn','LIKE','%'.$writer_search.'%')->get();
     return view('Frontend.Writers.writer-search',compact('writers'));   
    }else{
        $writersearch = Writer:: simplePaginate(2);
        return view('Frontend.Writers.writer-search2',compact('writersearch'));
    } 
   
}
public function BookSearch(){
    $book_search = $_GET['querybook'] ?? "";
    if($book_search !=""){
     $books = Book::where('bTitle','LIKE','%'.$book_search.'%')->get();
     return view('Frontend.Books.book-search',compact('books'));   
    }else{
        $booksearch = Book:: simplePaginate(1);
        return view('Frontend.Books.book-search2',compact('booksearch'));
    } 
   
}


// public function BookSearch(){
//     $book_search = $_GET['querybook'] ?? "";
//     if($book_search !=""){
//      $books = Book::where('bTitle','LIKE','%'.$book_search.'%')->get();    
//     }else{
//         $books = Book:: all();
//     }   
//     return view('Frontend.Books.book-search',compact('books'));
// }


  public function BookView()
    {
        $books = Book::count();
        // $bookview = Book::all();
        // $bookview = Book::paginate(1);
        $bookview = Book::simplePaginate(1);
        return view('Frontend.Books.book-view', compact('bookview','books'));
    }    
  
    public function BookViewDetails($id)
    {
        
        $bookview = Book::find($id)->increment('bookViews');
        $book = Book::find($id);
        // $writerview = Writer::paginate(2);
        // $writer = Writer::simplePaginate(5);
        return view('Frontend.Books.book-view-details', compact('book'));
    }  
    public function ProgrammePdf($id)
    { 
        $programmepdf = Programme::find($id);
        return view('Frontend.Pages.programme-pdf', compact('programmepdf'));
    }

    public function AwardPdf($id)
    { 
        $awardpdf = Award::find($id);
        return view('Frontend.Pages.award-pdf', compact('awardpdf'));
    }
    public function DonorPdf($id)
    { 
        $donorpdf = Donor::find($id);
        return view('Frontend.Pages.donor-pdf', compact('donorpdf'));
    }


    public function BookViewRead($id)
    { 
        $bookread = Book::find($id);
        return view('Frontend.Books.book-view-read', compact('bookread'));
    }
    public function Notice()
    {
        return view('Frontend.Pages.notice');
    }
    public function Form()
    {
        return view('Frontend.Pages.form');
    }
    public function Entrepreneur()
    {
        return view('Frontend.Pages.entrepreneur');
    }

  

//homepage writup start
    public function WritupView()
    {
        $writup = Writup::all();
        $writuptotal = Writup::simplePaginate(1);
        return view('Frontend.Writup.writup-view', compact('writup','writuptotal'));
    }


    public function WritupViewDetails($id)
    {
        $writup = Writup::find($id);
        return view('Frontend.Writup.writup-view-details', compact('writup'));
    }
//homepage writup end



    public function Master() 
    {
        $data['timeperiod']=DB::table('timeperiods')->get();
        $data['bookcat']=DB::table('bookcats')->get();
        $data['publication']=DB::table('publications')->get();
        $data['writer']=DB::table('writers')->get();
        $data['programme']=DB::table('programmes')->get();
        // return view('pHome.hMaster2',$data);
        return view('pHome.master',$data);
    }

    public function AllWriter()
    {
        return view('Frontend.all-writer');
    }


//Start Pronoyee left side
// public function Writer()
//     {
//         $writer = Writer::all();
//         return view('Frontend.writer-writup', compact('writer'));
//     }
//End Pronoyee left side
 //Start left side
    public function TimePeriod()
    {
        $writertime = Timeperiod::all();
        return view('Frontend.time-period', compact('writertime'));
    }
    public function WriterTimePeriod($id)
    {
        $writertimeperiod = Timeperiod::find($id);        
        $writertimeperiodnum =  DB::table('writers')->where('wTperiod',$id)->count();
        $allwritertimeperiod =  DB::table('writers')->where('wTperiod',$id)->simplePaginate(3);
        return view('Frontend.Pages.writer-time-period', compact('writertimeperiod','writertimeperiodnum','allwritertimeperiod'));
    }
    public function BookCategory()
    {
        $bookcategory = Bookcat::all();
        return view('Frontend.book-category', compact('bookcategory'));
    }
    public function BookCat($id)
    {
        $bookcat = Bookcat::find($id);        
        $bookcatnum =  DB::table('books')->where('bCategory',$bookcat->BookCatName)->count();
        $allbookcatnum =  DB::table('books')->where('bCategory',$bookcat->BookCatName)->simplePaginate(2);
        return view('Frontend.Pages.book-cat', compact('bookcat','bookcatnum','allbookcatnum'));
    }




    
    public function Almirah()
    {
        $almirah = Almirah::all();
        return view('Frontend.almirah', compact('almirah'));
    }


    public function BookShelf($id)
    {
        $bookshelf = Almirah::find($id);        
        $bookshelfnum =  DB::table('bookshelves')->where('AlmirahName',$bookshelf->AlmirahName)->count();
        $allbookshelf =  DB::table('bookshelves')->where('AlmirahName',$bookshelf->AlmirahName)->simplePaginate(2);
        return view('Frontend.Pages.bookshelf', compact('bookshelf','bookshelfnum','allbookshelf'));
    }










    public function Publication()
    {
        $publication = Publication::all();
        return view('Frontend.publication', compact('publication'));
    }
    public function PublicationView($id)
    {
        $publicationview = Publication::find($id); 
        $publicationnum =  DB::table('books')->where('bPublications',$publicationview->PublicationName)->count();    
        $allpublicationnum =  DB::table('books')->where('bPublications',$publicationview->PublicationName)->simplePaginate(2); 
        return view('Frontend.Pages.publication-view', compact('publicationview','publicationnum','allpublicationnum'));
    }
    public function DistrictWise()
    {
        $district = State::all();
        return view('Frontend.district-wise', compact('district'));
    }
    public function DistrictWiseWriter($id)
    {
        $districtwisewriter = State::find($id);
        $districtwisewriternum =  DB::table('writers')->where('StateName',$id)->count();
        $alldistrictwisewriternum =  DB::table('writers')->where('StateName',$id)->simplePaginate(1);
        return view('Frontend.Pages.district-wise-writer', compact('districtwisewriter','districtwisewriternum','alldistrictwisewriternum'));
    }
    public function Programme()
    {
        $programme = Programme::all();
        return view('Frontend.programme', compact('programme'));
    }
    
    public function Programmecat()
    {
        $Programmecat = Programmecat::all();
        return view('Frontend.Pages.programmecat', compact('programmecat'));
    }

    public function ProgrammeeCategory($id)
    {
        $programmeecategory = Programmecat::find($id);        
        $programmeecategorynum =  DB::table('programmes')->where('ProgCat',$programmeecategory->ProgCatName)->count();
        $allprogrammeecategorynum =  DB::table('programmes')->where('ProgCat',$programmeecategory->ProgCatName)->simplePaginate(2);
        return view('Frontend.Pages.programmee-category', compact('programmeecategory','programmeecategorynum','allprogrammeecategorynum'));
    }

    public function Award()
    {
        $award = Award::all();
        return view('Frontend.award', compact('award'));
    }
    public function AwardCat()
    {
        $awardcat = Awardcat::all();
        return view('Frontend.Pages.award-view', compact('awardcat'));
    }
    public function AwardCategory($id)
    {
        $awardcategory = Awardcat::find($id);        
        $awardcategorynum =  DB::table('awards')->where('AwardCat',$awardcategory->AwardCat)->count();
        $allawardcategorynum =  DB::table('awards')->where('AwardCat',$awardcategory->AwardCat)->simplePaginate(2);
        return view('Frontend.Pages.award-category', compact('awardcategory','awardcategorynum','allawardcategorynum'));
    }

    
    
    public function Donor()
    {
        $donor = Donor::all();
        return view('Frontend.donor', compact('donor'));
    }

    public function Donorcat()
    {
        $donorcat = Donorcat::all();
        return view('Frontend.Pages.donor-cat', compact('donorcat'));
    }

    public function DonorCategory($id)
    {
        $donorcategory = Donorcat::find($id);        
        $donorcategorynum =  DB::table('donors')->where('DonorCatName',$donorcategory->DonorCatName)->count();
        $alldonorcategorynum =  DB::table('donors')->where('DonorCatName',$donorcategory->DonorCatName)->simplePaginate(2);
        return view('Frontend.Pages.donor-category', compact('donorcategory','donorcategorynum','alldonorcategorynum'));
    }

    
    // public function DonorView($id)
    // {
    //     $donorview = Donor::find($id);
    //     return view('Frontend.Pages.donor-view', compact('donorview'));
    // } 
    //Start left side

//footer start
    public function Ptube()
    {
        $ptube = Ptube::all();
        return view('Frontend.Footer.ptube', compact('ptube'));
    }    
    public function PicHouse()
    {
        $pichouse = Pichouse::all();
        return view('Frontend.Footer.pichouse', compact('pichouse'));
    }
    public function Contactus()
    {
        return view('Frontend.Footer.contactus');
    }
//end footer

        
    
    
   
}

