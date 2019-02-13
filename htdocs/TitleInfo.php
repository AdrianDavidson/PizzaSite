<!DOCTYPE html>
<head>
  <title> Title Information</title>
  <meta charset = "utf-8" />
</head>
<body>
  <?php
  $Books = array ("The Adventures of Huckleberry Finn",
  "Nineteen Eighty-Four",
  "Alice's Adventure in Wonderland",
  "The Cat in the Hat");

  for ($i = 0; $i < count ($Books); ++$i)
      echo "<p> The title \"{$Books[$i]}\" conatins "  .
      strlen ($Books[$i])  . " characters and "  .
      str_word_count ($Books[$i]) . " words. </p>";

      ?>
    </body>
</html>
