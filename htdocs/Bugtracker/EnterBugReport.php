<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enter a new Bug Report</title>
  </head>
  <body>

    <h1>Bug Report Entry</h1>

    <?php

$ShowForm = FALSE;

//Create an array of coloumn names in db table

$fields = array('product', 'version','hardware','os','frequency','solutions');
$report = array();

foreach ($fields as $field)
$report[$field] = "";

if (isset($_POST['submit']))
{
  foreach ($fields as $field)
  {
    if((!isset($_POST[$field])) || (strlen(trim(($_POST[$field])))==0))
    {
      echo "<p> '$field' is a required field.</p>\n";
      $ShowForm =TRUE;
    }
    else
    {
    $report[$field] = trim($_POST[$field]);

    }
  }
  if ($ShowForm==FALSE)
  {

    include "inc_dbconnect.php";

    $product = mysqli_real_escape_string($DBConnection, $report['product']);
    $version = mysqli_real_escape_string($DBConnection, $report['version']);
    $hardware = mysqli_real_escape_string($DBConnection, $report['hardware']);
    $os = mysqli_real_escape_string($DBConnection, $report['os']);
    $frequency = mysqli_real_escape_string($DBConnection, $report['frequency']);
    $solutions = mysqli_real_escape_string($DBConnection, $report['solutions']);

    $SQLString = "INSERT INTO bugreports (product, version, hardware, os, frequency, solutions)
                  VALUES ('$product', '$version', '$version', '$hardware', '$os', '$frequency', '$solutions')";

      echo "DEBUG PRINT: SQL INSERT String: $SQLString \n";

      $QueryResult = mysqli_query($DBConnection, $SQLString);

      if ($QueryResult === FALSE)

      echo "<p>There was an error saving the record.<br />\n" .
              "The error was " .
              (mysqli_error($DBConnection)) .
              ".<br />\nThe query was '" .
              ($SQLString) ."'</p>\n";

      else
      {
        echo "<p>The bug report was saved.</p>\n";
      }

   }
  }

else
{
$ShowForm=TRUE;
}

if($ShowForm===TRUE)
{

?>

<form action='EnterBugReport.php' method='post'>
<table>

  <tr><td align='right'>Product</td><td align='left'>
<input type='text' size ='80' name='product' value='<?php echo $report['product']; ?>'>
</td></tr>

<tr><td align='right'>Version</td><td align='left'>
<input type='text' size ='80' name='version' value='<?php echo $report['version']; ?>'>
</td></tr>

<tr><td align='right'>Type of Hardware</td><td align='left'>
<input type='text' size ='80' name='hardware' value='<?php echo $report['hardware']; ?>'>
</td></tr>

<tr><td align='right'>Operating System</td><td align='left'>
<input type='text' size ='80' name='os' value='<?php echo $report['os']; ?>'>
</td></tr>

<tr><td align='right'>Frequency of Occurance</td><td align='left'>
<input type='text' size ='80' name='frequency' value='<?php echo $report['frequency']; ?>'>
</td></tr>

<tr><td align='center' colspan = '2'>Please either enter both the count and period, as in 20 times a month,
or a descriptive term, like 'often,'rarely', or 'always'.</td></tr>

<tr><td align='right'>Proposed Solutions</td><td align='left'>
<textarea name="solutions" rows="6" cols="80"><?php echo $report['solutions']; ?></textarea>
</td></tr>

<tr><td align='center' colspan='2'>
<input type="reset" name="reset" value="Clear Form" /> &nbsp;
<input type="submit" name="submit" value="Save Report" />
</td></tr>

</table>

</form>



<?php
}
?>

  <a href="ViewBugReports.php">View Bug Reports</a>
  </body>
</html>
