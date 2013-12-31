<?php namespace custom\calculators;

class poultry {

    public function __construct($params){
        $this->type = $params['type'];
        if(isset($params['perDay'])){
            $this->perDay = $params['perDay'];
        }
        $this->numberOfAniamls = $params['numberOf'];
        $this->unintsPerDay = $params['unints'];
        $this->feedCost  = $params['feedCost'];
        $this->amountOfFeed = $params['feedInOneBag'];
        $this->unitsSoldFor =  $params['unitsSoldFor'];
        
    }
    
    /**
     * Daily feed used  
     * @return $this->perDay
     **/
    
    public function setDailyFeed(){
        
        if(!isset($this->perDay)){
            switch($this->type){
                case 'broiler':
                    $this->perDay = 120;
                    break;
            
                case 'rusticBroiler':
                    $this->perDay = 200;
                    break;
                
                case 'heritageLayer':
                    $this->perDay = 220;
                    break;
            
                case 'heritageMeat':
                    $this->perDay = 250;
                    break;
                
                case 'layer':
                    $this->perDay = 175;
                    break;
            }
        }
        
        return $this->perDay;
    }
    
    public function feedPerMonth(){
        $this->perMonth = self::setDailyFeed() * 30;
        $this->perMonth =  $this->perMonth/1000;
        
        return $this->perMonth;
    }
    
    public function feedUsage(){
        $this->feed['used'] = $this->perDay() * $this->numberOfAnimals;
        
        return $this->feed['used'];
    }
    
    public function convertToMetric(){
        $this->amountOfFeed = $this->amountOfFeed / 2.2;
        
        return $this->amountOfFeed;
    }
    
    public function costPerDay(){
       $this->feed['costPerKG'] = $this->feedCost / $this->amountOfFeed;
       $this->feed['costPerG'] = $this->feed['costPerKG'] / 1000;
       
       $this->feed['costPerDay'] = $this->feed['costPerG'] * $this->perDay * $this->numberOfAnimals;
       
       return $this->feed['costPerday'];
    }
    
    public function incomePerDay(){
        $this->income['perDay'] = $this->unitsPerDay * $this->unitsSoldFor;
        
        $this->income['profit'] = $this->icome['perDay'] - Self::costPerDay();
        
        return $this->income;
    }
    
}