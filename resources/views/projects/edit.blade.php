@extends('app.layout')

@section('content')

<h1>EDIT PROJECT</h1>

<a href="/project/{{ $project->id }}/">Back</a>

<br>

<br>

<hr>

<br>

<form action="/project/{{ $project->id }}/update/" method="post">

	@csrf



	<input type="name" maxlength="150" value="{{ $project->name }}" name="name" placeholder="Project Name">

  	<input type="type" maxlength="50" value="{{ $project->type }}" name="type" placeholder="Project Type (Party, Wedding, Journey)">

	<input type="textfield" maxlength="500" value="{{ $project->description }}" name="description" placeholder="Füge eine griffige Beschreibung hinzu!">

  	<input type="date" maxlength="50" value="{{ $project->duedate }}" name="duedate" placeholder="Duedate">

  	<input type="Submit" name="submit" value="Edit Project">




</form>


@endsection