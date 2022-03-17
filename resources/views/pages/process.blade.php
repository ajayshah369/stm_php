@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/process.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>Our Process</h1>
	</div>
	<div id="process" class="container">
		<h3
			>The process of packing and moving of goods for various services undergoes
			various steps. The steps can be defined as follows...</h3
		>
		<div class="processes">
			@foreach ($process as $pr)
			<div class="process">
				<div class="img">
					<img src="{{asset('files/').'/'.$pr->image}}" alt="{{$pr->title}}" />
				</div>
				<div class="content">
					<h4>{{$pr->title}}</h4>
					<p>{{$pr->p}}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div id="branches">
		<h3>Our Branches</h3>
		<ul class="branches container">
			@foreach ($branches as $branch)
			<li><a href="/{{$branch->slug}}" class="branch"> {{$branch->title}} </a></li>
			@endforeach
		</ul>
	</div>
</main>
@stop