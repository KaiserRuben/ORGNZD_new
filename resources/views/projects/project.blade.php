@extends('app.layout')

@section('content')

<h1>{{ $project->name }}</h1>

<a href="/">Back</a> | <a href="/project/{{ $project->id }}/edit/">Edit</a> | <a href="/project/{{ $project->id }}/delete/">Delete</a>

<br>

<br>

<hr>

<br>

Type: {{ $project->type }}<br>
Beschreibung: {{ $project->description }}<br>
Duedate: {{ $project->duedate }}<br>

<br>

<hr>

<a href="/list/new/{{ $project->id }}/">Neue Liste für dieses Projekt</a>

<br>

<hr>

<br>

@foreach ($lists as $list)

    <a href="/list/{{ $list->id }}">
    <div class="list">
        <h3>{{ $list->name }}</h3>
        <h5>Beschreibung: {{ $list->description }}</h5>
        <h5>Muss erledigt werden bis: {{ $list->duedate }}</h5>

    </div>
    </a>
                
@endforeach





@endsection