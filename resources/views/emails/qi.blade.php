<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Call Back request</title>
  <style>
      p {
          margin: .25em 0;
      }
  </style>
</head>
<body>
  <table>
      <tr>
          <td><p>Name</p></td>
          <td><p>:</p></td>
          <td>{{$data['name']}}</td>
      </tr>
      <tr>
          <td><p>Phone Number</p></td>
          <td><p>:</p></td>
          <td>{{$data['phone_number']}}</td>
      </tr>
      <tr>
          <td><p>Email</p></td>
          <td><p>:</p></td>
          <td>{{$data['email']}}</td>
      </tr>
      <tr>
          <td><p>Moving From</p></td>
          <td><p>:</p></td>
          <td>{{$data['moving_from']}}</td>
      </tr>
      <tr>
          <td><p>Moving To</p></td>
          <td><p>:</p></td>
          <td>{{$data['moving_to']}}</td>
      </tr>
      <tr>
          <td><p>Query</p></td>
          <td><p>:</p></td>
          <td>{{$data['query']}}</td>
      </tr>
  </table>
</body>
</html>