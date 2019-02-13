<html>
<head>
  <title> Jungle </title>
  <link type = "text/css" rel="stylesheet" href="css/simple.css"/>
  <meta charset="utf-8" />
</head>
<body>
  <?php
  function toppings() {
    if (isset($_POST['display']))
    {
      //if user checked display checkbox
      if (!empty($_POST['topping']))
      {
        //loop through selected animals
        if(isset($_POST['topping']))
        {
          foreach ($_POST['topping'] as $topping)
          {
            echo $topping. " ";
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
}

function flavour()
{
  //check if form has been submitted
  if(isset ($_POST['submit']))
  {
      //if a radio button has been selected
      if (isset($_POST["flavour"])){
        echo $_POST['flavour'];
        }

        else //no radio button selected
        {
          echo "Your answer will not be displayed";
        }

    }
}
echo "You selected: <br />"; 
flavour();
echo " flavour Ice-Cream with ";
toppings();
echo " as the topping.";
  ?>
