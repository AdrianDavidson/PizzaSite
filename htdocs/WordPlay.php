<!DOCTYPE html>
<head>
  <title>Word Play</title>
  <meta charset = "utf-8" />
</head>
<body>
  <?php
  $StartingText = "mAdAm, i'M aDaM.";
  $UppercaseText = strtoupper($StartingText);
  $LowercaseText = strtolower($StartingText);
  echo "<p>$UppercaseText</p> \n";
  echo "<p>$LowercaseText</p> \n";
  echo "<p>" . ucfirst ($LowercaseText) . "</p>\n";
  echo "<p>" . ucfirst ($UppercaseText) . "</p>\n";
  $WorkingText = ucwords ($LowercaseText);
  echo "<p> $WorkingText</p>\n";
      ?>
    </body>
</html>
