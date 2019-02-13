<html>
<head>
  <title> Jungle </title>
  <link type = "text/css" rel="stylesheet" href="css/simple.css"/>
  <meta charset="utf-8" />
</head>
<body>
  <?php
  //check if form has been submitted
  if(isset ($_POST['submit']))
  {
    //if user checked grade box
    if (!empty($_POST['grade']))
    {
      //if a radio button has been selected
      if (!empty($_POST['jungle']))
      {
        if ($_POST['jungle']=="cheetah") //cheetah chosenS
        {
          echo "Congratulations you answered correctly!";
        }
        else
          {
            echo "Sorry, wrong answer buddy";
          }
        }
        else //no radio button selected
        {
          echo "Your answer will not be graded";
        }
      }

      else//user didnt submit form
      {
        echo "Please submit the form";
      }
    }
  ?>
</body>
</html>
