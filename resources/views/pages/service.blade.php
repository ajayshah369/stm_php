@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/service.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>{{$service->title}}</h1>
	</div>
	<div id="service" class="container">
		<h3>{{$service->title}}</h3>
		<div class="videos">
			@if ($service->media_one)
				<video autoPlay="autoplay" muted loop controls>
					<source src="{{asset('files/'.'/'.$service->media_one)}}" />
				</video>
			@endif
			@if ($service->media_two)
				<video autoPlay="autoplay" muted loop controls>
					<source src="{{asset('files/'.'/'.$service->media_two)}}" />
				</video>
			@endif
		</div>
		<div class="content">
			<p>{{$service->p1}}</p>
			<p>{{$service->p2}}</p>
		</div>
		<div class="images">
			<div class="img">
				<img src="{{asset('files/').'/'.$service->image_one}}" alt="{{$service->title}}" />
			</div>
			<div class="img">
				<img src="{{asset('files/').'/'.$service->image_two}}" alt="{{$service->title}}" />
			</div>
		</div>
	</div>
	<script>
		document.querySelectorAll('video').forEach(video => {
			video.playbackRate = 1.5
		})
	</script>
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