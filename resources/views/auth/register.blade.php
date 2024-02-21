@extends('layout.design')

@section('content')
    <div style="width: 500px; background-color:white" class="container shadow-lg d-flex justify-content-center mt-5 p-5 mb-3">

                    <form method="POST" action="{{ route('register') }}" class="col-10">
                        @csrf

                        <h4 class="mb-4">Register to Your Account</h4>
                            <div class="mb-3 mt-3">
                                <input type="text" value="{{ old('name') }}" name="name" placeholder=" Name" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" value="{{ old('email') }}" name="email" placeholder=" Email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" id="password">
                                <span class="input-group-text " id="basic-addon2"><img style="cursor: pointer" id="icon" src="image/eye-close.png" width="20px" alt=""></span>
                            </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="mb-3">
                                <input id="password-confirm" type="password" placeholder="Confirm-Password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>


                            <button type="submit" class="btn btn-outline-primary">Register</button>
                    </form>
                </div>

@endsection
<script>

    let $password = document.getElementById('password');
    let $icon = document.getElementById('icon');

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
