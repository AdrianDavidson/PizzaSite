<html>
  <head>
    <title> Hello World </title>
  </head>
  <body>
    <?php
    //
    $WorldVar = "World";
    $SunVar = "sun";
    $MoonVar = "Moon";
    $WorldInfo = 92897000;
    $SunInfo = 72000000;
    $MoonInfo = 3456;
    echo "<p>Hello $WorldVar! <br />";
    echo "The $WorldVar is $WorldInfo Miles from the $SunVar. <br />";
    echo "Hello ", $SunVar, "!<br />";
    echo "The $SunVar's core temprature is approximatly $SunInfo
    degrees Fahrenheit.<br />";
    echo "Hello", $MoonVar, "!<br />";
    echo "The $MoonVar is $MoonInfo miles in diameter.<p>";
    ?>
  </body>
</html>
