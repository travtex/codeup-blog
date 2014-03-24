@extends('layouts.master')

@section('content')
	<h1>Your Guess is: <?= $guess; ?></h1>
	<h1>The random roll is: <?= $roll; ?></h1>
	<h1><mark>{{{ $message }}}</mark></h1>

@stop