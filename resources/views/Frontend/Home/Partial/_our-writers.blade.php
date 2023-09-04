

             
            <h2 class="center-text">আমাদের লেখকবৃন্দ</h2>
            <div class="grid-col-row">
                @if($writer_list)
                 @foreach($writer_list as $writer) 
                <div class="grid-col grid-col-6">
                    <!-- instructor item -->
                    <div class="item-instructor bg-color-4">
                        <a href="page-profile.html" class="instructor-avatar">
                            <img src="{{asset('uploads/writers/').'/'.$writer->image}}"" width="210px" data-at2x="pHomeContent/pic/al-amin_khan_sagar@2x.jpg" alt>
                        </a>
                        <div class="info-box" style="margin-top: 30px">
                            <h3>{{$writer->wNameBn}}</h3>
                            <span class="instructor-profession">{{$writer->country_name}}</span>
                            <div class="divider"></div>
                            <p>{!! Str::limit($writer->wBiography, 120, ' ...') !!} </p>
                            <div class="social-link">
                                <!--
                                -->
                                <a href="#" class="fa fa-facebook"></a>
                                <!--
                                -->
                                <a href="#" class="fa fa-youtube"></a>
                                <!--
                                -->
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                 
                </div>
                @endforeach
                @endif
            </div>