<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/principal.css")}}">
  </head>
  <body background="{{asset('p3.jpg')}}" bgcolor="#ffe4c4" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">
    <!--NavBar-->
    <section class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a href="{{url('/')}}"><img  src="{{asset("English_Pok.png")}}" alt="pokemon icon"></a>
            </div>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar">
                <input type="button" class="imagenboton" name="">
              </div>    
            </form>
            </div>
          </div><!-- /.container-fluid -->
        </nav>
      </div>

      <!--Menu desplegable lateral -->
      <section class="container-fluid">
        <div class="container">
          <div class="row">
            <ul class="ulu">
              <li class="lis"><a class="as" href="{{url('/principal')}}">Home</a></li>
              <li class="lis"><a class="as" href="{{url('/pokemonInfo')}}">Pokemon</a></li>
              <li class="lis"><a class="as" href="{{url('/pokemon')}}">Generaciones</a></li>
              <li class="lis"><a class="as" href="{{url('/tiposinicio')}}">Tipos</a></li>
            </ul>  
          </div>
        </div>
      </section>
      <!--Contenido-->
      <div class="fullcontainer">
        @yield('content') 
      </div>
      <!--<div class="panel-body text-center" style="color: black;">Chwexesclan con barba &copy; 2016</div>-->
    </section>


    <!-- JQuery Core JavaScript -->
    <script src="{{asset("js/jquery.js")}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    
  </body>
</html>
