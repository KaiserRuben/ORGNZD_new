@extends('app.layout')

@section('content')

<h1>EDIT LIST for {{ $project->name }}</h1>

<a href="/list/{{ $list->id }}/">Back</a>

<br>

<br>

<hr>

<br>

<form action="/list/{{ $list->id }}/update/" method="post">

	@csrf



	<input type="name" maxlength="150" value="{{ $list->name }}" name="name" placeholder="List Name">

  	<input type="type" maxlength="50" value="{{ $list->type }}" name="type" placeholder="List Type (Food, Guests)">

	<input type="textfield" maxlength="500" value="{{ $list->description }}" name="description" placeholder="Füge eine griffige Beschreibung hinzu!">

	<input type="textfield" maxlength="500" value="{{ $list->value }}" name="value" placeholder="Stichpunkte hier hinnein!">

  	<input type="date" maxlength="50" value="{{ $list->duedate }}" name="duedate" placeholder="Duedate">

  	<input type="Submit" name="submit" value="Edit List">




</form>


@endsection