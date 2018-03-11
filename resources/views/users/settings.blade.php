<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ORGNZD.</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/newproject.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/settings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/usersettings.css') }}">
</head>
<body>
  <div class="content">
    <form action="/settings/update/" method="post">


      @csrf

      <div class="header">
        <h1 id="edit-project-headline">Account settings</h1>
        <a href="/" id="back-btn">
          ❌
        </a>
      </div>

      <div class="line"></div>

      <input name="username" value="{{ $user->name }}" placeholder="User name" id="desc-input" class="settings">
      <input name="email" value="{{ $user->email }}" placeholder="Email" id="desc-input" class="settings">

      <div class="footer">
        
        <input type="Submit" name="submit" value="Save" id="add-btn">

        <a href="/logout" class="infolink">Logout</a>
      </div>
    </form>



  </div>
</body>
</html>