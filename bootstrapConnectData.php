<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Display Records</title>
  </head>
  <body>
    <h1>Display Records From Test DB</h1>
	
	<?php
		$servername="den1.mssql7.gear.host";
		$connectioninfo=array("Database"=>"test15436","UID"=>"test15436","PWD"=>"Green.bay12");
		$conn=sqlsrv_connect($servername, $connectioninfo;
		if ($conn)
		{
			echo "Connection Successfull";
		}
		else 
		{
			echo "Failed to connect the database <br/>";
			die(print_r(sqlsrv_errors(),true));
		}
		$sql = "SELECT * FROM test
				LIMIT 3;"
		$stmt= sqlsrv_query($conn,$sql);
		if($stmt === false)
		{
			die (print_r(sqlsrv_errors(), true));
		}
		echo "
			<table class = "table">
			<tr>
			<th>fName<th>
			<th>lName<th>
			<th>address<th>
			</tr>";
			
			while ($row=sqlsrv_fetch_Array($stmt, SQLSRV_FETCH_ASSOC))
			{
				echo"<tr>";
				echo"<td>".$row['fName'].",/td>";
				echo"<td>".$row['lName'].",/td>";
				echo"<td>".$row['address'].",/td>";
				echo"</tr>"
			}
				echo"</table>";
	?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>