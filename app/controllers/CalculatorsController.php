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
		$calculators = $this->calculator->all();

		return View::make('calculators.index', compact('calculators'));
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Calculator::$rules);

		if ($validation->passes())
		{
			$this->calculator->create($input);

			return Redirect::route('calculators.index');
		}

		return Redirect::route('calculators.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$calculator = $this->calculator->findOrFail($id);

		return View::make('calculators.show', compact('calculator'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$calculator = $this->calculator->find($id);

		if (is_null($calculator))
		{
			return Redirect::route('calculators.index');
		}

		return View::make('calculators.edit', compact('calculator'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Calculator::$rules);

		if ($validation->passes())
		{
			$calculator = $this->calculator->find($id);
			$calculator->update($input);

			return Redirect::route('calculators.show', $id);
		}

		return Redirect::route('calculators.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->calculator->find($id)->delete();

		return Redirect::route('calculators.index');
	}

}
