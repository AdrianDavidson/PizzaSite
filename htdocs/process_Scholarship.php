<html>
<head>
  <title> Scholarship Form </title>
  <meta charset="utf-8" />
</head>

<body>
  <?php
  function displayRequired($fieldName)
  {
    echo "The field \"$fieldName\"is required.<br />\n";
  }
  function validateInput($data, $fieldName)
  {
    global $errorCount;
    if (empty ($data))
    {
      displayRequired($fieldName);
      ++$errorCount;
      $retval = "";
    }
    else
      {
        // omly clean up the input if it isnt Empty
        $retval = trim($data);
        $retval = htmlspecialchars($retval, ENT_QUOTES);
      }
      return($retval);
  }
  function redisplayForm($firstName, $lastName)
  {
    ?> <!--advanced escape from html
      sticky form definition-->
      <h2 style = "text-align:center"scholarship Form </h2>
        <form name = "scholarship" action = "process_Scholarship.php" method ="post">
          <p> First Name: <input type ="text" name="fName"/></p>
          <p> Last Name: <input type ="text" name="lName"/></p>
          <p><input type="reset" value= "Clear Form" /> &nbsp; &nbsp;
            <input type="Submit" name="Submit" value="Send Form" />
        </form>
<?php
  }

  $errorCount = 0;
  $firstName = validateInput($_POST['fName'], "First name");
  $lastName = validateInput($_POST['lName'], "Last name");

  if($errorCount > 0)
  {
      echo "Please re-enter the information below />\n";
      redisplayForm($firstName, $lastName);
    }
  else {
    echo "Thank you for filling out the scholarship form,
    ".$firstName. " ".$lastName . ".";
  }
?>
</body>
</html>
