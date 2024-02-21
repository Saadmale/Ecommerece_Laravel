
<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Shapio</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        .a:hover{
      color: #ff4d6d !important;
  }
  .pro:hover{
      box-shadow: 0px 0px 20px #adb5bd;
      transition: 0.5s;

  }
  .icon:hover{
    color: #ff4d6d !important;

  }
      </style>

</head>
<body style="background-color: #e9ecef">
    <div class="container d-flex justify-content-between mt-3">
        <h2 >Shapio</h2>

        <div style="margin-left:30px;" class="dropdown h4 mt-2 ">
            <a style="text-decoration: none; color:black"href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bars a"></i>
            </a>

            <ul style="border: none" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item a" href="#">Smart Phone</a></li>
              <li><a class="dropdown-item a" href="#">Smart Watch</a></li>
              <li><a class="dropdown-item a" href="#">Laptop</a></li>
              <li><a class="dropdown-item a" href="#">Tablet</a></li>
              <li><a class="dropdown-item a" href="#">PS4, PS5</a></li>
              <li><a class="dropdown-item a" href="#">Gaming PC</a></li>
              <li><a class="dropdown-item a" href="#">Smart Bags</a></li>
              <li><a class="dropdown-item a" href="#">Shoes</a></li>
              <li><a class="dropdown-item a" href="#">Bages</a></li>
            </ul>
          </div>




    <form action="" class="col-8 mt-1">
        <div style="margin-left:50px" class="input-group mb-3">
            <input type="search" class="form-control shadow-sm" placeholder="Search Product & Brands">
            <span class="input-group-text shadow-sm" id="basic-addon2"><i style="background: transparent; color:#c9184a" class="fa-solid fa-magnifying-glass "></i></span>
          </div>
    </form>


    <div style="margin-left:120px;" class="input-group mb-3 mt-2">
        @if (Route::has('login'))
          @auth

            <a style="color: black" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item a" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <a class="dropdown-item a" href="{{ route('home') }}">
                    {{ __('My Profile') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

          @else
             <a style="text-decoration: none; color:black" class="h5  a" href="{{ route('register') }}" class="btn btn-primary">Sign in</a>
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        </div> &nbsp / &nbsp
       <!-- Button trigger modal -->
<a style="text-decoration: none; color:black" type="button" class="h5 a" href="{{ route('login') }}" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Login
  </a>
  @endauth
  @endif

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login to Your Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
{{-- Login Form --}}
<form method="POST" action="{{ route('login') }}" class="col-10">
    @csrf

    <div class="mb-3">
        <input style="margin-left:33px" type="email" value="{{ old('email') }}" name="email" required placeholder=" Email" class="form-control @error('email') is-invalid @enderror">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

    </div>
    <div class="mb-3">
        <input style="margin-left:33px" type="password" name="password" placeholder=" Password" required class="form-control @error('password') is-invalid @enderror">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

    </div>

    <button style="margin-left: 30px" type="submit" class="btn btn-outline-success">Login</button>

            @if (Route::has('password.request'))
                <a style="text-decoration: none; color:black; margin-left:20px" class=" a" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
</form>

        </div>


      </div>
    </div>
  </div>
</div>
    </div>



    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li style="margin-left:100px" class="nav-item">
                <a class="nav-link active   text-light a" aria-current="page" href="{{ url('/home') }}">Home</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="{{ url('/') }}">About</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="{{ url('/') }}">Service</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="{{ url('/') }}">Contact</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="{{ url('/') }}">Shop</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="{{ url('/') }}">Shipping</a>
              </li>
              @if (Auth::check())
              <li style="margin-left:590px; margin-top:3px" class="nav-item">
                <a  class="nav-link active text-light a" aria-current="page" class="position-relative a"  href="{{ route('wish') }}">
                    <i style="margin-right:5px;" class="fa-solid fa-heart"></i>
                    <span style="margin-left:2px" class="position-absolute translate-middle badge rounded-pill bg-danger mt-1">
                        {{ count((array) session('wish')) }}
                        <span class="visually-hidden">unread messages</span>
                </a>
              </li>
              @else
              <li style="margin-left:640px; margin-top:3px" class="nav-item">
                <a onclick="return confirm('Please Login Your Account')" class="nav-link active text-light a" aria-current="page" class="position-relative a"  href="{{ route('wish') }}">
                    <i style="margin-right:5px;" class="fa-solid fa-heart"></i>
                    <span style="margin-left:2px" class="position-absolute translate-middle badge rounded-pill bg-danger mt-1">
                        {{ count((array) session('wish')) }}
                        <span class="visually-hidden">unread messages</span>
                </a>
              </li>
              @endif
        @if (Auth::check())
              <li style="margin-left:20px" class="nav-item">
                <a style="text-decoration: none; color:white" class="position-relative a" href="{{ route('cart') }}">
                    <i class="fa-solid fa-cart-shopping mt-3"></i>
                    <span style="margin-left:8px" class="position-absolute start-100 translate-middle badge rounded-pill bg-danger mt-3">
                      {{ count((array) session('cart')) }}
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </a>
              </li>
         @else
         <li style="margin-left:20px" class="nav-item">
            <a style="text-decoration: none; color:white" class="position-relative a" href="{{ route('cart') }}">
                <i onclick="return confirm('Please Login Your Account')" class="fa-solid fa-cart-shopping mt-3"></i>
                <span style="margin-left:8px" class="position-absolute start-100 translate-middle badge rounded-pill bg-danger mt-3">
                  {{ count((array) session('cart')) }}
                  <span class="visually-hidden">unread messages</span>
                </span>
              </a>
          </li>
         @endif
            </ul>
          </div>
        </div>
      </nav>




    <div class="">
        <div id="carouselExampleControls" class="carousel slide shadow-sm" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img style="height: 400px;" src="image/banner1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="height: 400px;" src="image/banner3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="height: 400px;" src="image/banner4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>


        <div class="container d-flex justify-content-between mt-4">
            <h4 style="color: #ff4d6d">Populer Products</h4>
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>

        @endif
<div class="container mt-3 mb-3">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 col-6 mb-4">
                    <div style="text-align: center" class="card pro">
                        <div class="card-body shadow-sm ">
                            <p class="btn-holder"><a style="margin-left: 240px;" href="{{ route('add_to_wish', $product->id) }}"><i style="color: black" class="fa-regular fa-heart  icon"></i></a> </p>
                            <img src="{{ $product->image }}" width="200px" alt="">
                            <h6 class="card-title mt-1">{{ $product->product_name }}</h6>
                            <p>{{ $product->description }}</p>
                            <p class="card-text"><strong>Price: </strong> ${{ $product->price }}</p>

                            <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-outline-primary">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4 mb-4">
        <h4 style="color: #ff4d6d">Featured Products</h4>
    </div>
    <div class="container mt-3 mb-3 d-flex justify-content-between">

        <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
            <div class="card shadow-sm" style="width: 15rem;">
                <img class="mt-4" src="image/exwatch.png" width="230px;"  alt="...">
                <div class="card-body">
                  <h6 style="text-align: center" class="card-title">Fossil CH29271 Briggs</h6>


                  <div class="container d-flex justify-content-between">

                    <div class="group">
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                    </div>

                    <h5>$1,500</h5>

                  </div>

                </div>
              </div>
            </a>


            <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
                <div class="card shadow-sm" style="width: 15rem;">
                    <img style="margin-left:6px" src="image/led.png" width="230px;"  alt="...">
                    <div class="card-body">
                      <h6 style="text-align: center" class="card-title">BPL 108cm (43)</h6>
                      <p style="text-align: center; font-size:14px" class="card-text">Ultra HD (4K) Smart LED TV. (BPL108K300S4H. 4x HDMI)</p>

                      <div class="container d-flex justify-content-between">

                        <div class="group">
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="color: #ffea00" class="fa-regular fa-star"></i>
                        </div>

                        <h5>$4,900</h5>

                      </div>

                    </div>
                  </div>
                </a>


                <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
                    <div class="card shadow-sm" style="width: 15rem;">
                        <img src="image/sofa.png" width="230px;"  alt="...">
                        <div class="card-body">
                          <h6 style="text-align: center" class="card-title">Dolphin Fabric</h6>
                          <p style="text-align: center; font-size:14px" class="card-text">3 + 2 Grey Brown Sofa Set (Con - Figuration-L-Shaped)</p>

                          <div class="container d-flex justify-content-between">

                            <div class="group">
                                <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                <i style="color: #ffea00" class="fa-regular fa-star"></i>
                                <i style="color: #ffea00" class="fa-regular fa-star"></i>
                            </div>

                            <h5>$3,999</h5>

                          </div>

                        </div>
                      </div>
                    </a>



                    <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
                        <div class="card shadow-sm" style="width: 15rem;">
                            <img src="image/table.png" width="230px;"  alt="...">
                            <div class="card-body">
                              <h6 style="text-align: center" class="card-title">Royal OAK Atlas</h6>
                              <p style="text-align: center; font-size:14px" class="card-text"></p>

                              <div class="container d-flex justify-content-between">

                                <div class="group">
                                    <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                    <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                    <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                    <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                    <i style="color: #ffea00" class="fa-regular fa-star"></i>
                                </div>

                                <h5>$2,900</h5>

                              </div>

                            </div>
                          </div>
                        </a>




                        <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
                            <div class="card shadow-sm" style="width: 15rem;">
                                <img src="image/psf.png" width="230px;"  alt="...">
                                <div class="card-body">
                                  <h6 style="text-align: center" class="card-title">PS5 Standard 825GB</h6>
                                  <p style="text-align: center; font-size:14px" class="card-text"></p>

                                  <div class="container d-flex justify-content-between">

                                    <div class="group">
                                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                                    </div>

                                    <h5>$8,800</h5>

                                  </div>

                                </div>
                              </div>
                            </a>

    </div>

    <div style="background-image:url('image/dark.jpg')" class="mt-3 py-5 mb-4">

      <div class="container mt-1 d-flex justify-content-between">
        <h1 style="margin-top:100px" class="text-white">Deals of<br> the Day <p style="font-size: 15px;">08:32:29</p></h1>

        <a style="text-decoration: none; color:black; height:100%; margin-left:140px;" class="pro" href="">
          <div class="card shadow-sm" style="width: 15rem;">
              <img class="mt-4" src="image/gold watch.png" width="230px;"  alt="...">
              <div class="card-body">
                <h6 style="text-align: center" class="card-title">Fossil CH29271 Briggs</h6>
                <p style="text-align: center; font-size:14px" class="card-text"></p>

                <div class="container d-flex justify-content-between">

                  <div class="group">
                      <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                      <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                      <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                      <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                      <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                  </div>

                  <h5>$1,500</h5>

                </div>

              </div>
            </div>
          </a>


          <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
            <div class="card shadow-sm" style="width: 15rem;">
                <img src="image/table.png" width="230px;"  alt="...">
                <div class="card-body">
                  <h6 style="text-align: center" class="card-title">Royal OAK Atlas</h6>
                  <p style="text-align: center; font-size:14px" class="card-text"></p>

                  <div class="container d-flex justify-content-between">

                    <div class="group">
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                        <i style="color: #ffea00" class="fa-regular fa-star"></i>
                    </div>

                    <h5>$2,900</h5>

                  </div>

                </div>
              </div>
            </a>


            <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
              <div class="card shadow-sm" style="width: 15rem;">
                  <img src="image/sofa.png" width="230px;"  alt="...">
                  <div class="card-body">
                    <h6 style="text-align: center" class="card-title">Dolphin Fabric</h6>
                    <p style="text-align: center; font-size:14px" class="card-text">3 + 2 Grey Brown Sofa Set (Con - Figuration-L-Shaped)</p>

                    <div class="container d-flex justify-content-between">

                      <div class="group">
                          <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                          <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                          <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                          <i style="color: #ffea00" class="fa-regular fa-star"></i>
                          <i style="color: #ffea00" class="fa-regular fa-star"></i>
                      </div>

                      <h5>$3,999</h5>

                    </div>

                  </div>
                </div>
              </a>

              <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
                <div class="card shadow-sm" style="width: 15rem;">
                    <img style="margin-left:6px" src="image/led.png" width="230px;"  alt="...">
                    <div class="card-body">
                      <h6 style="text-align: center" class="card-title">BPL 108cm (43)</h6>
                      <p style="text-align: center; font-size:14px" class="card-text">Ultra HD (4K) Smart LED TV. (BPL108K300S4H. 4x HDMI)</p>

                      <div class="container d-flex justify-content-between">

                        <div class="group">
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="font-size: 14px; color:#ffea00" class="fa-solid fa-star"></i>
                            <i style="color: #ffea00" class="fa-regular fa-star"></i>
                        </div>

                        <h5>$4,900</h5>

                      </div>

                    </div>
                  </div>
                </a>

      </div>

    </div>

    <div class="container d-flex justify-content-between mt-3 mb-4">

<a style="text-decoration: none; color:black;height:100%" class="pro" href="">
      <div class="card shadow-lg" style="width: 18rem;">
        <img style="margin-left:50px" src="image/xbox.png" width="170px;" alt="...">
        <h6 style="text-align: center">Gaming Console</h6>
        <img style="margin-left:30px; background:transparent" class="mb-4" src="image/xbox2.png" width="100%">
      </div>
  </a>


  <a style="text-decoration: none; color:black; height:100%" class="pro" href="">
  <div style="width: 450px; height:100%" class="card bg-danger">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="image/nikeshoes.png" width="300px" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <img style="margin-left: 90px; margin-top:60px;" style="margin-right:50px" src="image/nikelogo.png" width="150px" alt="...">
        </div>
      </div>
    </div>
  </div>
  </a>



  <div class="card mb-3  pro" style="width: 450px;">
    <div  class="row g-0">
      <div class="col-md-4">
        <img src="image/tab.png" width="280px" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p style="margin-left: 100px;" class="mt-5">Best Selling</p>
          <h5 style="margin-left: 100px" class="card-title">iPad pro (512 GB)</h5>
          <h6 style="margin-left: 100px">Rs: 55,000</h6>
          <a style="margin-left: 100px" class="btn btn-dark" href="">Buy Now</a>

        </div>
      </div>
    </div>
  </div>
</div>

{{-- Footer --}}


<div class="py-3 bg-white mb-2 shadow-sm">

  <div class="container d-flex justify-content-between mt-3">

    <div class="card border-0" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">Shapio</h4>
        <p class="card-text">Some quick example text to build on the card title  up the bulk</p>
      </div>
    </div>


    <div class="card border-0" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">POLICY INFO</h4>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Privacy Policy</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Terms of Sale</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Terms of Use</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Report Abuse & Takedown Policy</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">CSR Policy</a>
      </div>
    </div>


    <div class="card border-0" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">COMPANY</h4>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">About us</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Blog</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Sitemap</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">FAQ</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Contact Us</a>

      </div>
    </div>


    <div class="card border-0" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">BUSINESS</h4>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Sell on Shapio</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Advertise on Shapio</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Media Enquires</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Be an Affiliate</a><br>
       <a style="text-decoration: none; color:black" class="a text-muted" href="">Deal of the Day</a>
      </div>
    </div>



    <div class="card border-0" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">SUBSCRIBE</h4>
        <div class="input-group">
       <input type="search" class="form-control shadow-sm border-0" placeholder=" Email Address" name="" id="">
       <button class="btn btn-dark">Submit</button>
      </div>
      <p class="mt-2 text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
      </div>
    </div>
  </div>
</div>

<h6 style="text-align: center" class="mt-3 mb-3 text-muted">Copyright 2024. All Rights Reserved</h6>

</body>
</html>
