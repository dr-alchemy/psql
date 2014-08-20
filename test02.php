<?php

$dsn = "ULTRACLI";
$conn_LA = odbc_connect($dsn, "", "") or die(odbc_error());

$sql = "SELECT * FROM Dasigna";

$resultset = odbc_exec($conn_LA, $sql);

$row = '<table border="1">';


while(odbc_fetch_row($resultset)) { 

	$row += '<tr>';
	$row += '<td>' + odbc_result($resultset, 'nu_orden') + '</td>';
	$row += '<td>' + odbc_result($resultset, 'mt_nominal') + '</td>';
	$row += '</tr>';

}

	$row += '</table>';
	echo $row;

//close the connection
odbc_close($conn_LA);

?>