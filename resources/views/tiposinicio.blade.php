<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pokemons Digital Mosnters</title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>

<section class="container-fluid">
    <div class="row">
        <div class="panel-group "> 
            <div class="panel panel-default">
                <div id="wrapper">
        <!-- Sidebar -->
                    <div id="sidebar-wrapper">
                                <ul class="sidebar-nav">
                                <li class="sidebar-brand">
                                    <a href="#">
                                    Tipos
                                    </a>
                                </li>
                                @foreach($tipos as $t)
                                <li>
                                    <a href="#">
                                {{$t->identifier}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

</body>

</html>
