<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name = "csrf-token" content = "{{csrf_token ()}}">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('javascript')

    <link rel="icon" href={{asset('favicon.ico')}}>

    <title> @yield('title') - Cosmos Constructores </title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #CE2029">
        <a class="text-white" href="{{ route('dashboard') }}">INICIO</a>
          {{ csrf_field() }}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('proyecto') }}"  >Proyectos </a>
              {{ csrf_field() }}
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('proyectos.index') }}">Crear Proyectos</a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('tipoaptos.index') }}">Crear Tipos de Aptos </a>
            </li>
             <li class="nav-item">
              <a class="nav-link text-white" href="#">Tramites </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('users.index') }}">Registrar Usuario </a>
            </li>
          </ul>
          <h3 class="text-white"><small>Hola {{ auth()->user()->name }}  </small></h3>
          <form method="POST" action="{{ route('logout') }}">
            {{ csrf_field() }}
            <button class="btn btn-block" style="background-color: #CE2029">Cerrar sesión</button>
          </form>
          <!--form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form-->
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container" id="meet">
              @yield('content')
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-gray-dark">&copy; Created By Grupo ATI</span>
      </div>
    </footer>
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>