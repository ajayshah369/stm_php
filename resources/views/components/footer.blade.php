<footer id="footer">
	<div class="footer_container container">
		<div class="footer_content">
			<h3>About Us</h3>
			<p>{{$about_us->footer}}</p>
		</div>
		<div class="footer_content" >
			<h3>Usefull Links</h3>
			<a href="/services">Our Services</a>
			<a href="/branches">Our Branches</a>
			<a href="/contact-us">Contact Us</a>
			<a href="/about-us">Company Profile</a>
			<a href="/gallery">Gallery</a>
		</div>
			<div class="footer_content" >
			<h3>Our Services</h3>
			@foreach ($top_services as $service)
                <a href="/services/{{$service->slug}}">{{$service->title}}</a>
            @endforeach
		</div>
		<div class="footer_content">
			<h3>Contact Us</h3>
			<p>{{$contact->address}}</p>
			<a href="tel:{{$contact->phone_one}}">{{$contact->phone_one}}</a>
			<a href="tel:{{$contact->phone_two}}">{{$contact->phone_two}}</a>
			<a href="mailto:{{$contact->email_one}}">{{$contact->email_one}}</a>
		</div>
	</div>
	<div id="all_rights">
		© Copyright 2022 1st Shivam Trans Movers Pvt. Ltd. All Rights Reserved.
	</div>
    @if ($about_us->youtube_video)
        <iframe class="youtube" src="https://www.youtube.com/embed/{{$about_us->youtube_video}}?autoplay=1&playlist={{$about_us->youtube_video}}&mute=1&loop=1"></iframe>
    @endif
</footer>
