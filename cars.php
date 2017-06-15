<?php
    /**
     * This is the car class
     */
    class Car
    {   
         public $driver; 
         public $color;
         public $year; 
         public $brand; 
         public $model;
        
        
        public function __construct($driver, $color, $year, $brand, $model)
        {
            // Assigning values to constructor
            $this->driver = $driver;
            $this->color = $color;
            $this->year = $year;
            $this->brand = $brand;
            $this->model = $model;
        }
        //getters and setters for Driver;
        public function setDriver($newDriver){
            $this->driver = $newDriver;
        }
        public function getDriver(){
            return $this->driver;
        }
        
        //getters and setters for color;
        public function setColor($newColor){
            $this->color = $newColor;
        }
        public function get(){
            return $this->color;
        }
        
        //getters and setters for year;
        public function setYar($newYear){
            $this->year = $newYear;
        }
        public function getYear(){
            return $this->year;
        }
        
        //getters and setters for brand ;
        public function setBrand($newBrand){
            $this->brand = $newBrand;
        }
        public function getBrand(){
            return $this->brand;
        }
        //getters and setters for ;
        public function setModel($newModel){
            $this->model = $newModel;
        }
        public function getModel(){
            return $this->model;
        }

    public function currentState(){
        return "<strong> Current state of the car</strong>:  <br>Driver: ".$this->driver. "<br> Color: ".$this->color. "<br> Year: ".$this->year. "<br>Brand: ".$this->brand.  "<br>Model: ".$this->model."<br>";
    }


        
        
    }
    $car1 = new car("Jeanie","Absolute red", 2007, "Toyota", "Solara");
    $car2 = new car("Bill", "Burnt Orange", 1966, "Chevrolate","Corvevette");
    $car3 = new car("Ken", "Pearl essence green", 1966, "Jaguar", "XKE");
    
    print $car1->currentState();
    print $car2->currentState();
    print $car3->currentState();
    
    
?>