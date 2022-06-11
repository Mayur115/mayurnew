<?php


class TV{
    public $model;
    public $volume;

    function volumeUp(){
        $this->volume++;
    }
    function volumeDown(){
        $This->volume --;
    }

    function __construct($m=null,$v=null){
        $this->model=$m;
        $this->volume=$v;
    }
}



abstract class BaseEmployee{
    protected $fn;
    protected $ln;

    public function __construct($f,$l){
        $this->fn=$f;
        $this->ln=$l;
    }
    public function getFullName(){
        return $this->fn." " .$this->ln;
    }
    protected abstract function getMonthlySalary();
}

class FullTimeEmployee extends BaseEmployee{
    
    protected $annualsalary;

    public function getMonthlySalary(){
        return $this->annualsalary/12;
    }
}

class ContractEmployee extends BaseEmployee{
    protected $hourlyrate;
    protected $totalhours;

    public function getMonthlySalary(){
        return $this->hourlyrate * $this->totalhours;
    }
}

$emp= new FullTimeEmployee('mayur','mane');

echo $emp->getFullName();
// echo $emp->getMonthlySalary();









