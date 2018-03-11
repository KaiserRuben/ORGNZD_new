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
    <link rel="stylesheet" href="{{ URL::asset('css/project.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/newlist.css') }}">
</head>
<body>
  <div class="content">
    <form action="/list/save/{{ $projectid }}/" method="post">
      
    	@csrf

      <div class="header">
        <input type="name" maxlength="150" name="name" placeholder="Add a list name" required>
        
        <a href="/project/{{ $projectid }}" id="back-btn">
          ❌
        </a>
      </div>

      <div class="line"></div>

      <div class="footer">
        <input type="text" name="value" placeholder="Add tasks" id="task-input">
        <input type="Submit" name="submit" value="Add" id="add-btn">
      </div>

     
    </form>
  </div>
</body>
</html>