<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consignments</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('consignment/base.css')}}">
  @yield('css')
</head>
<body>
  <header>
    <img src="{{asset('files/logo.jpg')}}" alt="Logo">
    <h1>1st Shivam Trans Movers</h1>
  </header>
  <main>
    <nav>
      <a href="/consignments/home" class="@if ($active == 'home') active @endif">Consignments</a>
      <a href="/consignments/create" class="@if ($active == 'create') active @endif">Create Consignment</a>
    </nav>
    @yield('content')
  </main>
</body>
</html>