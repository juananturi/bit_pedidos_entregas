<div> 
    <!DOCTYPE html> 
    <html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>{{ $title ?? 'Pedidos y Entregas' }}</title> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
<!-- Enlace a los archivos CSS de Bootstrap --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    </head> 
    <body> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <a class="navbar-brand" href="/"> 
            <img src="{{ asset('logo.png') }}" alt="Logo" height="30"> 
            </a> 
<!-- Agrega aquí el menú de navegación con Bootstrap --> 
            <nav class="navbar navbar-expand-lg bg-body-tertiary"> 
                <div class="container-fluid"> 
                    <a class="navbar-brand" href="#"></a> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                    </button> 
                    <div class="collapse navbar-collapse" id="navbarNav"> 
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                        
                    </div> 
                </div> 
            </nav> 
        </nav> 
         
        <div class="container mt-4"> 
            {{ $slot }} 
        </div> 
<footer>
    <!-- Agrega aquí el pie de página con Bootstrap --> 
    <div class="container text-center"> 
            <p>&copy; 2023 Anturi. Todos los derechos reservados.</p> 
            <div class="social-icons"> 
                <a href="#"><i class="fab fa-facebook"></i></a> 
                <a href="#"><i class="fab fa-twitter"></i></a> 
                <a href="#"><i class="fab fa-instagram"></i></a> 
                <a href="#"><i class="fab fa-linkedin"></i></a> 
            </div> 
        </div> 
</footer>  

         
<!-- Scripts de Bootstrap y tu aplicación --> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </body> 
    </html> 
</div>
