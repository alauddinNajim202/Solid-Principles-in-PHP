<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Responsibility Principle</title>
</head>

<body>

    <!-- Display product information -->
     <h1 style="text-align: center;"> Single Responsibility Principle not following  </h1>
    <?php

        // define product class
        class Product
        {
            private string $name;
            private string $color;
            private float $price;


            public function __construct($name, $color, $price)
            {
                $this->name = $name;
                $this->color = $color;
                $this->price = $price;
            }

            public function get_name()
            {
                return $this->name;
            }

            public function get_price()
            {
                return $this->price;
            }

            public function product_information()
            {
                echo "Product Information" . "<br/>";
                echo "Name : " . $this->name . "<br/>";
                echo "Color : " . $this->color . "<br/>";
                echo "Price : " . $this->price . "<br/>";
                echo "----------------------------------" . "<br/>";
            }
        }

        // it doesn't follow the single responsibility of the principals`
        class Invoice{

            private Product $product;
            private int $quantity;

            public function __construct(Product $product,  $quantity){
                $this->product = $product;
                $this->quantity = $quantity;
            }


            public function get_total_price(){
                return $this->product->get_price() * $this->quantity;
            }

            public function display_calculate()  {

                echo "Total price :" . $this->get_total_price() . "<br/>";
                echo "----------------------------------" . "<br/>";
                
            }

            public function generate_invoice(){
                echo "Invoice Number: #123456" . "<br/>";
                echo "Product: ". $this->product->get_name() . "<br/>";
                echo "Quantity: ". $this->quantity . "<br/>";
                echo "Total Price: ". $this->get_total_price(). "<br/>";
                echo "----------------------------------" . "<br/>";
                echo "Thank you for your purchase!" . "<br/>";

                echo  "<br/>";
                echo  "<br/>";
            }


            public function save_to_database(){
                // Save invoice to database
                // Database connection code goes here
                echo "Invoice saved to database successfully." . "<br/>";
                echo "----------------------------------" . "<br/>";
                echo "You can check your invoice in the database." . "<br/>";


            }


        }

        $product = new Product('Laptop', 'Red', 200);
        $product->product_information();

        $invoice = new Invoice($product, 5);
        $invoice->display_calculate();
        $invoice->generate_invoice();
        $invoice->save_to_database();

    ?>


</body>

</html>