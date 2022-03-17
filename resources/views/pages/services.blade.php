@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/services.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg"
		>
		<h1>Our Services</h1>
	</div>
	<div class="services">
		<div id="services" class="container">
			@foreach ($services as $service)
			<div class="service">
				<img src="{{asset('files').'/'.$service->image_one}}" alt="{{$service->title}}" />
				<h4>{{$service->title}}</h4>
				<p>{{ Str::limit($service->p1, 200, $end=' . . .') }}</p>
				<div style="width: 100%"
					><a href="/{{$service->slug}}">View Service</a></div
				>
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