

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ ( '') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                       <li class="nav-item">
                                <a class="nav-link" href="/inicio">{{ __('Inicio') }}</a>
                         </li>
                         <li class="nav-item">
                                <a class="nav-link" href="/guiaaudiovisual">{{ __('Guía Audiovisual') }}</a>
                         </li>
                         <li class="nav-item">
                                <a class="nav-link" href="/locaciones">{{ __('Locaciones') }}</a>
                         </li>
                          <li class="nav-item">
                                <a class="nav-link" href="/permisos">{{ __('Permisos') }}</a>
                         </li>
                          <li class="nav-item">
                                <a class="nav-link" href="/nosotros">{{ __('Nosotros') }}</a>
                         </li>
                          

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                     <a class="dropdown-item" href="/home">{{ __('Panel de Administración') }}</a>
                                     <a class="dropdown-item" href="/locaciones/create">{{ __('Registrar Locación') }}</a>
                                     <a class="dropdown-item" href="/perfilprofesional/create">{{ __('Registrar Profesional') }}</a>
                                     <a class="dropdown-item" href="/perfilproductora/create">{{ __('Registrar Productora') }}</a>
                                    <a class="dropdown-item" href={{ route('misperfiles') }}>{{ __('Mis Perfiles') }}</a>



                                </div>
                            </li>




                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

