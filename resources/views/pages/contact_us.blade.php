@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>Contact Us</h1>
	</div>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58773.36319250595!2d72.44871694186696!3d22.974698230171686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9a57ee6abcad%3A0x8ac530e1cbca6bba!2sApplewoods%20Galleria%20Mall!5e0!3m2!1sen!2sin!4v1643893425601!5m2!1sen!2sin" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<div id="contact" class="container">
		<div class="contact-details">
			<div class="contact-detail">
				<img src="{{asset('files/').'/'.$contact->address_image}}" alt="Address" />
				<p>{{$contact->address}}</p>
			</div>
			<div class="contact-detail">
				<img src="{{asset('files/').'/'.$contact->call_image}}" alt="Call" />
				@if ($contact->phone_one)
					<a href="tel:{{$contact->phone_one}}">{{$contact->phone_one}}</a>
				@endif
				@if ($contact->phone_two)
					<a href="tel:{{$contact->phone_two}}">{{$contact->phone_two}}</a>
				@endif
				@if ($contact->phone_three)
					<a href="tel:{{$contact->phone_three}}">{{$contact->phone_three}}</a>
				@endif
				@if ($contact->phone_four)
					<a href="tel:{{$contact->phone_four}}">{{$contact->phone_four}}</a>
				@endif
				@if ($contact->phone_five)
					<a href="tel:{{$contact->phone_five}}">{{$contact->phone_five}}</a>
				@endif
			</div>
			<div class="contact-detail">
				<img src="{{asset('files/').'/'.$contact->email_image}}" alt="Email" />
				@if ($contact->email_one)
					<a href="mailto:{{$contact->email_one}}">{{$contact->email_one}}</a>
				@endif
				@if ($contact->email_two)
					<a href="mailto:{{$contact->email_two}}">{{$contact->email_two}}</a>
				@endif
			</div>
		</div>
	</div>
	<div class="quick-inquiry" style="margin-bottom: 2rem">
		<div id="quick-inquiry" class="container">
			<form id="form">
				<h3>Quick Inquiry</h3>
				<div class="input">
					<label for="name-input">Name</label>
					<input type="text" placeholder="Name" id="name-input" />
				</div>
				<div class="input">
					<label for="phone-input">Phone Number</label>
					<input type="text" placeholder="Phone No." id="phone-input" />
				</div>
				<div class="input">
					<label for="email-input">Email</label>
					<input type="text" placeholder="Email" id="email-input" />
				</div>
				<div class="input">
					<label for="moving-from-input">Moving From</label>
					<input type="text" placeholder="Moving From" id="moving-from-input" />
				</div>
				<div class="input">
					<label for="moving-to-input">Moving To</label>
					<input type="text" placeholder="Moving To" id="moving-to-input" />
				</div>
				<div class="input">
					<label for="query-input">Query</label>
					<textarea type="text" placeholder="Write your query" id="query-input"></textarea>
				</div>
				<p id="error"></p>
				<button type="submit" id="quick-inquiry-button">Submit</button>
			</form>
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
	<script src="{{asset('js/contact.js')}}"></script>
</main>
@stop