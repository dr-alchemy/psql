<?php 

/*
	%% - Returns a percent sign
	%b - Binary number
	%c - The character according to the ASCII value
	%d - Signed decimal number (negative, zero or positive)
	%e - Scientific notation using a lowercase (e.g. 1.2e+2)
	%E - Scientific notation using a uppercase (e.g. 1.2E+2)
	%u - Unsigned decimal number (equal to or greather than zero)
	%f - Floating-point number (local settings aware)
	%F - Floating-point number (not local settings aware)
	%g - shorter of %e and %f
	%G - shorter of %E and %f
	%o - Octal number
	%s - String
*/

$queryList = array();

$queryList['ordenes'] = 'SELECT finales.nm_cliente, dordenes.mt_dolar FROM CLIENTE.finales, Ultracli.dordenes WHERE finales.nu_final = dordenes.nu_final';

$queryList['asignadas'] = 'SELECT * FROM Ultracli.dasigna';

$queryList['ordenes_cliente'] = 'SELECT Finales.nm_cliente, Dordenes.mt_dolar FROM CLIENTE.Finales, Ultracli.Dordenes WHERE Finales.nu_final = Dordenes.nu_final 
AND Finales.nu_final=%nu_final% AND fecha_valor=%fecha%';



 ?>