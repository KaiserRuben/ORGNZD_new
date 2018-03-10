<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/newpassword.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ORGNZD. New password</title>
</head>
<body>
	<div class="content"><br><br>
	<b class="name">
		ORGNZD.
	</b>
	<br>
	<br>
	<br>
	<br>
	<br>
	<h1 class="description">
		Create new password!
	</h1>
	<br>
	<br>
	<br>
	<br><br>
	<br>
  <form method="POST" action="{{ route('password.request') }}">
      @csrf

<input type="hidden" name="token" value="{{ $token }}">

<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
@if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
<br />

   <label for="password">New password</label>
	<br>
   <input type="password" id="password" size="30" maxlength="30" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
   <br>
   @if ($errors->has('password'))
       <span class="invalid-feedback">
           <strong>{{ $errors->first('password') }}</strong>
       </span>
   @endif
   <br>
   <label for="password-confirm">Repeat new password</label>
   <br>
   <input type="password" id="password-confirm" size="30" maxlength="40" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
	<br>
  @if ($errors->has('password_confirmation'))
      <span class="invalid-feedback">
          <strong>{{ $errors->first('password_confirmation') }}</strong>
      </span>
  @endif
	<br>
	<br>
	<div class="contact">
    <input  type="Submit" class="btn btn-primary">
        {{ __('Reset Password') }}
    </input>
	<br>
	<br>
</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
</div>
</body>
</html>
