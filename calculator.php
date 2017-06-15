<!doctype HTML>
<html>
    <head>
        
        <title>Calculator</title>
    </head>
    <body>
        <h1>Assignment 8</h1>
        <?php
            class Calculator{
                public $intNum1;
                public $intNum2;
                public function __construct($intNum1, $intNum2){
                    $this->intNum1 = $intNum1;
                    $this->intNum2 = $intNum2;
                }
            
            public function add(){
            return $this->intNum1+$this->intNum2;
            }
            public function subtract(){
            return $this->intNum1-$this->intNum2;
            }
            public function multiply(){
            return $this->intNum1*$this->intNum2;
            }
            public function divide(){
            return $this->intNum1/$this->intNum2;
            }   
            
            }
        
            $myCalc = new Calculator(12, 6); 
            echo $myCalc->add(); // echo or return 18 
            echo "<br>";
            echo $myCalc->multiply(); // echo or return 72
        
        
        
        ?>
    </body>
    
    
</html>