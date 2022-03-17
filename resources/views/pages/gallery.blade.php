@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/gallery.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>Gallery</h1>
	</div>
	<div id="gallery" class="container">
		@foreach ($gallery as $gall)
			@if ($gall->t == 'image')
				<div class="gallery">
					<img src="{{asset('files/').'/'.$gall->media}}" alt="{{$gall->title}}" />
				</div>
			@else
				<div class="gallery">
					<video autoPlay="autoplay" muted loop controls>
						<source src={{asset('files/').'/'.$gall->media}} />
					</video>
				</div>
			@endif
    @endforeach
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