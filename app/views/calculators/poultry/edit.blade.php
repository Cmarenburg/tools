@extends('layouts.scaffold')

@section('main')

<h1>Edit Calculator</h1>
{{ Form::model($calculator, array('method' => 'PATCH', 'route' => array('calculators.update', $calculator->id))) }}
	<ul>
        <li>
            {{ Form::label('number_of_animals', 'Number_of_animals:') }}
            {{ Form::text('number_of_animals') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('calculators.show', 'Cancel', $calculator->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
