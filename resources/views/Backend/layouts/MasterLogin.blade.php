<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>প্রণয়ী পাঠাগার || আলোকিত মানুষের জন্য বই </title>
    @include('Backend.layouts.Partial._head')
</head>
<body>
    <div id="home" class="page-content padding-none">
        @yield('content')
    </div>
   
        @include('homePartial._script')        
    </body>
</html>