@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/clients.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>Our Clients</h1>
	</div>
	<div id="clients" class="container">
		@foreach ($clients as $client)
		<div class="client">
			<img src="{{ asset('files'.'/'.$client->image) }}" alt="{{$client->title}}" />
			<h4>{{$client->title}}</h4>
		</div>
		@endforeach
	</div>
	<div id="branches">
		<h3>Our Branches</h3>
		<ul class="branches container">
			@foreach ($branches as $branch)
			<li><a href="/branches/{{$branch->slug}}" class="branch"> {{$branch->title}} </a></li>
			@endforeach
		</ul>
	</div>
</main>
@stop
