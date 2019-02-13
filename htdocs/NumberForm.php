<html>
<head>
  <title> Scholarship Form </title>
  <meta charset="utf-8" />
</head>

<body>
  <?php
  $DisplayForm = TRUE;
  $Number = "";
  if (isset($_POST[Submit]))
  {
    $Number = $_POST['Number'];
    if (is_numeric($Number))
    {
      //data validateInput
      $DisplayForm = FALSE;

    }
    else {
        //data eneteres is not a Number
        echo "<p> You need to enter a numeric value.<p>\n";
        $DisplayForm = TRUE;
    }
  }
  if ($DisplayForm)
  {
    ?>
      <form name = "NumberForm" action = "NumberForm.php" method = "post">
        <p>Enter a Number: <input type = "text" name = "Number" value = "<?php echo $Number; ?>" /></p>
        <p><input type = "reset" value = "Clear Form"/> &nbsp; &nbsp;
          <input type = "submit" name = "Submit" value ="Send Form" />
        </p>
      </form>
      <?php
      }
      else //data is valid - no need to redipslay thr form
      {
        echo "<p>Thank you for entering a number.<p>\n";
        echo "<p> Your Number, $Number, squared is " .($Number*$Number) .".</p>\n";
        echo "<p><a href =\"MumberForm.php\"> Try Again? </a></p>\n";
      }
      ?>
    </body>
    </html>
