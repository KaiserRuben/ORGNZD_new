<!DOCTYPE html>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/signup.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ORGNZD. Sign up</title>
	<meta charset="utf-8">

</head>

<body>

	<div class="content">

		<br>
		<br>

		<b class="name">ORGNZD.</b>

		<br>
		<br>

		<h1 class="description">Sign Up!</h1>
		<h1 class="grey">Make Your Life ORGNZD.</h1>

		<br>
		<br>
		<br>
		<br>

		<form method="POST" action="{{ route('register') }}">

			@csrf

			<label for="name">Name</label>
			<br>
   			<input type="text" id="name" name="name" value="{{ old('name') }}" size="30" maxlength="30" required autofocus>
   			<br>
   			@if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
   			<br>

   			<label for="email">Email</label>
   			<br>
   			<input type="email" id="email" name="email" value="{{ old('email') }}" size="30" maxlength="100" required>
   			<br>
   			@if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
   			<br>

   			<label for="password">Password</label>
			<br>
   			<input type="password" name="password" id="password" size="30" maxlength="100" required>
   			<br>
   			@if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
   			<br>

   			<label for="password-confirm">Confirm Password</label>
   			<br>
   			<input type="password" name="password_confirmation" id="password-confirm" size="30" maxlength="100" required>
			<br>

			<br>

			<br>

			<input class="button" type="Submit" class="button" name="submit" value="Register">

		</form>

		<div class="contact">

			<br>
			<br>
			<br>


			<h4 class="noacc">Already have an account? <a class="signup" href="/login">Sign in.</a></h4>

		</div>

	</div>

</body>

</html>
