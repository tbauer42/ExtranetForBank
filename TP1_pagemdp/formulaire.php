<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <?php include("../entete.php"); ?>
    
    <div id="corps">
        <form method="post" action="secret.php">
 
<p>
    <h1> Veuillez taper ici le mot de passe pour accéder au code secret de la NASA </h1>
    <input type = "text" name= "mdp" autocomplete="off" />
    <input type="submit" name="Valider" />
</p>


        
    </div>
    
    <?php include("../footer.php"); ?>
    
    </body>
</html>