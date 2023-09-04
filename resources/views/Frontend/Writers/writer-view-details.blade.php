@extends('Frontend.Layout.appWriter')
@section('title','লেখকের জীবনালেখ্য')
@section('content')
  


<div id="home" class="page-content padding-none">            
    <div class="grid-row clear-fix">
        <div class="grid-col-row" style="margin-top: 20px;
            @include('Frontend.Layout.Partial._left')
            <div class="grid-col grid-col-9">
  
                
                
<main>      
<aside class="widget-course-details"> 
    <div class="category-info">
        <div class="column">
            <img style="border-radius: 50%; border: 2px solid green;" src="{{ url('uploads/writers/'.$writer->image) }}">
        </div>
            <div class="column2">
              <h3> {{ $writer->wNameBn}} </h3>  
              <div id="readmore">
                <span class="readmore__content">         
                  <p style="text-align: justify;">
                  {!! $writer->wBiography!!}
                  </p>
                </span>
                <button class="readmore__toggle" role="switch" aria-checked="true"> Show more </button>               
              </div>

              
              </button>
          </div>

        <div class="center">
            <nav class="bread-crumb" style="clear: both; padding: 10px;">
                <a href="{{url('/')}}">হোম</a>
                <i class="fa fa-long-arrow-right"></i>
                <a href="{{url('writer-view')}}">লেখকবৃন্দের তালিকা</a>
            </nav>
        </div>
    </div>
</aside>
    <!-- widget -->
    <div class="center">
        <h4 style="color: green"> {{ $writer->wNameBn}}-এর সংগৃহিত বইঃ <b style="color: red"> {{$booknum}} </b>টি</h4>
    </div>
</main>   
<div class="grid-col grid-col-9"> 

<main>
                    @foreach($allbook as $item)
                        <div class="BookView">
                            <div class="portfolio-item">
                                <div class="picture">
                                    <div class="hover-effect" style="border-radius: 5%"></div>
                                        <div class="link-cont">
                                            <a href="{{ asset('uploads/books/'.$item->image) }}" class="fancy fa fa-search"></a>
                                        </div>
                                        <img src="{{ asset('uploads/books/'.$item->image) }}" width="70px" height="70px" alt="Image">          
                                    </div>
                                <h3><span><a href="{{url('book-view-details/'.$item->id)}}">{{ $item->bTitle}}</a></span></h3>
                            </div>
                        </div>
                    @endforeach
                    </main>
</div>
     
<div align="right";>
    {{$allbook->links()}}
</div>       
                    
                </div>
                
                </div>
                
            </div>
            
        </div>

        
    <script>
        class readMore {
    constructor() {
        this.content = '.readmore__content';
        this.buttonToggle = '.readmore__toggle';
    }

    bootstrap() {
        this.setNodes();
        this.init();
        this.addEventListeners();
    }

    setNodes() {
        this.nodes = {
            contentToggle: document.querySelector(this.content)
        };

        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);
    }

    init() {
        const { contentToggle } = this.nodes;

        this.stateContent = contentToggle.innerHTML;

        contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`;
    }

    addEventListeners() {
        this.buttonToggle.addEventListener('click', this.onClick.bind(this))
    }

    onClick(event) {
        const targetEvent = event.currentTarget;
        const { contentToggle } = this.nodes

        if (targetEvent.getAttribute('aria-checked') === 'true') {
            targetEvent.setAttribute('aria-checked', 'false')
            contentToggle.innerHTML = this.stateContent;
            this.buttonToggle.innerHTML = 'Show less'

        } else {
            targetEvent.setAttribute('aria-checked', 'true')
            contentToggle.innerHTML = `${this.stateContent.substring(0, 500)}...`
            this.buttonToggle.innerHTML = 'Show more'
        }
    }
}

const initReadMore = new readMore();
initReadMore.bootstrap()
    </script>
    @endsection


    


