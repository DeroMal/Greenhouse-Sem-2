<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- I use the Meta statement to refresh the data from the MySql database -->
<Meta HTTP-EQUIV="Refresh" Content="3; URL=http://localhost/Greenhouse/Bulb.php">
<html>
<head>
	<title>update MySql data</title>
</head>

<body>
<?php
include('connection.php');
 $light = mysqli_query($con,'SELECT * FROM moisture ORDER BY ID DESC LIMIT 1');
                                    
    // Process record
    while($r1 = mysqli_fetch_array($light))
        {
            echo $r1['BulbState'];
        }
        // Close the connection
       mysqli_close($con);
 ?>
 </body>
 </html>