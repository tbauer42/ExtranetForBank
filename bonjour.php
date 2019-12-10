<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter'])) // On a le nom et le prénom
{
	$i = 0;
	while($i  < $_GET['repeter'])
	{
		echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
		$i++;
	}
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>