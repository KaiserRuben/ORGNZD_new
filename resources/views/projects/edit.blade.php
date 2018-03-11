

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
    <link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">
</head>
<body>
  <div class="content">
    <form action="/project/{{ $project->id }}/update/" method="post">
      
    	@csrf

      <div class="header">
        <h1 id="edit-project-headline">Edit your project</h1>
        <a href="/project/{{ $project->id }}" class="backbuttonsvglink" id="back-btn">
          ❌
        </a>
      </div>

      <div class="line"></div>

      <input name="name" value="{{ $project->name }}" placeholder="Project name" id="desc-input" class="settings">

      <input name="duedate" value="{{ $project->duedate }}" type="date" placeholder="Date" id="desc-input" class="settings">

      <input name="type" value="{{ $project->type }}" type="text" placeholder="Type" id="desc-input" class="settings">

      <input name="location" value="{{ $project->location }}" type="text" placeholder="Location" id="desc-input" class="settings">

      <div class="footer">
        <input type="Submit" name="submit" value="Save" id="add-btn">
      </div>
    </form>
  </div>
</body>
</html>