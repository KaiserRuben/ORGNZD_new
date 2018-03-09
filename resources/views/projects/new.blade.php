@extends('app.layout')

@section('content')

<h1>NEW PROJECT</h1>

<a href="/">Back</a>

<br>

<br>

<hr>

<br>

<form action="/project/save/" method="post">

	@csrf

	<input type="name" maxlength="150" name="name" placeholder="Project Name">

  	<input type="type" maxlength="50" name="type" placeholder="Project Type (Party, Wedding, Journey)">

	<input type="textfield" maxlength="500" name="description" placeholder="Füge eine griffige Beschreibung hinzu!">

  	<input type="date" maxlength="50" name="duedate" placeholder="Duedate">

  	<input type="Submit" name="submit" value="Create new Project">




</form>


@endsection
