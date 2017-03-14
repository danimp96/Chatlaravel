@extends('layouts.master')

@section('content')

    <div class="col-sm-8 col-md-12 text-center">
    	<h1>Crear Nuevo Chat</h1>
    </div>
    <form method="post" action="{{url('chat/crear')}}">
    	
    	{{ csrf_field() }}
    	<div class="col-sm-8 col-md-4 text-center">
	    	
	    </div>
	    <div class="col-sm-8 col-md-4 text-center">
	    	<label for="group">Grupo</label>
    		<input type="text" class="form-control" id="group" name="group" placeholder="Nombre del grupo">
    		<br>
    		<button type="submit" class="btn btn-default col-sm-12">Crear</button>
	    </div>
    	<div class="col-sm-8 col-md-4 text-center">
	
	    </div>
    </form>

@stop