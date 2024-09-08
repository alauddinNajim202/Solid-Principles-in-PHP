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


    // it follow single responsibility principle


    // circle class
    class Circle
    {

        private $radius;
        private $length;

        public function setRadius($radius)
        {
            $this->radius = $radius;
        }

        public function getArea()
        {
            return pi() . pow($this->radius, 2);
            
        }

        public function displayArea()
        {
            echo "Area of Circle : " . $this->getArea();
            echo "<br/>";
        }
    }


    // rectangle class
    class Rectangle
    {
        private $width;
        private $length;

        public function setWidth($width)
        {
            $this->width = $width;
        }

        public function setLength($length)
        {
            $this->length = $length;
        }

        public function getArea()
        {
            return $this->length * $this->width;
        }

        public function displayArea()
        {
            echo "Area of Rectangle : " . $this->getArea();
            echo "<br/>";
        }
    }


    // square class
    class Square
    {

        private $radius;

        public function setRadius($radius)
        {
            $this->radius = $radius;
        }

        public function getArea()
        {
            return pow($this->radius, 2);
            
        }

        public function displayArea()
        {
            echo "Area of Square : " . $this->getArea();
            echo "<br/>";
        }
    }

    // circle instance
    $circle = new Circle();
    $circle->setRadius(5);
    $circle->displayArea();

    // rectangle instance
    $rectangle = new Rectangle();
    $rectangle->setWidth(2);
    $rectangle->setLength(20);
    $rectangle->displayArea();

    // square instance
    $square = new Square();
    $square->setRadius(5);
    $square->displayArea();





    ?>

</body>

</html>