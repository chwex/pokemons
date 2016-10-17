@extends('layouts.base')

@section('content')

<div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        
                        @foreach($pokemon as $p)
	                         <li class="col-sm-3 col-md-3">
								<div class="fff">
									<div class="thumbnail">
										<a href="#"><img src="{{asset('Imagenes/' . $p->id . '.svg')}}" alt=""></a>
									</div>
									<div class="caption">
										<h4>{{$p->identifier}}</h4>
									</div>
	                            </div>
	                        </li>
                        @endforeach

                    </ul>
              </div><!-- /Slide1 --> 
            
                    </ul>
              </div><!-- /Slide2 --> 
	<script type="text/javascript">
	        	// Carousel Auto-Cycle
	  $(document).ready(function() {
	    $('.carousel').carousel({
	      interval: 6000
	    })
	  });

	</script>
@stop