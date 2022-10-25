
 <!DOCTYPE html>
 
 <html lang="en">
    
 <head>
    @extends('layouts.app')
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Better Think BD</title>
     <link rel="icon" type="image/png"  sizes="34x34" href="{{ asset('backend/dist/img/logo circle.jpg') }}">
     <link rel="stylesheet" href="{{ asset('forntend/css/custom.css') }}">
     <link rel="stylesheet" href="{{ asset('forntend/css/bootstrap.min.css') }}">
 </head>

 <body>
     <header>
         <div class="header-logo">
             <img src="{{ asset('forntend/img/Logo_Blue_text-removebg-preview.png') }}" alt="">
         </div>
         <div class="background-img">

             <div class="sticky-md-top">
                 <div class="header info-item">


                     <ul>
                         <li><a href="">Home</a></li>
                         <li><a href="">Service</a></li>
                         <li><a href="">about us</a></li>
                         <li><a href="">Blog</a></li>
                     </ul>

                     <div class="loging-items">
                         <ul>
                             <li><a href=""><i class="fi-xwluxl-magnifying-glass-wide"></i></a></li>
                             <li>
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Sign up</a>
                                    @endif
                                    <a href="{{ route('login') }}">Log in</a>



                                @endauth
                                 @endif
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>

         </div>
     </header>
     <!-- /////////////////header end///////////////////////////// -->

     <footer>
         <div class="footer-brand-logo">
             <div class="brand-list">
                 <ul>
                     <li><img src="{{ asset('forntend/img/1.jpg') }}" alt=""></li>
                     <li><img src="{{ asset('forntend/img/2.png') }}" alt=""></li>
                     <li><img src="{{ asset('forntend/img/3.jpg') }}" alt=""></li>
                     <li><img src="{{ asset('forntend/img/4.png') }}" alt=""></li>
                     <li><img src="{{ asset('forntend/img/5.png') }}" alt=""></li>
                     <li><img src="{{ asset('forntend/img/7.png') }}" alt=""></li>
                 </ul>
             </div>

         </div>
         <footer >
            <footer class="main-footer">
               
         </footer>
     </footer>
     <script defer src="https://friconix.com/cdn/friconix.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"
         integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA=="
         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="{{ asset('forntend/js/bootstrap.min.js') }}"></script>
 </body>

 </html>
