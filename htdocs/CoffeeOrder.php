		<!-- Adrian Davidson
				 R00138984 -->
<!-- +++++++++++++++++++++ -->
<!DOCTYPE html>
<head>
	<title>Coffee Receipt</title>
	<meta charset="utf-8" />
</head>
<body>
<h2> Coffee Receipt</h2>

<?php

$firstName = validateInput($_POST['name'], "Name");

function displayRequired($fieldName)
{
	echo "The field \"$fieldName\"is required.<br />\n";
}
function validateInput($data, $fieldName)
{
		if (empty ($data))
	{
		displayRequired($fieldName);
	}
	else
		{
			echo $_POST['name'];
		}
}

function extras() {
	if (isset($_POST['Submit']))
	{
		//if user checked display checkbox
		if (!empty($_POST['extras']))
		{
			if(isset($_POST['extras']))
			{
				foreach ($_POST['extras'] as $topping)
				{
					echo $topping. " ";
				}
			}
		}
		else
			echo " with nothing ";
	}
	else
	{
		echo "Please submit the form. ";
	}
}
function coffeeSize()
{
//check if form has been submitted
if(isset ($_POST['Submit']))
{
		//if a radio button has been selected
		if (isset($_POST['size'])){
			echo $_POST['size'];
			}
			else
			{
				echo "Your answer will not be displayed";
			}
	}
}

function StudentDisc()
{
//check if form has been submitted
if(isset ($_POST['Submit']))
{
		//if a radio button has been selected
		if (isset($_POST['student'])){
			echo $_POST['student'];
			}

			else //no radio button selected
			{
				echo " are you a student? if so, Check that box for 10% off!";
			}

	}
}
echo "<br />", "You selected: ", "<br />";
coffeeSize();
echo "Size coffee ", "<br />";
extras();
echo "as the Extra.", "<br />";

echo "Student discount?";
StudentDisc();
?>
<p><a href="CoffeeOrder.html">Click to order another coffee.</a></p>
</body>
</html>
