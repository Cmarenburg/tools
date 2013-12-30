@extends('layouts.scaffold')

@section('main')

<h1>Create Calculator</h1>

{{ Form::open(array('route' => 'calculators.store')) }}
	<ul>
        <li>
            {{ Form::label('number_of_animals', 'Number_of_animals:') }}
            {{ Form::text('number_of_animals') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


