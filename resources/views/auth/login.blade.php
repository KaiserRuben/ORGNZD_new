<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGNZD.</title>
    <meta charset="utf-8">
</head>
<body>
    <div class="content">

        <br><br>

            <b class="name">ORGNZD.</b>

    <br>
    <br>


    <h1 class="description">Welcome back,</h1>
    <h1 class="grey">sign in and start planning.</h1>

    <br>
    <br>

    <form  method="POST" action="{{ route('login') }}">

        @csrf

        <label for="email">Email</label>
        <br>
        <input id="email" type="email" name="email" size="30" autofocus>
        <br>
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <br>
        <br>

        <label for="password">Password</label>
        <br>
        <input id="password" type="password" size="30" name="password" required>
        <br>
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

        <br>
        <br>
        <br>

        <input type="Submit" class="button" name="submit" value="Sign In">

        <br>
        <br>
        <br>

    </form>

    <div class="contact">


        <h4 class="noacc">Don't have an account? <a class="signup" href="/register">Sign up.</a></h4>
        <a class="forgotpassword" href="{{ route('password.request') }}">Forgot password</a>

    </div>

</div>

</body>

</html>
