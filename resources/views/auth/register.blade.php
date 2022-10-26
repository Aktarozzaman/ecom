<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.app')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Think BD|Registration</title>
    <link rel="stylesheet" href="{{ asset('signuppage/Css/from.css') }}">
    <link rel="stylesheet" href="{{ asset('signuppage/Css/bootstrap.min.css') }}">

</head>

<body>
    <div class="sticky-md-top">
        <div class="header-logo">
            <div class="header ">
                <img src="{{ asset('signuppage/img/Logo_Blue_text-removebg-preview.png') }}" alt="">
                <div class="info-item">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="">Service</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </div>
                <div class="loging-items">
                    <ul>
                        <li><a href="{{ route('register') }}">Sign up</a></li>
                        <li><a href="{{ route('login') }}">Log in</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background-colour">
        <div class="right-from-page">
            <div class="from-page">
                <div class="from-header">
                    <p>Sign up to get your digital <br> Discount Card</p>
                </div>
                <div class="all-from">
                    
                    <form method="POST" action="{{ route('register') }}">

                        @csrf
                        <div class="over-form">
                            <div class="right-form">
                                <h5>Name<sup>*</sup></h5>
                                <input id="name" type="text"
                                    class="input-box @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Enter  user Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <h5>Email<sup>*</sup></h5>

                                <input id="email" type="email"
                                    class="input-box @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter  Email ">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <h5>password<sup>*</sup></h5>
                                <input id="password" type="password"
                                    class="input-box @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Enter Password ">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <h5>Confirm Pass<sup>*</sup></h5>

                                <input id="password-confirm" type="password" class="input-box"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Enter Confirm password">

                                <h5>Mobile<sup>*</sup></h5>
                                
                                <input id="mobail" type="number"
                                class="input-box @error('mobail') is-invalid @enderror" name="mobail"
                                value="{{ old('mobail') }}" required autocomplete="mobail"
                                placeholder="Enter  mobail Number ">

                            @error('mobail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                                <h5>NID</h5>
                                <input type="number" class="input-box" placeholder="Enter Your NID">

                                <h5>Date of Birth<sup>*</sup></h5>
                                <input id="date" type="date"
                                class="input-box @error('date') is-invalid @enderror" name="date"
                                value="{{ old('date') }}" required autocomplete="date"
                                placeholder="Enter Your DB ">

                            @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                                <h5>Sponsor ID<sup>*</sup></h5>
                                <input type="id" class="input-box" placeholder="0012-2022-0000-">

                                <div class="Sponsor">
                                    <p>MD.Karim Shekh</p>
                                </div>

                                <h5>Payment ID<sup>*</sup></h5>
                                <input type="id" class="input-box" placeholder="0012-2022-0000-">

                                <div class="Sponsor">
                                    <p>MD.Karim Shekh</p>
                                </div>
                            </div>
                            <div class="left-form">
                                <form runat="server">
                                    <input accept="image" type="file" id="imgInp" />
                                    <img id="blah" src="{{ asset('backend/dist/img/upload img.jpg') }}" alt="" height="100px" width="100px" />
                                </form>

                                <div class="payment-info">
                                    <h5>Bikash Number</h5>
                                    <input type="number" class="input-box">
                                    <h5>Bank Name</h5>
                                    <input type="id" class="input-box">
                                    <h5>Branch</h5>
                                    <input type="id" class="input-box">
                                    <h5>Account Number</h5>
                                    <input type="id" class="input-box">

                                    <div class="submit-button">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>
        <div class="from-logo">
            <div class="logo-img">
                <img src="{{ asset('signuppage/img/Logo_Blue_text-removebg-preview.png') }}" alt="">
            </div>
        </div>
    </div>
    </header>


    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"
        integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('signuppage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('signuppage/js/jquarry.js') }}"></script>
    <script src="{{ asset('signuppage/js/from.js') }}"></script>
</body>

</html>
