<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Closed Principle</title>
</head>

<body>

    <!-- Display product information -->
    <h1 style="text-align: center;"> Open Closed Principle followed </h1>
    <?php


    // payment information
    abstract class Payment{

        protected string $title;
        protected string $account_number;
        protected int $balance = 1000;
        protected int $last_digit = 50;


        public function __construct(string $title, string $account_number)
        {
            $this->title = $title;
            $this->account_number = $account_number;
            $this->last_digit = substr($account_number, -4);
        }


        public abstract function pay($number);
       
    }


    class creditCard extends Payment{

        private int $charges = 100;

        public function pay($number){
            if($number > $this->balance){
                echo "Insufficient balance. Remaining balance: $this->balance in account number $this->last_digit <br>";
            }
            else{
                $this->balance -= $number;
                $this->charges += $number;
                echo "Hello Mr. $this->title Payment Successful. Remaining Balance: $this->balance in account number $this->last_digit <br>";
            }
        }

    }


    class Paypal extends Payment{
        private int $charges = 50;


        public function pay($number){
            if($number > $this->balance){
                echo "Insufficient balance. Remaining balance: $this->balance in account number $this->last_digit <br>";
            }
            else{
                $this->balance -= $number;
                $this->charges += $number;
                echo "Hello Mr. $this->title Payment Successful. Remaining Balance: $this->balance in account number $this->last_digit <br>";
            }
        }
    }

    class BankAsia extends Payment{
        private int $charges = 10;


        public function pay($number){
            if($number > $this->balance){
                echo "Insufficient balance. Remaining balance: $this->balance in account number $this->last_digit <br>";
            }
            else{
                $this->balance -= $number;
                $this->charges += $number;
                echo "Hello Mr. $this->title Payment Successful. Remaining Balance: $this->balance in account number $this->last_digit <br>";
            }
        }
    }


    $credit_card = new CreditCard('Alauddin Najim', 5250);
    $credit_card->pay(5220);

    
    $pay_pal = new Paypal('Salauddin Sumon', 500);
    $pay_pal->pay(100);

    $pay_pal = new BankAsia('Alkorim Islam', 400);
    $pay_pal->pay(400);

    


    


   






    ?>


</body>

</html>