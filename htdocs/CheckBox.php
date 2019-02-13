<html>
<head>
  <title> Pets </title>
  <link type = "text/css" rel="stylesheet" href="css/simple.css"/>
  <meta charset="utf-8" />
</head>
<body>

<?php
if (isset($_POST['display']))
{
  //if user checked display checkbox
  if (!empty($_POST['animal']))
  {
    //loop through selected animals
    if(isset($_POST['animal']))
    {
      foreach ($_POST['animal'] as $animal)
      {
        echo $animal. " Selected <br>";
      }
    }
  }
  else //do not display Connection
    echo "Do not want to show seletion. ";

}
else //user did not submit form
{
  echo "Please submit the form. ";
}
?>
</body>
</html>
