@extends('layouts.scaffold')

@section('main')

<h1>Results are in!</h1>
    <p> Hi there, the results are in and here they are!</p>
    
    <p> You use <strong> {{ $info['dailyFeed'] }} </strong> grams of feed per day. It costs <strong> ${{ $info['costPerDay'] }}</strong> to feed your flock</p>
    <p> Your profit(or loss) each day on your flock is <strong>${{ $info['profitPerDay'] }}</strong> and your income per day is <strong> {{ $info['incomePerDay'] }} </strong> </p>
    
    Thanks for using the Livestock cost calalcutor!
s
@stop
