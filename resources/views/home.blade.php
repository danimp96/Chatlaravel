@extends('layouts.master')

@section('content')
	<div class="row">
    <h1><CENTER> CHATS</CENTER></h1>
    @foreach( $chats as $key => $chat )
    <div class="col-xs-6 col-sm-4 col-md-12 text-center">

        <a href="{{ url('/chat/chat/' . $chat['idgrupo'] ) }}">
            
            <button class="btn btn-primary" type="submit">{{$chat['nombre']}}</button>
            
        </a>

    </div>
    
    @endforeach

</div>

@stop