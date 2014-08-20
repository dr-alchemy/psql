<?php

$dsn = "CLIENTE";
$conn_LA = odbc_connect("CLIENTE", "", "") or die(odbc_error());

$sql = "SELECT COUNT(*) AS cuenta from Finales";

$resultset = odbc_exec($conn_LA, $sql);

odbc_fetch_row($resultset);

echo odbc_result($resultset, 'cuenta');


?>