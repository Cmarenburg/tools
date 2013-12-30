@extends('layouts.scaffold')

@section('main')

<h1>All Calculators</h1>

<p>{{ link_to_route('calculators.create', 'Add new calculator') }}</p>

@if ($calculators->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Number_of_animals</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($calculators as $calculator)
				<tr>
					<td>{{{ $calculator->number_of_animals }}}</td>
                    <td>{{ link_to_route('calculators.edit', 'Edit', array($calculator->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('calculators.destroy', $calculator->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no calculators
@endif

@stop
