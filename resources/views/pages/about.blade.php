@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/about.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg"
	>
		<h1>About Us</h1>
	</div>
	<div class="about container">
		<div class="about_content">
			<p>{!! $about_us->p1 !!}</p>
			<p>{!! $about_us->p2 !!}</p>
		</div>
		<img src="{{ asset('files').'/'.$about_us->small_image }}" alt="About Us" />
	</div>
	<div class="vm container">
		<div class="vm_content" data-aos="slide-right">
			<img src="{{asset('files').'/'.$about_us->vision_image}}" alt="Vision" />
			<h4>Our Vision</h4>
			<p>{{$about_us->our_vision}}</p>
		</div>
		<div class="vm_content" data-aos="slide-left">
			<img src="{{asset('files').'/'.$about_us->mission_image}}" alt="Mission" />
			<h4>Our Mission</h4>
			<p>{{$about_us->our_mission}}</p>
		</div>
	</div>
	<div id="our-team" class="container">
		<h3>Our Team</h3>
		<div class="team_content">
			<p>{{$about_us->our_team}}</p>
			<img src="{{asset('files').'/'.$about_us->our_team_image}}" alt="Our team" />
		</div>
	</div>
	<div id="about-data">
		<div class="about-data-c">
			<i class='bx bx-donate-heart' ></i>
			<h1>100%</h1>
			<h3>Client Retentions</h3>
		</div>
		<div class="about-data-c">
			<i class='bx bx-trophy'></i>
			<h1>{{ $about_us->satisfied_clients }}</h1>
			<h3>Satisfied Clients</h3>
		</div>
		<div class="about-data-c">
			<i class='bx bx-time-five' ></i>
			<h1>{{ $about_us->years_of_service }}</h1>
			<h3>Years of Service</h3>
		</div>
		<div class="about-data-c">
			<i class='bx bxs-user-check'></i>
			<h1>{{ $about_us->number_of_employees }}</h1>
			<h3>Employees</h3>
		</div>
	</div>
	<div class="services">
		<div class="container">
			<h3>Our range of services offering is…</h3>
			<ul>
				@foreach ($services as $service)
				  <li><a href="services/{{$service->slug}}">{{$service->title}}</a></li>
        @endforeach
			</ul>
		</div>
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