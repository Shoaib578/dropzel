<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="/css/normal_assets/css/theme.css" type="text/css"> 

<link rel="stylesheet" href="/css/normal_assets/vendor/animate/animate.css" type="text/css"> 
<link rel="stylesheet" href="/css/normal_assets/vendor/owl-carousel/css/owl.carousel.css" type="text/css"> 
<!-- <link rel="stylesheet" href="/css/normal_assets/css/bootstrap.css" type="text/css">  -->
<link rel="stylesheet" href="/css/normal_assets/css/maicons.css" type="text/css"> 

  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/admin_assets/css/style.css">
  <link rel="stylesheet" href="/css/admin_assets/css/components.css">
    <title>Admin</title>
</head>
<body>

<nav class="navbar navbar-expand-lg main-navbar " style="background-color:grey;">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
         
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/css/admin_assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{auth()->user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
             
              <div class="dropdown-divider"></div>
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>



      <!-- sider bar -->



      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{route('admin_home')}}">Dropzel</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin_home')}}">DZ</a>
          </div>
          <ul class="sidebar-menu">
             
             
              
              <li><a class="nav-link" href="{{route('admin_home')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
             
              <li><a class="nav-link" href="{{route('add_user')}}"><i class="fa fa-user"></i> <span>Add User</span></a></li>
              <li><a class="nav-link" href="{{route('add_product')}}"><i class="fab fa-product-hunt"></i> <span>Add Product</span></a></li>
              <li><a class="nav-link" href="{{ route('products') }}"><i class="fab fa-product-hunt"></i> <span>Products</span></a></li>
             
             
              <li><a class="nav-link" href="{{route('categories')}}"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Categories</span></a></li>
             
            
              <li><a class="nav-link" href="{{route('subscriptions')}}"><i class="fas fa-plane"></i><span>Subscriptions</span></a></li>
             
              
            </ul>

           
        </aside>
      </div>


      <br>
      <br>
      <br>
     

      @if (session('status'))
                <div class="bg-gray-500 p-4 rounded-lg mb-6 text-white text-center" style="background-color:red;color:white;">
                    {{ session('status') }}
                </div>
                <br >
            @endif

    
      @yield('content')
    

        <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="/css/admin_assets/js/stisla.js"></script>

 <!-- Template JS File -->
 <script src="/css/admin_assets/js/scripts.js"></script>
  <script src="/css/admin_assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="/css/admin_assets/js/page/index.js"></script>


</body>
</html>