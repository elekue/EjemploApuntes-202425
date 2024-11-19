
<html lang="es">



</head>
  <!--SIN PARTIALS-->
<!--<body>
  
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/cursos">Cursos</a></li>
                <li><a href="/cursos/create">Añadir Curso</a></li>

            </ul>
        </nav>
    </header>-->
    
  <!--CON PARTIALS-->  
  <body>
     <!-- Menú -->
    <header>
        @include('partials.menu')
    </header>
      <!-- Contenido dinámico -->
    
        @yield('content')
    
<!-- Pie de página -->
@include('partials.footer')
</body>
</html>
<!--</body>-->


   
   
    

    
