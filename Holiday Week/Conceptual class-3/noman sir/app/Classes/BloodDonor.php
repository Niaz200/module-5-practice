<?php

namespace app\Classes;


abstract class BloodDonor{
    protected $name;
    protected $bloodGroup;
    protected $age;

    public function __construct($name, $bloodGroup, $age){
        $this->name = $name;
        $this->bloodGroup = $bloodGroup;
        $this->age = $age;

    }


    abstract public function donateBlood();

    public function displayDonorInfo(){
        echo "Name: ".$this->name."\n";
        echo "Blood Group: ".$this->bloodGroup."\n";
        echo "Age: ".$this->age."\n";
    }

    public function getName(){
        return $this->name;
    }

    public function getBloodGroup(){
        return $this->bloodGroup;
    }

}