<?php
namespace App\classes;

class Example extends person
{
    public $firstName ='Maruf';

    public $middleName = 'Ahmed';

    public $lastName = 'Sijan';

    public function index(){

        echo $this->firstName;
    }

    public function methodOne(){

        echo $this->middleName;
    }
    public function methodTwo(){
        echo $this->lastName;
    }
    public function methodThree(){
        echo $this->firstLocation;
    }
}
