<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View Bug Reports</title>
  </head>
  <body>
    <h1>Bug Reports</h1>

    <?php

    //Connect to database
    include "inc_dbconnect.php";

    $SQLString = "SELECT * FROM bugreports ORDER BY ReportID";

    //execute SQL query
    $QueryResult = mysqli_query($DBConnection, $SQLString );
    if ($QueryResult === FALSE)
    {
      echo "<p>There was an error when executing the query.<br />\n";

    }
    else if (mysqli_num_rows($QueryResult)==0) //check if no records in resultset
      echo "<p>There are no bugs to report.</p>\n";
    else // records returned in resultset
    {
      // create header row for display TableName
      echo "<table border='1' cellspacing='0'>\n";
      echo "<tr><th>ID</th>" .
           "<th>Product</th>" .
           "<th>Version</th>" .
           "<th>Type of Hardware</th>" .
           "<th>Operating System</th>" .
           "<th>Frequency of Occurance</th>" .
           "<th>Proposed Solutions</th>" .
           "<th>&nbsp;</th></tr>\n";

           //while there are records in the resultset
           while ($report=mysqli_fetch_assoc($QueryResult))
           {

             //output current row of resultset in a Table
             echo "<tr><td>" . $report['ReportID'] . "</td>" .
             "<td>" . $report['product'] . "</td>" .
             "<td>" . $report['version'] . "</td>" .
             "<td>" . $report['hardware'] . "</td>" .
             "<td>" . $report['os'] . "</td>" .
             "<td>" . $report['frequency'] . "</td>" .
             "<td>" . $report['solutions'] . "</td>" .
             "<td><a href=\"UpdateBugReport.php?ReportID=" .
                $report['ReportID'] . "\">Update</a></td>" .
             "</tr>\n";
             //add an update hperlink to call UpdateBugReport.php with ID

           }
           echo "</table>\n";
    }

     ?>
     <a href="EnterBugReport.php">Enter a new Bug Report</a>

  </body>
</html>
