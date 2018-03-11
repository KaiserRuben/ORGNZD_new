<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ORGNZD.</title>
  <!-- ROBOTO -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="{{ URL::asset('css/start.css') }}">
</head>
<body>
  <div class="header">
    <h1>Projects</h1>
    
    <div class="project-number-wrapper">
      <div class="circle">
        <span>{{ $count }}</span>
      </div>
    </div>

    <div class="project-number-wrapper">
      


    </div>
  </div>

  <div class="project-list">

  <div class="card" id="info-card">
        
        <br>
        <h5><a class="infolink" href="/settings/">Einstellungen</a>
        </h5>
   </div>

  @php

    $n = 1;

    @endphp

    @foreach ($projects as $project)

    @php

    if($n==1){
      $designid = '';
    }

    if($n==2){
      $designid = 'id="yellow-card"';
    }

    if($n==3){
      $designid = 'id="blue-card"';
    }

    if($n==4){
      $designid = 'id="violet-card"';
    }

    if($n==5){
      $designid = 'id="violet-card"';
    }

    @endphp

    <a href="/project/{{ $project->id }}">
      <div class="card" @php echo $designid; @endphp>
        <h1>{{ $project->name }}</h1>
        <h5 id="task-number">{{ $project->description }}</h5>
        <h5 id="remaining-days">{{ $project->duedate }}</h5>
      </div>
    </a>

    @php

    $n++;

    if($n==5){
      $n = 1;
    }

    $designid = '';

    @endphp

    @endforeach

  </div>

  <div class="footer">
    
    <div class="settings-icon">
      <svg width="27px" height="27px" viewBox="0 0 27 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
          <desc>Created with Sketch.</desc>
          <defs></defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-family="material" letter-spacing="0.96875" font-size="31">
              <g id="Project-view" transform="translate(-30.000000, -600.000000)" fill="#D2D2D2">
                  <text id="settings---material">
                      <tspan x="28" y="624"></tspan>
                  </text>
              </g>
          </g>
      </svg>
    </div>
    


    <div class="add-btn-wrapper">
      
      <a href="/project/new/">
      <div class="add-btn">
        <svg width="25px" height="24px" viewBox="0 0 25 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Project-view" transform="translate(-305.000000, -597.000000)" fill="#FFFFFF">
                    <g id="Group-2" transform="translate(305.000000, 597.000000)">
                        <rect id="Rectangle-2" transform="translate(12.200000, 12.000000) scale(-1, 1) translate(-12.200000, -12.000000) " x="11.2" y="0" width="2" height="24" rx="1"></rect>
                        <rect id="Rectangle-2-Copy" transform="translate(12.200000, 12.000000) scale(-1, 1) rotate(90.000000) translate(-12.200000, -12.000000) " x="11.2" y="0" width="2" height="24" rx="1"></rect>
                    </g>
                </g>
            </g>
        </svg>
      </div>
      </a>

    </div>
  </div>
</body>
</html>
