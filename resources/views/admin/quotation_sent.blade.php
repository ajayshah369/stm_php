<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quotation</title>
  <link rel="stylesheet" href="{{asset('admin/css/base.css')}}">
</head>
<body>
  <div id="header">
    <div id="branding">
      <h1 id="site-name"><a href="/dashboard">Make Quotation</a></h1>
    </div>
    <div id="user-tools">
      <form action="/logout" method="post">
        @csrf
        <a href="/logout"
            onClick="event.preventDefault();
                this.closest('form').submit();">
          Log out
        </a>
      </form>
    </div>
  </div>
  <div style="width: fit-content; margin: 100px auto">
    <h1 style="color: green">Quotation sent successfully!</h1>
    <nav style="display: flex; align-items: center; justify-content: center; grid-gap: 25px; margin-top: 20px">
      <a href="/dashboard/quotation">Send New Quotation</a>
      <a href="/dashboard">Go To Dashboard</a>
    </nav>
  </div>
</body>
</html>