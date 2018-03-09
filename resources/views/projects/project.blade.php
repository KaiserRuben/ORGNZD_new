@extends('app.layout')

@section('content')

<h1>{{ $project->name }}</h1>

<a href="/">Back</a>

<br>

<br>

<hr>

<br>

Type: {{ $project->type }}<br>
Beschreibung: {{ $project->description }}<br>
Duedate: {{ $project->duedate }}<br>





@endsection