<?php

class CalculatorsController extends BaseController {

	/**
	 * Calculator Repository
	 *
	 * @var Calculator
	 */
	protected $calculator;

	public function __construct(Calculator $calculator)
	{
		$this->calculator = $calculator;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('calculators.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('calculators.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
        
		return View::make('calculators.show');
	}


}
