<?php

use Custom\Calculators\poultry as calculator;

class CalculatorsController extends BaseController {

	/**
	 * Calculator Repository
	 *
	 * @var Calculator
	 */
	protected $calculator;

	public function __construct()
	{
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('calculators.poultry.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('calculators.poultry.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
	    
	     $calculator = New Calculator(Input::all());
	     
	     $calculator->setDailyFeed()->convertToMetric();
        
	    $info['dailyFeed'] = $calculator->feedUsage();
	    $info['feedPerMonth'] = $calculator->feedPerMonth();
	    $info['costPerDay'] = $calculator->costPerDay();
	    $info['incomePerday'] = $calculator->incomePerday()['income'];
	    $info['profitPerDay'] = $calculator->incomePerDay()['profit'];
	     
		return View::make('calculators.poultry.show',compact($info));
	}


}
