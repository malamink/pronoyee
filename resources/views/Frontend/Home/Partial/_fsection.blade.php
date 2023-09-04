
                <section class="grid-col grid-col-4 footer-about">
                    <h2 class="corner-radius" style="background-color: #2db0ed;">প্রণয়ী সম্পর্কে</h2>
                    <div>
                        <h3>প্রণয়ী সম্পর্কে </h3>
                        <p>প্রণয়ী পাঠাগার অলাভজনক, অরাজনৈতিক, বাঙালি সাহিত্যের একটি সংগ্রহশালা। এ সংগ্রশালায় সবার উপস্থিতিই সমান। কারো প্ররোচণায় প্রণয়ী পাঠাগারের প্রতিষ্ঠা হয়নি একান্ত মনের চাহিদা থেকেই এর জন্ম।</p>
                    </div>
                    <address>
                        <p></p>
                        <a href="tel:123-123456789" class="phone-number">+88-01735 542 508</a>
                        <br />
                        <a href="mailto:pronoyeepathagar@gmail.com" class="email">pronoyeepathagar@gmail.com</a>
                        <br />
                        <a href="#" class="site">www.pronoyee.org</a>
                        <br />
                        <a href="www.pronoyeepathagar.html" class="address">Dhaka, Bangladesh.</a>
                    </address>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/pronoyeepathagar" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/pronoyeepathagr" target="_blank" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </section>
                <section class="grid-col grid-col-4 footer-latest">
                    <h2 class="corner-radius" style="background-color: #18693a;">জনপ্রিয়</h2>
                        <article>
                        @foreach($writerfamous as $data)   
                            <img src="{{ asset('uploads/writers/'.$data->image) }}" data-at2x="pHomeContent/pic/al-amin_khan_sagar@2x.jpg" alt>
                            <h3><a href="book/info/1584.html">{{$data->wNameBn}}</a></h3>  
                            <p>{{$data->StateName}}</p>
                            <p>{{$data->CountryName}}</p>
                            @endforeach
                        </article>

                        <article>
                        @foreach($bookfamaus as $data) 
                            <img src="{{ asset('uploads/books/'.$data->image) }}" data-at2x="pHomeContent/pic/bolaka.jpg">
                            <h3><a href="book/info/1053.html">{{$data->bTitle}}</a></h3>        
                            <p>{{$data->wName}}</p>
                            <p>{{$data->bCategory}}</p>
                            <p>{{$data->bPublications}}</p>
                            @endforeach
                        </article>
                </section>
                <section class="grid-col grid-col-4 footer-contact-form">
                    <h2 class="corner-radius" style="background-color: #e7002a;">অনলাইনে মূল্যায়ন পরীক্ষা</h2>
                    <div>
                        <h3>মূল্যায়ন পরীক্ষার তথ্য </h3>
                        <p><a href="#" class="phone-number">পাঠ্যক্রম</a>
                        <br />
                        <a href="#" class="phone-number">মূল্যায়ন পরীক্ষার সময়সূচি</a>
                        <br />
                        <a href="#" class="phone-number">প্রশ্নপত্র</a></p>
                        <br />
                    </div>
                    <div>
                        <h3>সহযোগীতায় পাশে থাকুন</h3>
                        
                        <a href="#"><img  src="{{ asset('pHomeContent/img/donate-pronoyee-pathagar.png') }}"></a>
                    </div>
                </section>