<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/resetMail.css') }}">
	<title>ORGNZD. Reset password</title>
</head>
<body>
	<div class="content"><br /><br />
	<b class="name">
		ORGNZD.
	</b>
	<br />
	<br />
	<br />
	<br />
	<br />
	<h1 class="description">
		Reset Password?
	</h1>
	<br />
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
	<br />
	<br />
	<br /><br />
	<br />
  <form method="POST" action="{{ route('password.email') }}">
      @csrf
	<label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
	<br />
   <input type="text" id="email" size="30" maxlength="30" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
  <br />
   @if ($errors->has('email'))
       <span class="invalid-feedback">
           <strong>{{ $errors->first('email') }}</strong>
       </span>
   @endif
	<br />
	<br />
	<div class="contact">
	<input type="Submit" class="button" type="submit" value="Send email" />
  </form>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<h4 class="noacc">
	Remember your password? <a class="signup" href="/login">Go back.</a>
	</h4>
</div>
</div>
</body>
</html>
