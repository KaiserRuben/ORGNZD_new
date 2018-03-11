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
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/newproject.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">
</head>
<body>
  <div class="content">
    <form action="/project/save" method="post">

    	@csrf

      <div class="header">
        <input type="name" maxlength="150" name="name" placeholder="Untitled project" required>
        <a href="/" class="backbuttonsvglink" id="back-btn">
          ❌
        </a>
      </div>

      <div class="line"></div>

      <textarea name="description" placeholder="What's the plan?" id="desc-input" required></textarea>
      
      <input type="text" name="location" placeholder="Location" required id="date-btn">
      
      <div class="footer">
        <select name="type" id="type-btn">
          <option value="Party">Party</option>
          <option value="Travel">Travel</option>
          <option value="Event">Other Event</option>
        </select>

        <input type="date" maxlength="50" name="duedate" placeholder="Duedate" required id="date-btn">

        

        <input type="Submit" name="submit" value="Add" id="add-btn">
      </div>
    </form>
  </div>
</body>
</html>
