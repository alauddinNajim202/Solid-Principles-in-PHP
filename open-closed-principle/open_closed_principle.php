<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Closed Principle</title>
</head>

<body>

    <!-- Display product information -->
     <h1 style="text-align: center;"> Open Closed Principle  </h1>
    <?php

    // interface for shape
    interface Shape {
        public function calculateArea();
    }

    // concrete class for circle
    class Circle implements Shape {

        public $radius ;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }
    }


    // class rectangle 
    class Rectangle implements Shape {

        public $length ;
        public $width ;


        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }

        public function calculateArea() {
            return $this->length * $this->width;
        }



    }


    // triangle 
    class Triangle implements Shape {

        public $base;
        public $height;

        public function __construct($base, $height) {
            $this->base = $base;
            $this->height = $height;
        }


        public function calculateArea() {
            return 0.5 * $this->base * $this->height;
        }


    }


    class AreaCalculator {

        public function calculateTotalArea(Shape $shape) {
            return $shape->calculateArea();
        }

    }


    // create objects
    $circle = new Circle(5);
    $rectangle = new Rectangle(10, 5);
    $triangle = new Triangle(5, 8);


    // create area calculator object
    $areaCalculator = new AreaCalculator();


    // display shapes and their areas
    echo "Circle Area: ". $areaCalculator->calculateTotalArea($circle). "<br>";
    echo "Rectangle Area: ". $areaCalculator->calculateTotalArea($rectangle). "<br>";
    echo "Triangle Area: ". $areaCalculator->calculateTotalArea($triangle). "<br>";

    echo "----------------------------------------------------------------" . "<br>";
    
    // calculate total area of shapes  and display it
    $totalArea = $areaCalculator->calculateTotalArea($circle) + $areaCalculator->calculateTotalArea($rectangle) + $areaCalculator->calculateTotalArea($triangle);

    echo "Total Area: ". $totalArea;

    ?>


</body>

</html>