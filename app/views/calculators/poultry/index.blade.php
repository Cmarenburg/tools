@extends('layouts.scaffold')

@section('main')

<h1>Fast Farming - Poultry Calculators </h1>

<p> Hey there, here at fast farming we created a few tools to calculate the cost/day vs the profit/day. You can see how much one kG of feed costs you, how much it costs you to feed your flock per day and much more!</p>
<p> To get started just fill out the form below!</p>

{{ Form::open(
    [
        "resource" => 'CalculatorsController@show'
    ]
) }}



@stop
