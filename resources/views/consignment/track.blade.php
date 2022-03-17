<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Track Consignment</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('consignment/track.css')}}">
  @yield('css')
</head>
<body>
  <header>
    <img src="{{asset('files/logo.jpg')}}" alt="Logo">
    <h1>1st Shivam Trans Movers</h1>
  </header>
  <main>
    <h2>Track Your Consignment</h2>
    <form method="post" id="form">
      @csrf
      <input type="text" name="consignment_number" id="consignment_number" required placeholder="Enter Your Consignment Number" >
      <button type="submit">Track</button>
    </form>
    <script>
      const form = document.getElementById("form");
      const consignment_number = document.getElementById("consignment_number");

      form.addEventListener("submit", (event) => {
          event.preventDefault();
          window.location.href = `${window.location.origin}/consignments/track/${consignment_number.value}`;
      });
    </script>
    @yield('content')
  </main>
</body>
</html>