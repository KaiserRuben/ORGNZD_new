<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project.</title>
  <!-- ROBOTO -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/list.css') }}">
</head>
<body>
  <div class="content">
    <div class="header">
      <!-- BACK BTN -->
      

      <!-- PROJECT NAME -->
      <h1>{{ $project->name }}</h1>
    </div>

    <div class="list-wrapper">
      <h2 class="list-headline">{{ $list->name }}</h2>
      
      <ul>
        <div class="item">
            <a class="infolink" href="/project/{{ $project->id }}/">Zurück</a> <a class="infolink" href="/list/{{ $list->id }}/edit">Edit List</a> <a class="infolink" href="/project/{{ $list->id }}/delete">Delete List</a>
          </div>
          <div class="right">
            
          </div>
        
  @foreach ($notes as $note => $value)


        <div class="item">
          <div class="left">
            <div class="indicator"></div>
            <span> {{ $value }} </span>
          </div>
          <div class="right">
            <a href="/list/{{ $list->id }}/value/{{ $value }}/" class="box"></a>
          </div>
        </div>

  @endforeach

      </ul>
    </div>

    

    <div class="footer">
      <a href="project-settings.php" id="settings-icon">
        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-family="material" letter-spacing="0.884374976" font-size="28.2999992">
                <g id="Project-view-Copy" transform="translate(-38.000000, -597.000000)" fill="#D2D2D2">
                    <text id="settings---material">
                        <tspan x="36" y="619"></tspan>
                    </text>
                </g>
            </g>
        </svg>
      
      
    </div>
  </div>
</body>
</html>
