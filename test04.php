<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

// header('Content-Type: application/json');
require_once 'psql.php';
require_once 'query.php';

// get input variables
if(isset($_GET['nu_final'])) {
	$nu_final = $_GET['nu_final'];
}

if(isset($_GET['fecha'])) {
	$fecha = $_GET['fecha'];
}

$psql = new Psql();
$psql->setQueryList($queryList);
$psql->setQuery('ordenes', array());

// $queryParam = array('%nu_final%' => $nu_final, '%fecha%' => $fecha);

// $psql->setQuery('ordenes', $queryParam);

echo $psql->executeQuery();

echo '<hr>';

$psql->setQuery('asignadas', array());

echo $psql->executeQuery();


?>