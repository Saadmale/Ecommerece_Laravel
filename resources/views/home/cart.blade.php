
<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/71b7145720.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
  .my:hover{
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
                <a class="nav-link active text-light a" aria-current="page" href="">About</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Service</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Contact</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="{{ route('welcome') }}">Shop</a>
              </li>
              <li style="margin-left:30px" class="nav-item">
                <a class="nav-link active text-light a" aria-current="page" href="">Shipping</a>
              </li>
              <li style="margin-left:580px; margin-top:3px" class="nav-item">
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


      <div class="mb-5 py-3 bg-light">
        <div class="container">
        <h5>Home / <span style="color: #ff4d6d">My Cart</span></h5>
      </div>
      </div>
      @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
      </div>

      @endif

      <div class="container mt-1 mb-3">
        <h3>My Account</h3>
      </div>

      <div class="container d-flex justify-content-between mt-4 mb-5">
        <div class="card shadow-lg" style="width: 10rem; height:100%;">
            <div class="card-body">
            <a style="text-decoration: none; color:black; " class="my" href="{{ route('home') }}"><i style="margin-right:8px" class="fa-solid fa-user-tie"></i>My Profile</a><br>
            <a style="text-decoration: none; color:black;" class="my" href="{{ route('mylocation') }}"><i style="margin-right:10px" class="fa-solid fa-location-dot"></i>Location</a><br>
            <a style="text-decoration: none; color:black;" class="my" href="{{ route('myorder') }}"><i style="margin-right:8px" class="fa-solid fa-bag-shopping"></i>My Order</a><br>
            <a style="text-decoration: none; color:#ff4d6d;" class="my" href="{{ route('cart') }}"><i style="margin-right:5px" class="fa-solid fa-cart-shopping"></i>My Cart</a><br>
            <a style="text-decoration: none; color:black;" class="my" href="{{ route('wish') }}"><i style="margin-right:5px;" class="fa-solid fa-heart"></i>WishList</a><br>
            <a style="text-decoration: none; color:black;" class="my" href="{{ route('add_category') }}"><i style="margin-right:7px" class="fa-solid fa-list"></i>Add Category</a><br>
            <a style="text-decoration: none; color:black;" class="my" href=""><i style="margin-right: 8px" class="fa-solid fa-gear"></i>Setting</a>
        </div>
        </div>

        <div class="card shadow-lg mb-5" style="width: 65rem; margin-left:100px">
            <div class="card-body">
              <h4 class="">My Cart</h4>
              <h6 class=" mt-3">Selected My Orders</h6>
              <hr>
              <div class="container d-flex justify-content-between">
                <table id="cart" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                         @php $total += $details['price'] @endphp

                                <tr rowId="{{ $id }}">
                                    <td><img src="{{ asset($details['image']) }}" width="50px" alt=""></td>
                                    <td data-th="Product">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <h5 class="nomargin">{{ $details['product_name'] }}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Subtotal" class="text-center">{{ $details['price'] }}</td>
                                    <td class="actions">
                                        <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <td></td>
                            <td>
                                <img style="margin-left: 330px" src="/image/cartlogo.png" width="70px" alt=""> <h6 style="text-align: center">Your Cart is Empty.</h6>
                            </td>


                        @endif
                    </tbody>
                    <tfoot>
                    </tfoot>

                </table>

              </div>


              <a style="float: right" class="btn btn-danger" href="{{ route('checkout') }}">Checkout</a>
              <a style="float: right; margin-right:20px" class="btn btn-primary" href="{{ route('welcome') }}">Continue Shopping</a>
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

<script>

    $(".delete-product").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
</body>
</html>



