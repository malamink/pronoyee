<nav class="main-nav">
    <ul class="clear-fix">
        <li>
            <a href="{{url('/')}}" class="active"><b>নীড়পাতা</b></a>
        </li>
        <li class="megamenu">
            <a href="{{url('writer-view')}}"><b>লেখকবৃন্দ</b></a>
        </li>
        <li>
            <a href="{{url('book-view')}}"><b>বইসমূহ</b></a>
        </li>
        <li>
            <a href="#"><b>নিয়মাবলী</b></a>
            <!-- sub menu -->
            <ul>
                <li><a href="rupload.php">তথ্য আপলোড</a></li>
                <li><a href="#">ফরম</a></li>
            </ul>
            <!-- / sub menu -->
        </li>
        <li>
            <a href="{{url('writup-view')}}"><b>ত্রৈমাসিক</b></a>
        </li>
        <li>
            <a href="{{url('writup-view')}}"><b>উদ্যোক্তা </b></a>
        </li>
        <li>
            <a href="{{ route('login') }}"><b>লগইন</b></a>
        </li>
    </ul>
</nav>
