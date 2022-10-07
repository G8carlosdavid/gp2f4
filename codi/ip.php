<!DOCTYPE html>
<html>
<head>
	<title>EXECUCIÓ DE LA DIVISIÓ DE 2 OPERANDS</title>
</head>
	<body>
		<p><u>RESULTAT DE L'OPERACIÓ DIVISIÓ DEL 2 OPERANDS INTRODUITS AL FORMULARI</u></p>		
		<?php
            require_once(__DIR__ . '/vendor/autoload.php');
            if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"];
			}
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
            $sub = new IPv4\SubnetCalculator("$operand1", "$operand2");	
            $ipAddress        = $sub->getIPAddress();
            $subnetMask        = $sub->getSubnetMask();
            $broadcastAddress     = $sub->getBroadcastAddress();
            $addressRange        = $sub->getIPAddressRange();        

            echo "<p>La IP es $ipAddress</p>";	
            echo "<p>La adreça de subxarxa es $subnetMask</p>";
            echo "<p>El Broadcast es $broadcastAddress</p>";
            echo "<p>El marge és desde $addressRange[0] fins $addressRange[1]</p>";
		?>  
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>
