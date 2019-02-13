<!DOCTYPE html>
<head>
  <title>Validate Credit Card</title>
  <meta charset = "utf-8" />
</head>
<body>
  <?php
    $employeeID = "R00138984";
    $firstname = "Bob";
    $lastname = "Sinclair";
    $PPSNr = "12345";
    $occupation = "The Best Singer";

    echo "<h2>Double Quotation Marks</h2>";

      $SQLString = "UPDATE employees SET
      firstname = '$firstname',
      lastname = '$lastname',
      PPSNr = '$PPSNr',
      occupation = '$occupation'
      WHERE employeeID = '".$employeeID."';";
      echo $SQLString;

    echo "<h2>Single quotation Marks</h2>";
    $SQLString = 'UPDATE employees Set
    firstname = \''.$firstname. '\',
    lastname = \''.$lastname. '\',
    PPSNr = \''.$PPSNr. '\',
    occupation = \''.$occupation. '\'
    WHERE employeeID = \''.$employeeID. '\';';
    echo $SQLString;
   ?>

    </body>
</html>
