@extends('app.layout')

@section('content')

<h1>PROJECTS ({{ $count }})</h1>

<a href="/project/new">New Project</a>

<br>

<br>

<hr>

<br>

@foreach ($projects as $project)

    <a href="/project/{{ $project->id }}">
    <div class="project">
        <h3>{{ $project->name }}</h3>
        <h5>Beschreibung: {{ $project->description }}</h5>
        <h5>Muss erledigt werden bis: {{ $project->duedate }}</h5>

    </div>
    </a>
                
@endforeach


@endsection
