@extends('layout')

@section('content')
Passports!

@foreach($passports as $passport)
	<p>id:{{$passport->id}} ,email:{{$passport->email}}</p>
@endforeach
@stop