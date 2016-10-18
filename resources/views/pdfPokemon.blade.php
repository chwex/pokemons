<!DOCTYPE html>
<html>
<head>
	<title>Pdf Pokemon</title>
</head>
<body>

        @foreach($pdfP as $p)

            <center>

                 <div class="row">
                    <div class="col-md-4">
                             <h4 class="label label-default rank-label">{{$p->identifier}}</h4>
                                <br>
                                <div>
                                    <img src="{{asset('Imagenes/' . $p->id . '.svg')}}" alt="">
                                </div>
                                    <div class="content">
                                      
                                       <h4 class="label label-default rank-label">PESO: {{$p->height}}</h4>
                                       <h4 class="label label-default rank-label">ALTURA: {{$p->weight}}</h4>
                                    </div>                                
                    </div>
                </div>
                
            </center>

        @endforeach

</body>
</html>