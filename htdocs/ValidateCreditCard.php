<!DOCTYPE html>
<head>
  <title>Validate Credit Card</title>
  <meta charset = "utf-8" />
</head>
<body>
  <h1> Validate Credit Card </h1>
  <?php
  $CreditCard = array(
    "",
    "8910-1234-5678-6543",
    "0000-9123-4567-0123");
    foreach ($CreditCard as $CardNumber)
    {
      if (empty ($CardNumber))
        echo "<p> This Credit Card Number is invalid because it contains
      an empty string.</p>";
      else
        {
          // store current iteration credit card number in $CreditCardNumber
          $CreditCardNumber = $CardNumber;
          // remove any dash characters
          $CreditCardNumber = str_replace("-", "", $CreditCardNumber);
          // remove any spaces
          $CreditCardNumber = str_replace(" ", " ", $CreditCardNumber);
          if (!is_numeric($CreditCardNumber))
          echo "<p>Credit Card Number " .
          $CreditCardNumber .
          " Is not a valid credit " .
          " Card number because it contains " .
          " a non-numeric character.</p>";
          else
            echo "<p>Credit Card Number " .
            $CreditCardNumber .
            " is a valid Credit Card Number.</p>";
        }
    }
      ?>
    </body>
</html>
