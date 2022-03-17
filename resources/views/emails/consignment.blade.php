<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>You Consignment</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    h4, p {
      line-height: 1.5;
    }
    span {
      color: navy;
    }
    .box {
      color: #ffffff !important;
      font-weight: 700;
      font-size: 1em;
      padding: .25em 1em;
      border-radius: 4px;
      width: fit-content;
      margin: 0 auto;
      text-decoration: none;
      background-color: blue;;
    }
  </style>
</head>
<body>
  <h4>Your Consignment has been started by 1st Shivam Trans Movers.</h4>
  <p>Your Consignment Number is: <span>{{$data['consignment_number']}}</span></p>
  <a class="box" href="{{$data['app_url']}}/consigments/track/{{$data['consignment_number']}}">Track Your Consignment</a>
  <p>Or <a href="http://127.0.0.1/consignments/track">Click Here</a> and enter the Consignment Number</p>
</body>
</html>