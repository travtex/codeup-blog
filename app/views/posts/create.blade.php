@extends('layouts.master')

@section('content')

<form class="form-group" action="{{{ action('PostsController@store') }}}" method="POST">
	
	<p><label for="title">Title
		<input type="text" name="title" id="title" value="{{{ Input::old('title') }}}">
	</label></p>
	<label for="body">Body
		<p><textarea rows="5" cols="30" name="body" id="body">{{{ Input::old('body') }}}</textarea></p>
	</label>
	<button action="submit" class="btn btn-lg">Submit Post</button>

</form>

@stop