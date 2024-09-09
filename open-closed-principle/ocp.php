<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Closed Principle</title>
</head>

<body>

    <!-- Display product information -->
    <h1 style="text-align: center;"> Open Closed Principle </h1>
    <?php


    // credit card information
    class creditCardPayment
    {

        private string $title;
        private string $account_number;
        private int $balance = 1000;
        private int $service_changes = 50;


        public function __construct(string $title, string $account_number)
        {
            $this->title = $title;
            $this->account_number = $account_number;
        }


        public function pay($number)
        {


            $last_digits = substr($this->account_number, -4);
            $payment_amount = ($this->balance - $number) - $this->service_changes;

            if ($payment_amount >= 0) {
                $this->balance = $payment_amount;
                echo "Hello Mr. $this->title Payment Successful. Remaining Balance: $this->balance in account number $last_digits <br> ";
            } else {
                echo "Payment Failed. Insufficient funds";
            }
        }
    }

    // payment for all accounts
    class Payment
    {

        public string $title;
        public string $account_number;
        public string $account_type;


        public int $balance = 1000;
        public int $credit_card_service_changes = 50;
        public int $paypal_service_changes = 10;


        public function __construct(string $title, string $account_number, string $account_type)
        {
            $this->title = $title;
            $this->account_number = $account_number;
            $this->account_type = $account_type;
        }


        public function pay($number)
        {

            $last_digits = substr($this->account_number, -4);
            $payment_amount = 0;

            if ($this->account_type == 'credit_card') {
                $payment_amount = ($this->balance - $number) - $this->credit_card_service_changes;
            } elseif ($this->account_type == 'paypal') {
                $payment_amount = ($this->balance - $number) - $this->paypal_service_changes;
            } else {
                echo "Invalid Account Type";
                return;
            }


            echo "Hello Mr. $this->title Payment Successful. Remaining Balance: $payment_amount in account number $last_digits " . "<br>";
        }
    }



    $creditCard = new creditCardPayment('Alauddin najim', '2525');

    $creditCard->pay(100);

    echo "................................................................ <br>";


    $paypal = new Payment("Muhammad Raza Bangi", "123456789", "paypal");
    $paypal->pay(100);

    $creditCard = new Payment("Muhammad Raza Bangi", "987654321", "credit_card");
    $creditCard->pay(100);








    ?>


</body>

</html>