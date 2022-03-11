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
  <h3>You got a Inquiry :</h3>
  <table>
    @foreach ($data as $key => $value)
      @if ($value)
        <tr>
          <td><p>{{ $key }}</p></td>
          <td><p>:</p></td>
          <td><p>{{ $value }}</p></td>
        </tr>
      @endif
    @endforeach
  </table>
</body>
</html>