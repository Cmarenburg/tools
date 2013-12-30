@extends('layouts.scaffold')

@section('main')

<h1>Show Calculator</h1>

<p>{{ link_to_route('calculators.index', 'Return to all calculators') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Number_of_animals</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $calculator->number_of_animals }}}</td>
                    <td>{{ link_to_route('calculators.edit', 'Edit', array($calculator->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('calculators.destroy', $calculator->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
