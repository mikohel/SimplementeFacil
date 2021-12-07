<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Stylish Portfolio - Start Bootstrap Template</title>
        
        <!-- Favicon-->

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link href="/mis_estilos/micss/miCss.css" rel="stylesheet" />
        <link href="/css/styless.css" rel="stylesheet" />
        <link href="/materialize/css/materialize.css" rel="stylesheet" />

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
       
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
      
                <nav id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand "><a href="#page-top">Bien Venido!</a></li>
                        <li class="sidebar-nav-item"><a href="#page-top">Inicio</a></li>
                        <li class="sidebar-nav-item"><a href="#about">Quien Soy?</a></li>
                        <li class="sidebar-nav-item"><a href="#services">Servicios</a></li>
                        <li class="sidebar-nav-item"><a href="#portfolio">Publicaciones</a></li>
                        <li class="sidebar-nav-item"><a href="#contact">Contacto</a></li>
                        <li class="sidebar-nav-item"><a href="#portfolio">Blog Posts</a></li>
                        @if (Route::has('login'))
                            @auth
                            <li  class="sidebar-nav-item"><a href="{{ url('/prueba') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a></li> 
                            <li class="sidebar-nav-item">
                                            <a class="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li> 
                            @else
                    
                                <li  class="sidebar-nav-item"> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li> 

                                @if (Route::has('register'))
                                <li  class="sidebar-nav-item"> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li> 
                                @endif
                            @endauth
                        @endif

                    
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        login
                        </button>
                        
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Registro
                        </button>
                    </ul>
                    
                </nav>
               
        <main >

            @yield('content')

        </main> 
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Your Website 2021</p>
            </div>

              
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/plantilla/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body> 
</html>
