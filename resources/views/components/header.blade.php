<header>
	<div id="contact-header">
		<div class="contact-header container">
			<div class="left">
				<a href="tel:{{$contact->call}}"
					><i class="bx bx-phone-call"></i>Call Us 24*7 {{$contact->call}}</a
				>
				<a href="mailto:{{$contact->email}}"
					><i class="bx bxl-gmail"></i>{{$contact->email}}</a
				>
			</div>
			<div class="right">
				<a href="https://wa.me/{{$contact->whatsapp}}"
					><i class="bx bxl-whatsapp"></i
				></a>
				<a
					href="{{$contact->facebook}}"
					><i class="bx bxl-facebook-circle"></i
				></a>
				<a href="{{$contact->twitter}}"><i class='bx bxl-twitter'></i></a>
				<a href="{{$contact->linkedin}}"
					><i class="bx bxl-linkedin"></i
				></a>
				<a href="{{$contact->instagram}}"><i class='bx bxl-instagram-alt' ></i></a>
			</div>
		</div>
	</div>
	<div id="header" class="container">
        <img src="{{asset('files/logo.jpg')}}" alt="1st Shivam Trans Movers">
		<nav class="nav">
			<a href="/" class="{@if ($active == 'home') active @endif}">Home</a>
			<a href="/about-us" class="{@if ($active == 'about-us') active @endif}"
				>About Us</a
			>
			<div id="services-link">
				<a href="/services" class="{@if ($active == 'services') active @endif}"
				>Our Services
				</a>
				<div id="services-list">
					@foreach ($services as $service)
						<a href="/services/{{$service->slug}}">{{$service->title}}</a>
					@endforeach 
				</div>
			</div>
			<a href="/process" class="{@if ($active == 'process') active @endif}"
				>Process</a
			>
			<a href="/clients" class="{@if ($active == 'clients') active @endif}"
				>Clients</a
			>
			<a
				href="/contact-us"
				class="{@if ($active == 'contact-us') active @endif}"
				>Contact Us</a
			>
			<a href="/gallery" class="{@if ($active == 'gallery') active @endif}"
				>Gallery</a
			>
			<a href="/inquiry-us" class="{@if ($active == 'inquiry-us') active @endif}"
				>Inquiry Us</a
			>
			<a href="/achievements" class="{@if ($active == 'achievements') active @endif}"
				>Achievements</a
			>
			<a href="/iba-approved" class="{@if ($active == 'iba-approved') active @endif}"
				>IBA Approved</a
			>
			<a href="/blogs" class="{@if ($active == 'blogs') active @endif}"
				>Blogs</a
			>
		</nav>
		<div class="nav_toggle">
			<input type="checkbox" id="nav-toggle-checkbox" />
			<label for="nav-toggle-checkbox" class="nav-toggle-checkbox-label">
				<span></span>
			</label>
			<label for="nav-toggle-checkbox" id="mobile-header" class="nav">
				<a href="/" class="{@if ($active == 'home') active @endif}">Home</a>
				<a
					href="/about-us"
					class="{@if ($active == 'about-us') active @endif}"
					>About Us</a
				>
				<span id="services-link-2">
				<a href="/services" class="{@if ($active == 'services') active @endif}"
				>Our Services
				</a>
				<span id="services-list-2">
					@foreach ($services as $service)
							<a href="/services/{{$service->slug}}">{{$service->title}}</a>
					@endforeach
				</span>
			</span>
				<a href="/process" class="{@if ($active == 'process') active @endif}"
					>Process</a
				>
				<a href="/clients" class="{@if ($active == 'clients') active @endif}"
					>Clients</a
				>
				<a
					href="/contact-us"
					class="{@if ($active == 'contact-us') active @endif}"
					>Contact Us</a
				>
				<a href="/gallery" class="{@if ($active == 'gallery') active @endif}"
					>Gallery</a
				>
				<a href="/inquiry-us" class="{@if ($active == 'inquiry-us') active @endif}"
				>Inquiry Us</a
			>
			<a href="/achievements" class="{@if ($active == 'achievements') active @endif}"
				>Achievements</a
			>
			<a href="/iba-approved" class="{@if ($active == 'iba-approved') active @endif}"
				>IBA Approved</a
			>
			<a href="/blogs" class="{@if ($active == 'blogs') active @endif}"
				>Blogs</a
			>
			</label>
			<label for="nav-toggle-checkbox" id="backdrop"></label>
		</div>
	</div>
</header>
