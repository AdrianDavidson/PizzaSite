<html>
<head>
  <title> Pets </title>
  <link type = "text/css" rel="stylesheet" href="css/simple.css"/>
  <meta charset="utf-8" />
</head>
<body>
  <?php
  echo "<h1>Selected Buddy</h1>";
  $id = 0;
  // data comes in via hyperlink so $_GET is populated

  if(isset ($_GET['id']))
  {
    $id = $_GET['id'];

    // display a diffrent message based on hyperlink selected
    switch ($id)
    {
      case 1:
      echo "<h2> Cow Selected. <h2>";
      break;
      case 2:
      echo "<h2> Dog Selected. <h2>";
      break;
      case 3:
      echo "<h2> Goat Selected. <h2>";
      break;
    }
  }
   ?>
 </body>
 </html>
