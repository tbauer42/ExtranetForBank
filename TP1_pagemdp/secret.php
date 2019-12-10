<p>
	<?php 
	if ((isset($_POST['mdp'])) AND ($_POST['mdp'] == 'kangourou'))
		echo 'Bien joué tu as trouvé le code secret de la NASA qui est le suivant: guy';
	else
	{
		echo 'error</br>' ;
		echo 'clique ici pour réessayer petit faucheton  ';
		echo '<a href="formulaire.php">Clique</a>';
	}
	?>
</p>