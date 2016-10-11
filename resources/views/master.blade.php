<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<section class="container-fluid">
    <div class="row">
        <div class="panel-heading">
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <a data-toggle="collapse" href="#collapse1">Pokemons</a>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
        </div>
    </div>    
</section>
<section class="container-fluid">
    <div class="row">
        <div class="panel-group">
            <div class="panel panel-default">
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
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
        </div>
    </div>    
</section>
    
        <!-- /#page-content-wrapper -->


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->

</body>

</html>
