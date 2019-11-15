<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
       
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('empleados.index')}}">Empleados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('proyectos.index')}}">Proyectos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos</a>
    </li>
  </ul>
</nav>
    <script src="proyecto/public/assets/js/popper.min.js"></script>
    <script src="proyecto/public/assets/js/jquery-3.4.1.min.js"></script>
    <script src="proyecto/public/assets/js/bootstrap.min.js"></script>
    </body>
</html>
