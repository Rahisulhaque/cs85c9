<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Unit 8 problem 1</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <?php
  //This is class defination

  class Ingrident
  {   
      public $name;
      public $cost;
      public function __construct($name, $cost)
      {
        $this->name = $name;
        $this->cost = $cost;
      }
      
      public function setName($newName){
        $this->name = $newName;
      }
      public function setCost($newCost){
        $this->cost = $newCost;
      }
      
      public function info (){
        return "Ingrident's Name: ".$this->name.",<br>Cost: ".$this->cost."<br>"; 
      }
  }
  
  $myIngrident = new Ingrident("Milk", 6);
  echo $myIngrident->info();
  
  echo"<br><strong>After changinf the price:</strong><br>";
  
  $myIngrident->setCost(12);
  echo $myIngrident->info();
  
  
  
  
  ?>
</body>
</html>