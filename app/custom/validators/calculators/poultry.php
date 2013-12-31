<?php namespace custom\validators\calculators

class poultryValidator extends Validator{
    
    protected $rules = [
            "numberOfAnimals" => "integer|required",
            "type" => "string|required",
            "feedCost" => "integer|required",
            "ammountOfFeed" => "integer|required",
            "messurementType" => "string|required"
        ];
}