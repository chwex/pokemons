<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- JQuery Core JavaScript -->
<script src="lib/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset("css/principal.css")}}">
</head>
<body>

<section class="container">
	<div class="row">
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<a href="{{url('/master')}}"><img  src="English_Pok.png" alt="pokemon icon"></a>
<!--<a class="navbar-brand" href="{{url('/master')}}">Pokemons</a>-->
  				</div>
    			<form class="navbar-form navbar-right">
    				<div class="form-group">
          				<input type="text" class="form-control" placeholder="Buscar">
          				<input type="button" class="imagenboton" name="">
        			</div>		
      			</form>
  			</div><!-- /.container-fluid -->
		</nav>
	</div>
</section>
<section class="container-fluid">
  <div class="container">
  <div class="row">
    
        <ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Pokedex</a></li>
  <li><a href="#">Tipos</a></li>
  <li><a href="#">Generaciones</a></li>
  <li><a href="#">Fuerza</a></li>
</ul>
        
  </div>
</div>
</section>

<div class="container-fluid">
	<div class="row">
		@yield('encabezado')
		@yield('contenido')
	</div>
</div>

	<div class="container-fluid">
		
		<div class="panel-body text-center" >Chwexesclan con barba &copy; 2016</div>
			
	</div>

<!--Script con metodo random para cambiar el backgroud-->
<script language="JavaScript">
/*Random Background Image-
By Website Abstraction (www.wsabstract.com)
More free JavaScripts here!
*/

var backgr1="wallpaper.jpg"
var backgr2="p3.jpg"
var backgr3="p5.jpg"

var cur=Math.round(6*Math.random())
if (cur<=1)
backgr=backgr1
else if (cur<=4)
backgr=backgr2
else
backgr=backgr3
document.write('<body background="'+backgr+'" bgcolor="#ffe4c4" text="#000000" link="#0000FF" vlink="#800080" alink="#FF0000">')
</script>

</body>
</html>