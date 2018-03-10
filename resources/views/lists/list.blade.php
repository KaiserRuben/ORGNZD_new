@extends('app.layout')

@section('content')

<h1>{{ $project->name }}</h1>



<br>
Type: {{ $project->type }}<br>
Beschreibung: {{ $project->description }}<br>
Duedate: {{ $project->duedate }}<br>
<br>

<hr>

<br>


<a href="/project/{{ $project->id }}">Back</a> | <a href="">Edit</a> | <a href="/list/{{ $list->id }}/delete/">Delete</a>
<br>

<hr>

<br>

<h1>{{ $list->name }}</h1>

<br>

<br>

Type: {{ $list->type }}<br>
Beschreibung: {{ $list->description }}<br>
Duedate: {{ $list->duedate }}<br>
Value: {{ $list->value }}<br>





@endsection