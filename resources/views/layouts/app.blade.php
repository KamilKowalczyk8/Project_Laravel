<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kursy</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    
    <body id="page-top" style="color:white; background-color:#4b66ff">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav" >
        <div class="money" style="position:absolute;font-size:16px;right:50px;border: 2px solid white;height:50px;
        width:220px;justify-content:center;align-items:center;display:flex;border-radius:5px">
   Stan konta - $ {{ Auth::user()->money}}
        </div>
            <div class="container">
           
                <a class="navbar-brand js-scroll-trigger"  style="color:white;" href="{{ route('home') }}">Zacznij programować</a>
            
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                
                    <ul class="navbar-nav ml-auto">
                   
                         <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:white;" href="{{ route('kursy') }}">Lista kursów</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:white;" href="{{ route('dodaj') }}">Dodaj kurs</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:white;" href="{{ route('bought') }}">Zobacz kupione kursy</a></li>
<!-- 
                        @if(auth::user()->role=='1')
                        <form action="{{ route('serror') }}" method="GET">
                        
                        <input type="hidden" name="role" value="{{ auth::user()->role }}">
                        <li class="nav-item mx-0 mx-lg-1"><input type="submit" value="Zobacz zgłoszenia" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:white;
                        background:unset;border:none;font-weight:700;font-size:18px;margin-top:-2px;"></input></li>
                        
                        </form>
                        @endif
                        @if(auth::user()->role=='1')
                        <form action="{{ route('serror') }}" method="GET">
                        
                        <input type="hidden" name="role" value="{{ auth::user()->role }}">
                        <li class="nav-item mx-0 mx-lg-1"><input type="submit" value="Zatwierdz kurs" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:white;
                        background:unset;border:none;font-weight:700;font-size:18px;margin-top:-2px;"></input></li>
                        
                        </form>
                        @endif -->
                        <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:black;" href="#contact">Contact</a></li> -->
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"style="padding-top:20px;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj') }}
                                    </a>
                                    <a class="dropdown-item"style="padding-top:20px;" href="{{ route('error') }}" >

                                                     
                                        {{ __('Zgłoś błąd') }}
                                    </a>
                                    <a class="dropdown-item"style="padding-top:20px;"  >
                                    @if(auth::user()->role=='1')
                                    <form action="{{ route('serror') }}" method="GET">
                                    
                                    <input type="hidden" name="role" value="{{ auth::user()->role }}">
                                    <li class="dropdown-item"><input type="submit" value="Zobacz zgłoszenia" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:grey;
                                    background:unset;border:0px;font-weight:500;font-size:16px;margin-top:-20px;margin-left:-40px;color:#212529;text-transform:uppercase;"></input></li>
                                    </form>
                                    @endif
                                    </a>

                                    <a class="dropdown-item"style="padding-top:20px;" >
                                    @if(auth::user()->role=='1')
                                    <form action="{{ route('acceptkursy') }}" method="GET">
                                    
                                    <input type="hidden" name="role" value="{{ auth::user()->role }}">
                                    <li class="dropdown-item"><input type="submit" value="Zatwierdz kurs" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"style="color:grey;
                                    background:unset;border:0px;font-weight:500;font-size:16px;margin-top:-35px;margin-left:-40px;color:#212529;text-transform:uppercase;"></input></li>
                                    </form>
                                    @endif
                                                     
                                   
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
               
               
            </div>
        </nav>
        @yield('content')                     

       
        
       
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white"  style="background-color:#00127a;>
            <div class="container""><big>Copyright © Your Website 2021</big><br>
            <medium>Designed from Kamil</medium>
        </div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
      
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>

<style>
input:hover{
border:white;

}
</style>

