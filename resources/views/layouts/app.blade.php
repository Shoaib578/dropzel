<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="/css/normal_assets/css/theme.css" type="text/css"> 

<link rel="stylesheet" href="/css/normal_assets/vendor/animate/animate.css" type="text/css"> 
<link rel="stylesheet" href="/css/normal_assets/vendor/owl-carousel/css/owl.carousel.css" type="text/css"> 
<!-- <link rel="stylesheet" href="/css/normal_assets/css/bootstrap.css" type="text/css">  -->
<link rel="stylesheet" href="/css/normal_assets/css/maicons.css" type="text/css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <title>Dropzel</title>


</head>
<body style="background-color: #323232;">




<header>
      

   
      <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color:black">
        <div class="container">
          <a class="navbar-brand" style="color:white" href="/"><span style="color:#17aa35">Drop</span>Zel</a>

      

          <button class="navbar-toggler" style="color:white" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link"  style="color:white" href="/">Home</a>
              </li>
              @if (auth()->user())
              <li class="nav-item ">
                <a class="nav-link" style="color:white" href="{{ route('get_favorite_products') }}">Favorites</a>
              </li>
              @endif

              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:black">
            @foreach($categories as $category)
              <a class="dropdown-item " style="color:white" href="http://127.0.0.1:8000/product/search/{{ $category->name }}/">{{ $category->name }}</a>
             
            @endforeach
            
        </li>
        @if (auth()->user())
        <li class="nav-item">
                <a class="btn_login ml-lg-3" style="text-decoration:none;color:white" href="{{route('logout')}}">Logout</a>
              </li>
          @else
              
              <li class="nav-item">
              <a class="btn_login  ml-lg-3" style="text-decoration:none;color:white" href="{{route('login')}}">Login </a>
              &nbsp;
                <a class="btn btn-success ml-lg-3" href="{{route('register')}}">Register</a>
              </li>
        @endif
            </ul>
          </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
      </nav>
   
  </header>
  
    @yield('content')


 



    <div class="footer">
  <p>Dropzel © 2021</p>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/css/normal_assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="/css/normal_assets/vendor/wow/wow.min.js"></script>

<script src="/css/normal_assets/js/theme.js"></script>
</body>
</html>