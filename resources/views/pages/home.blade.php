@extends('layout.base')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/home.css')}}" />
@stop

@section('content')
<main>
	<div id="big_images_container">
		<div id="big-images">
			@foreach ($big_images as $big_image)
        <div
				class="big-image"
				style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('files').'/'.$big_image->image}});"
        >
          <h2>{!! $big_image->title !!}</h2>
        </div>
      @endforeach
		</div>
		<div class="left chevron"><i class="bx bxs-chevron-left"></i></div>
		<div class="right chevron"><i class="bx bxs-chevron-right"></i></div>
		<div id="indicator">
      @foreach ($big_images as $big_image)
        <div class="indicator-dot"></div>
      @endforeach
		</div>
	</div>
	<div class="quick-inquiry" style="background-color: #fffdd0">
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
			<div id="welcome">
				<h2>Welcome to 1<sup>st</sup> Shivam Trans Movers Pvt. ltd.</h2>
				<p>{!! $about_us->welcome1 !!}</p>
				<p>{!! $about_us->welcome2 !!}</p>
			</div>
		</div>
	</div>
	<div id="about_us" class="container">
		<h3>About Us</h3>
		<div class="content">
			<div class="details" data-aos="slide-right">
				<p>{!! $about_us->p1 !!}</p><p> </p><p>{!! $about_us->p2 !!}</p
				><p>
					<a href="/about-us">Learn More</a>
				</p></div
			>
			<div class="about-image" data-aos="slide-left">
				<img src="{{asset('files/').'/'.$about_us->small_image}}" alt="About Us" />
			</div>
		</div>
	</div>
	<div id="why_choose_us" class="container">
		<h3>Why Choose Us</h3>
		<div class="rs">
			@foreach ($why_choose_us as $r)
        <div class="r" data-aos="flip-left">
					<img src="{{asset('files/').'/'.$r->image}}" alt="{{$r->title}}" />
					<h4>{{$r->title}}</h4>
					<p>{{$r->description}}</p>
				</div>
      @endforeach
		</div>
	</div>
	<div id="services">
		<h3>Our Services</h3>
		<div class="services container">
			@foreach ($top_services as $service)
				<div class="service">
					<img src="{{asset('files/'.'/'.$service->image_one)}}" alt="{{$service->title}}">
					<h4>{{$service->title}}</h4>
					<p>{{ Str::limit($service->p1, 200, $end=' . . .') }}</p>
					<div style="width: 100%"
						><a href="/services/{{$service->slug}}">View Service</a></div
					>
				</div>
			@endforeach
		</div>
		<a href="/services">View All Services</a>
	</div>
	<div id="how-it-works" class="content">
		<h3>How It Works</h3>
		<div class="how-it-works">
			@foreach ($how_it_works as $how_it_work)
				<a href="/inquiry-us" class="how-it-work">
					<img src="{{asset('files/').'/'.$how_it_work->image}}" alt="{{$how_it_work->title}}" />
					<h4>{{$how_it_work->title}}</h4>
				</a>
			@endforeach
		</div>
	</div>
	<div id="clients" class="container">
		<h3>Our Clients</h3>
		<div id="clients-scroll">
			<div class="clients">
				@foreach ($our_clients as $client)
					<img src="{{asset('files/').'/'.$client->image}}" alt="{{$client->title}}" />
				@endforeach
			</div>
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
	<div id="contact" class="container">
		<h3>Our Contact Details</h3>
		<div class="contact-details">
			<div class="contact-detail">
				<img src="{{asset('files/').'/'.$contact->address_image}}" alt="Call" />
				<p>{{$contact->address}}</p>
			</div>
			<div class="contact-detail">
				<img src="{{asset('files/'.'/'.$contact->call_image)}}" alt="Call" />
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
				<img src="{{asset('files/').'/'.$contact->email_image}}" alt="Call" />
				@if ($contact->email_one)
					<a href="mailto:{{$contact->email_one}}">{{$contact->email_one}}</a>
				@endif
				@if ($contact->email_two)
					<a href="mailto:{{$contact->email_two}}">{{$contact->email_two}}</a>
				@endif
			</div>
		</div>
	</div>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58773.36319250595!2d72.44871694186696!3d22.974698230171686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9a57ee6abcad%3A0x8ac530e1cbca6bba!2sApplewoods%20Galleria%20Mall!5e0!3m2!1sen!2sin!4v1643893425601!5m2!1sen!2sin" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<div id="branches">
		<h3>Our Branches</h3>
		<ul class="branches container">
			@foreach ($branches as $branch)
			<li><a href="/{{$branch->slug}}" class="branch"> {{$branch->title}} </a></li>
			@endforeach
		</ul>
	</div>
	<script src="{{asset('js/home.js')}}"></script>
</main>
@stop