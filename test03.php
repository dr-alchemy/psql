<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php
header('Content-Type: application/json');

$dsn = "CLIENTE";
// $dsn = "ULTRACLI";
$conn_LA = odbc_connect($dsn, "", "") or die(odbc_error());

// $sql = "SELECT * FROM Finales";
$sql = "SELECT Finales.nm_cliente, Dordenes.mt_dolar FROM CLIENTE.Finales, Ultracli.Dordenes WHERE Finales.nu_final = Dordenes.nu_final";

$resultset = odbc_exec($conn_LA, $sql);


$data = array();
$i = 0;

// Grabs all the rows, saves it in $data
while( $row = odbc_fetch_array($resultset) ) {

    $data[] = $row;

} 

// free resources
odbc_free_result($resultset);

//close the connection
odbc_close($conn_LA);

$json = json_encode($data); // Generates the JSON, saves it in a variable

echo $json;
?>

