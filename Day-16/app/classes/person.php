<?php


namespace App\classes;


class person
{
    public $firstLocation = 'Tangail';
    protected $presentLocation = 'Dhaka';
    private $thana = 'Asulia';
    public function firstLocation(){
        echo 'Tangail';
    }
    protected function presentLocation(){
        echo 'Dhaka';
    }
    private function thana(){
        echo 'Asulia';
    }
}