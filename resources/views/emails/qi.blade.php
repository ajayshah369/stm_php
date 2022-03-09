<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Call Back request</title>
</head>

<style>
  form {
    padding: 2em;
    display: flex;
    flex-direction: column;
    grid-gap: 1em;
    max-width: 500px;
    background-color: #ca1f26;
}

form h3 {
    color: #fff;
    font-size: 2em;
}

form .input label {
    display: block;
    font-size: 0.75em;
    font-weight: 600;
    line-height: 1.5;
    color: #fff;
}

form .input label span {
    color: #fe0000;
}

form .input input,
form .input textarea {
    display: block;
    width: 100%;
    outline: none;
    padding: 0.5em;
    font-size: 1em;
    font-weight: 500;
    color: #fff;
    background-color: transparent;
    border-radius: 4px;
    border: 1px solid #ffc107;
}

form .input input::placeholder,
form .input textarea::placeholder {
    color: rgb(229, 211, 231);
}

form .input input:focus,
form .input textarea:focus {
    outline: none;
}

form button {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 3em;
    font-size: 1em;
    font-weight: 600;
    color: #ca1f26;
    background-color: #fff;
    cursor: pointer;
    border: none;
    max-width: 250px;
    transition: all 0.3s;
    border-radius: 1.5em;
}

form button i {
    font-size: 2em;
    font-weight: 600;
}
</style>
<body>
  <form id="form" onSubmit="event.preventDefault();">
				<h3>Quick Inquiry</h3>
				<div class="input">
					<label for="name-input">Name</label>
					<input type="text" value="{{$data['name']}}" placeholder="Name" id="name-input" />
				</div>
				<div class="input">
					<label for="phone-input">Phone Number</label>
					<input type="text" value="{{$data['phone_number']}}" placeholder="Phone No." id="phone-input" />
				</div>
				<div class="input">
					<label for="email-input">Email</label>
					<input type="text" value="{{$data['email']}}" placeholder="Email" id="email-input" />
				</div>
				<div class="input">
					<label for="moving-from-input">Moving From</label>
					<input type="text" value="{{$data['moving_from']}}" placeholder="Moving From" id="moving-from-input" />
				</div>
				<div class="input">
					<label for="moving-to-input">Moving To</label>
					<input type="text" value="{{$data['moving_to']}}" placeholder="Moving To" id="moving-to-input" />
				</div>
				<div class="input">
					<label for="query-input">Query</label>
					<textarea type="text" placeholder="Write your query" id="query-input">{{$data['query']}}</textarea>
				</div>
			</form>
</body>
</html>