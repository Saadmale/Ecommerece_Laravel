<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
        <div style="margin-left:50px" class="input-group">
            <input type="search" class="form-control shadow-sm" placeholder="Search Product & Brands">
            <span class="input-group-text shadow-sm" id="basic-addon2"><i style="background: transparent; color:#c9184a" class="fa-solid fa-magnifying-glass "></i></span>
          </div>
    </form>


    <div style="margin-left:120px;" class="input-group mb-3 mt-2">
        <a style="text-decoration: none; color:black" class="h5  a" href="{{ url('/register') }}" class="btn btn-primary">Sign in</a>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        </div> &nbsp / &nbsp
       <!-- Button trigger modal -->
<a style="text-decoration: none; color:black" type="button" class="h5 a" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Login
  </a>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login to Your Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                <a class="nav-link active   text-light a" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">About</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Service</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Contact</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Shop</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Shipping</a>
              </li>
              <li style="margin-left:640px; margin-top:3px" class="nav-item">
                <a  class="nav-link active text-light a" aria-current="page" class="position-relative a"  href="{{ route('wish') }}">
                    <i style="margin-right:5px;" class="fa-solid fa-heart"></i>
                    <span style="margin-left:2px" class="position-absolute translate-middle badge rounded-pill bg-danger mt-1">
                        {{ count((array) session('wish')) }}
                        <span class="visually-hidden">unread messages</span>
                </a>
              </li>
              <li style="margin-left:20px" class="nav-item">
                <a style="text-decoration: none; color:white" class="position-relative a" href="{{ route('cart') }}">
                    <i class="fa-solid fa-cart-shopping mt-3"></i>
                    <span style="margin-left:8px" class="position-absolute start-100 translate-middle badge rounded-pill bg-danger mt-3">
                      {{ count((array) session('cart')) }}
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </a>
              </li>

            </ul>
          </div>
        </div>
    </nav>
</div>
</div>

        @yield('content')

        <div class="py-3 bg-white mb-2 shadow-sm mt-5">

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


          <script>

            let $password = document.getElementById("password");
            let $icon = document.getElementById("icon");

            icon.onclick = function(){
                if($password.type == "password"){
                    $password.type = "text";
                    $icon.src="image/eye-open.png";
                }else{
                    $password.type = "password";
                    $icon.src="image/eye-close.png";

                }
            }

            </script>

</body>
</html>
