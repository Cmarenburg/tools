<?php

class Calculator extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'number_of_animals' => 'required'
	);
}
