
        @extends('layouts.app')

        @section('content')
        <!-- Header-->
        <section class=" ">
        <header class="masthead d-flex align-items-center z-depth-5 ">
            <div class="container btn-scroll text-center  ">
           
               <!-- <h1 class="mb-1"></h1>
                <h3 class="mb-5"><em></em></h3>-->
               
                <a class="btn btn-primary btn-xl" href="#about">Informacion Francys</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light " id="about">
            <div class="container px-4 px-lg-5 text-center  z-depth-5 ">
                <div class="row gx-4 gx-lg-5 justify-content-center ">
                    <div class="col-lg-10  ">
                        <h2>Apoyo inmigrante</h2>
                        <p class="lead mb-5">
                            This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
                            <a href="https://unsplash.com/">Unsplash</a>
                            !
                        </p>
                        <a class="btn btn-dark btn-xl" href="#services">Conoce nuestros servicios</a>
                    </div>
                </div>
            </div>
      <!-- Button trigger modal -->
</section>
  

 <!-- Services-->
 
    <div class=" text-white rounded ">
        <div class="col-md-12 px-0 ">
            <div class="parallax-container parallax-container-h z-depth-3">
                
                <div class="container px-4 px-lg-5 z-depth-3">

                        
                   
                        <div class="content-section-heading">
                        <figure>
                            <blockquote class="blockquote">
                                <h2>Simplemente Facil by Fracncys Villegas</h2>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Especialidad en <cite title="Source Title">Inteligencia Migratoria</cite>
                            </figcaption>
                        </figure>     
                        </div>

                       <div class="row ">
                            <div class="col-lg-6 col-md-6">
                               
                                <video class="responsive-video" controls>
                                    <source src="img/2ash.mp4" type="video/mp4">
                                </video>
                        
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="row centrar">
                                    <div class="col-lg-6 col-md-6 col-sm-6 bajar "> 
                                        
                                            <a class="btn tooltipped  red darken-1" target="_blank" data-position="right" data-tooltip="Hola Suscribete!" href="https://www.youtube.com/watch?v=6zJ7Ymm6n6w"> Click vamos!</a>
                                         
                                    </div>     
                      
                                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                                        <div class="alinear responsive-img ">
                                            <img class="animacion1" src="img/animacion1.png" alt="">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                        </div>   
                          
                </div> 
                <div class="parallax"><img src="/img/portadaVpng.png"></div> 
            </div>
            
        </div>
    </div>


<!-- Callout-->
<section class="content-section ">
            <div class="container px-4 px-lg-5 text-center  z-depth-5">
                <h2 class="mx-auto mb-5">
                    Welcome to
                    <em>your</em>
                    next website!
                </h2>
                <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download Now!</a>
            </div>
        </section>


<!-- Portfolio-->
<section class="content-section  " id="portfolio">
    
    <div class="container px-4 px-lg-5  z-depth-5 ">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0">Portfolio</h3>
            <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row gx-0 rounded">
        @foreach ($posts as $post ) 
            <div class="col-lg-6 ">
                <a class="portfolio-item" href="{{route('publicacion.show', $post->id)}}">
                    <div class="caption">
                        <div class="caption-content">
                            <div class="h2">LO QUE NECESITAS SABER PARA OBTENER TU RESIDENCIA ESPAÑOLA</div>
                            <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{$post->image}}" alt="..." />
                </a>
            </div>

            @endforeach
          


        </div>
        <p></p>
        <div class="text-center">
        <a class="waves-effect waves-light btn" href="{{route('blog.index')}}"><i class="material-icons right">description</i>Ver Todo</a>
        </div>
    </div>

    
</section>

<!-- Call to Action-->
<section class="content-section bg-primary text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
        <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
        <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
    </div>
</section>
<!-- Button trigger modal -->


<!-- Modal Login-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="card">
                  <div class="card-header">{{ __('Login') }}</div>
  
                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf
  
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
  
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
  
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Login') }}
                                  </button>
  
                                  @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                  @endif
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal Registro-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="card">
                  <div class="card-header">{{ __('Register') }}</div>
  
                  <div class="card-body">
                      <form method="POST" action="{{ route('register') }}">
                          @csrf
  
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
  
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
  
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
  
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
  
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
  
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
  
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
  
                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                          </div>
  
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Register') }}
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
                
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

        @endsection
      
