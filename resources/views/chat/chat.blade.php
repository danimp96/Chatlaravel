@extends('layouts.master')

@section('content')

    <div class="row">
    	<div class="col-sm-8 col-md-12 text-center">
    		<h1></h1>
   	 	</div>
   	 	<form method="post" action="">
   		 	{{ csrf_field() }}
	    	<div class="col-sm-8 col-md-2">
	    		<label for="user">Usuario</label>
    			<input type="text" class="form-control" id="user" placeholder="Usuario">
	    	</div>
	    	<div class="col-sm-8 col-md-10">
	    		<textarea class="form-control" rows="20" disabled="true">
	    			@foreach( $mensajes as $key => $mensaje )
	    				{{$mensaje['user']}} - {{$mensaje['texto']}}
	    			@endforeach
	    		</textarea>
	    		<textarea class="form-control" rows="3"></textarea>  
	    		<button type="submit" class="btn btn-default col-sm-12">Enviar</button>	
	    		<label type="text" id="" hidden="true"></label>
	    	</div>
		</form>
    </div>
@stop