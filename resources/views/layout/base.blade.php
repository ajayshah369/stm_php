<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>{{$seo->title}}</title>
	<meta name="description" content="{{$seo->description}}">
	<meta name="keywords" content="{{$seo->keywords}}">
	<meta property="og:title" content="{{$seo->property_title}}" >
	<meta property="og:description" content="{{$seo->property_description}}" >
	<meta property="og:keywords" content="{{$seo->property_keywords}}" >
	<meta name="twitter:title" content="{{$seo->twitter_title}}" >
	<meta name="twitter:description" content="{{$seo->twitter_description}}" >
	<meta name="twitter:keywords" content="{{$seo->twitter_keywords}}" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}"/>
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link rel="stylesheet" href="{{asset('css/base.css')}}">
	@yield('css')
</head>
<body>
  <x-header data="{{$active}}" />
  @yield('content')
  <x-footer />
  <div id="back-to-top"><i class='bx bxs-chevron-up'></i></div>
		<div id="a"></div>
		<div id="ac">
			<a href="https://wa.me/{{$contact->whatsapp}}"><i class='bx bxl-whatsapp'></i> Whatsapp</a>
			<a href="tel:{{$contact->call}}"><i class='bx bxs-phone-call' ></i> Call</a>
			<a href="mailto:{{$contact->email}}"><i class='bx bx-envelope'></i> Email</a>
			<div id="call-back">
				<i class='bx bx-phone-call' ></i> Call Back Request
			</div>
		</div>
		<div id="call-back-req-container">
			<form id="call-back-req">
				<label>Please enter your phone number and we will call you back soon</label>
				<input id="phone-number" required type="text" placeholder="Enter your phone number" />
				<button type="submit">Submit</button>
			</form>
			<div id="cross">
				<i class='bx bx-x'></i>
			</div>
		</div>
		<script src="{{asset('js/base.js')}}"></script>
		<script>
			AOS.init({
				duration: 1000,
			});
		</script>
</body>
</html>