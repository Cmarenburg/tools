<?php namespace custom\validators\calculators

class poultryValidator{
    
    $validation = Validator;
    
    protected $rules = [
            "numberOfAnimals" => "integer|required",
            "type" => "string|required",
            "feedCost" => "integer|required",
            "ammountOfFeed" => "integer|required",
            "messurementType" => "string|required"
        ];
        
    public function validate($input,$rules){
        $validation = Validator::make($input,$rules);
        
        if($validation->passes()){
            
        }
        
        else{
            throw new notVaildExecption($validation->messasages)
            }
        }
    }
}