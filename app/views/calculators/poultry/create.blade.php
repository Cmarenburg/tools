@extends('layouts.scaffold')

@section('main')

<h1>Let's start!</h1>

{{ Form::open(array(
    'action' => 'CalculatorsController@show'
)) }}

    <p> {{ Form::label('type','Poultry type:')}}  
    {{Form::select('type',array(
        'broiler' => 'Broiler',
        'rusticBroiler' => 'Rustic broiler',
        'heritageLayer' => 'Heritage Layer',
        'heritageMeat' => 'Heritage meat breed',
        'layer' => "Production layer"
    ))}}</p>
    
    <p> {{ Form::label('numberOfAnimals','Number of animals:') }}
    {{ Form::text('numberOfAnimals') }} </p>
    
    <p> {{ Form::label('feedCost','Cost per bag of feed:') }}
    {{ Form::text('feedCost') }}</p>
    
    <p> {{ Form::label('amountOfFeed','Amount in one bag of feed (in pounds):') }}
    {{ Form::text('amountOfFeed') }}</p>
    
    <p>{{ Form::label('unitsPerDay','How units collected in a day:') }}
    {{ Form::text('unitsPerDay') }}</p>
    
    <p>{{ Form::label('unitsSoldFor','How much you sell one unit for:')}}
    {{ Form::text('unitsSoldFor') }} </p>
    
    {{ Form::submit('calculate') }}


@stop


