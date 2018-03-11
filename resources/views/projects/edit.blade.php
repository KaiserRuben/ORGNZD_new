

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
</head>
<body>
  <div class="content">
    <form action="/project/{{ $project->id }}/update/" method="post">
      
    	@csrf

      <div class="header">
        <h1 id="edit-project-headline">Edit your project</h1>
        <a href="/project/{{ $project->id }}" id="back-btn">
          <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="400" font-family="Ionicons" letter-spacing="0.875" font-size="28">
                  <g id="Project-creation---2" transform="translate(-324.000000, -48.000000)" fill="#D2D2D2">
                      <text id="ion-plus-round---Ionicons" transform="translate(333.031223, 57.031223) rotate(45.000000) translate(-333.031223, -57.031223) ">
                          <tspan x="322.031223" y="67.5312229"></tspan>
                      </text>
                  </g>
              </g>
          </svg>
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