<?php 

$baseQuery = array();

$baseQuery['ordenes'] = 'SELECT * FROM cliente.finales cust, Ultracli.dordenes ordenes, ultracli.dasigna asigna 
WHERE cust.nu_final = ordenes.nu_final AND ordenes.nu_secuencia = asigna.num_dorden';


$queryList = array();

$queryList['ordenes'] = 'SELECT finales.nm_cliente, dordenes.mt_dolar FROM CLIENTE.finales, Ultracli.dordenes WHERE finales.nu_final = dordenes.nu_final';

$queryList['asignadas'] = 'SELECT * FROM Ultracli.dasigna';

$queryList['ordenes_cliente'] = $baseQuery['ordenes'] . ' AND cust.nu_final=%nu_final% AND fecha_valor=%fecha%';



 ?>
