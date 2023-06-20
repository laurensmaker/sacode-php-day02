<?php

class Car{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return " Sa pu Mobil Warna " . $this->color . " Model " . $this->model;
    }
}

$mycar = new Car('biru', 'Supra');

echo $mycar->message();
?>