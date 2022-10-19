@extends('layouts.app')

@section('content')
 
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2><b>{{ __('Register') }}</b></h2><br>
                            <h6><b>Fillup form With the Correct Values</b></h6>
                        </div>


                        <div class="card-body col">
                            <form method="POST" action="{{ route('register') }}">

                                @csrf
                                {{-- user name --}}


                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-3 col-form-label text-md-end">{{ __('User Name') }}</label>
                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Enter  user Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- !user name --}}

                                {{-- email --}}

                                <div class="row mb-3">

                                    <label for="email"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Enter  Email ">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- !email --}}
                                {{-- phone number --}}
                                <div class="row mb-3">
                                    <label for="phone"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-daouton fa-phone"></span>
                                            </div>
                                        </div>
                                        <input id="phone" type="number"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ old('phone') }}" autocomplete="phone"
                                            placeholder="Enter  Phone Number">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- !phone --}}


                                {{-- date of birth --}}
                                <div class="row mb-3">

                                    <label for="db"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-calendar"></span>
                                            </div>
                                        </div>
                                        <input type="date" class="form-control" name="db">

                                        @error('db')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- NID number --}}
                                <div class="row mb-3">
                                    <label for="nid"
                                        class="col-md-3 col-form-label text-md-end">{{ __('NID Number') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-daouton fa-address-card"></span>
                                            </div>
                                        </div>
                                        <input id="nid" type="number"
                                            class="form-control @error('nid') is-invalid @enderror" name="nid"
                                            value="{{ old('nid') }}" autocomplete="nid"
                                            placeholder="Enter Your NID Number">

                                        @error('nid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Payment number --}}
                                <div class="row mb-3">
                                    <label for="payment"
                                        class="col-md-3 col-form-label text-md-end">{{ __(' Payment ID') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">

                                                <span class="fas fa-money-bill"></span>
                                            </div>
                                        </div>
                                        <input id="payment" type="number"
                                            class="form-control @error('payment') is-invalid @enderror" name="payment"
                                            value="{{ old('payment') }}" autocomplete="payment"
                                            placeholder="Enter Your Payment ID">

                                        @error('payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- sponsor --}}
                                <div class="row mb-3">
                                    <label for="sponsor"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Sponsor ID') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">

                                                <span class="fas fa-bullhorn"></span>
                                            </div>
                                        </div>
                                        <input id="sponsor" type="number"
                                            class="form-control @error('sponsor') is-invalid @enderror" name="sponsor"
                                            value="{{ old('sponsor') }}" autocomplete="sponsor"
                                            placeholder="Enter Your sponsor ID">

                                        @error('sponsor')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- password --}}


                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class=" input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Enter Password ">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="password-confirm"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="input-group col-md-6">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Enter Confirm password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>


                        </div>


                    </div>
                </div>
            </div>

        </div>
@endsection
