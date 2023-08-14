<!-- Stored in resources/views/layouts/master.blade.php -->
 
<!DOCTYPE html>

<html  lang="ar" dir="rtl" >
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <script src="{{asset('js/jquery-3.7.0.min.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="{{ asset('img/blue.jpg') }}" />

  <style>

.navbar-brand img {
    height: 40px;
}

body{
    background-image: url({{ asset('img/bg.svg') }});
    background-size: cover;
    background-repeat: no-repeat;
    /* background-size: 100% 100%; */

        /* background: linear-gradient(150deg, #008A76 15%, #008A76 70%, #097C6B 94%); */
}
@font-face {
  font-family: tajwal;
  src: url({{asset('fonts/Tajawal-Regular.ttf')}});
}
*{
font-family:tajwal;
}
a{
  color: #337ab7;
  text-decoration: none;
}
.main-btn{
    background-color:#068875;
    color:white !important;
    width: 100%;
}
.main-btn-icon{
    font-size: 30px;
    opacity: 0.5;
    margin-right: 10%;
}
.main-btn-text{
    font-size: 25px;
}
.labal-text{
    color: #008A76;
    font-size: 12px;
    font-weight: bold;
}
hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
    border: 0;
    border-top: 0.0625rem solid rgba(0, 0, 0, 0.1);
}


* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
  overflow-x: auto;
    max-height: 200px;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
    </style>
    </head>
    <body >

<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="/">
                <img src="{{ asset('img/blue.jpg') }}">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ">              	
                    <a href="#" class="nav-item nav-link active">الدعم والمساعدة</a>
            </div>
            <div class="navbar-nav ms-auto">              	    
                    <a class="navbar-brand mr-lg-5" href="/">
                        <img src="{{ asset('img/we_dream.jpg') }}">
                    </a>
            </div>
                
            </div>
        </div>
    </nav>

        @section('sidebar')


        @show
 
        <div class="container">
            @yield('content')
        </div>


        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  
<footer class="py-2 my-5 bg-white ">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">التحليل والإشراف</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">د. عبدالإله بن معيد الخالدي</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">إدارة التخطيط المدرسي</a></li>
        
    </ul>
    <ul class="nav justify-content-center  pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">0590055006</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">PhD_Abdulelah@taifedu.sa</a></li>
    </ul>
  </footer>
 
    </body>
</html>



