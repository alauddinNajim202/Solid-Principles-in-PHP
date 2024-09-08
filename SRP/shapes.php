<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Responsibility principle</title>
</head>
<body>
    <h1 style="text-align: center;">Single Responsibility principle </h1>
    <hr>

    <?php

    // normal way to find shapes area
    // it doesn't follow single responsibility principle

    class Shapes{

        private $radius;
        private $length;

        public function setRadius($radius){
            $this->radius = $radius;
        }

        public function setLength($length){
            $this->length = $length;
        }


        public function Area(){
            
            echo "Area of Circle : " . pi(). pow($this->radius, 2);
            echo "<br/>";
            echo "Area of Rectangle : ". $this->length * $this->radius;
            echo "<br/>";
            echo "Area of Square : ". pow($this->radius, 2);
     
        }


        
    }


    $shape = new Shapes();
    $shape->setRadius(5);
    $shape->setLength(10);
    $shape->Area();

    ?>
    
</body>
</html>