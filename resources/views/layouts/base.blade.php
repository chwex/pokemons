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
  <body>
    <!--NavBar-->
    <section class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a href="{{url('/master')}}"><img  src="English_Pok.png" alt="pokemon icon"></a>
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
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--Script con metodo random para cambiar el backgroud-->
    <script language="JavaScript">
      //Se almacena en variables backgrN las imagenes.
      var backgr1="wallpaper.jpg"
      var backgr2="p3.jpg"
      var backgr3="p5.jpg"

      /*Se hace una variable "cur" 
      que almacene el numero que arroja el 
      random despues se hacen if y else
      para colocar las imagenes*/
      var cur=Math.round(6*Math.random())
      if (cur<=1)
      backgr=backgr1
      else if (cur<=4)
      backgr=backgr2
      else
      backgr=backgr3
      //se escribe en un documeto para ponerse en el background
      document.write('<body background="'+backgr+'" bgcolor="#ffe4c4" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">')
    </script>
  </body>
</html>