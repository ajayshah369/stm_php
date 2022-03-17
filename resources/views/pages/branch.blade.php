@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/branch.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>{{$branch->title}}</h1>
	</div>
	{!! $branch->map !!}
	<div id="branch" class="container">
		<p style="margin-top: 1em">{{$branch->p}}</p>
	</div>
	<div id="contact" class="container">
		<h3>Our {{$branch->title}} Branch Contact Details</h3>
		<div class="contact-details">
			<div class="contact-detail">
				<img src="{{asset('files/'.'/'.$contact->address_image)}}" alt="Call" />
				<p>{{$branch->address}}</p>
			</div>
			<div class="contact-detail">
				<img src="{{asset('files/'.'/'.$contact->call_image)}}" alt="Call" />
				@if ($branch->phone_one)
					<a href="tel:{{$branch->phone_one}}">{{$branch->phone_one}}</a>
				@endif
				@if ($branch->phone_two)
					<a href="tel:{{$branch->phone_two}}">{{$branch->phone_two}}</a>
				@endif
				@if ($branch->phone_three)
					<a href="tel:{{$branch->phone_three}}">{{$branch->phone_three}}</a>
				@endif
				@if ($branch->phone_four)
					<a href="tel:{{$branch->phone_four}}">{{$branch->phone_four}}</a>
				@endif
				@if ($branch->phone_five)
					<a href="tel:{{$branch->phone_five}}">{{$branch->phone_five}}</a>
				@endif
			</div>
			<div class="contact-detail">
				<img src="{{asset('files/'.'/'.$contact->email_image)}}" alt="Call" />
				@if ($branch->email_one)
					<a href="mailto:{{$branch->email_one}}">{{$branch->email_one}}</a>
				@endif
				@if ($branch->email_two)
					<a href="mailto:{{$branch->email_two}}">{{$branch->email_two}}</a>
				@endif
			</div>
		</div>
	</div>
	<div class="services">
		<div class="container">
			<h3>We provide following services from {{$branch->title}}:</h3>
			<ul>
				@foreach ($services as $service)
				<li><a href="/services/{{$service->slug}}">{{$service->title}}</a></li>
				@endforeach
			</ul>
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