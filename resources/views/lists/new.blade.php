@extends('app.layout')

@section('content')

<h1>NEW LIST for {{ $projectname }}</h1>

<a href="/project/{{ $projectid }}">Back</a>

<br>

<br>

<hr>

<br>

<form action="/list/save/{{ $projectid }}" method="post">

	@csrf

	<input type="name" maxlength="150" name="name" placeholder="List Name">

  	<input type="type" maxlength="50" name="type" placeholder="List Type (Food, Guests)">

	<input type="textfield" maxlength="500" name="description" placeholder="Füge eine griffige Beschreibung hinzu!">

	<input type="textfield" maxlength="500" name="value" placeholder="Stichpunkte hier hinnein!">

  	<input type="date" maxlength="50" name="duedate" placeholder="Duedate">

  	<input type="Submit" name="submit" value="Create new List for this Project">




</form>


@endsection