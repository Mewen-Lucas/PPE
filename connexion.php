<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Style.css"/>
</head>
<?php
    
	require("fonctionsSQL.php");
	//Connexion à la base de données
			$connexion = connexion ('mysql', '127.0.0.1','stspvmux_Mewen','mLkBS@41zCL4yi))Fr','stspvmux_Ppegroupe5');
			
	if(isset($_POST['idSuppr'])){
		$connexion = connexion ('mysql', '127.0.0.1','stspvmux_Mewen','mLkBS@41zCL4yi))Fr','stspvmux_Ppegroupe5');
		$conditions = "id_Livre = $_POST[idSuppr]";
		sup($connexion, 'Livre', $conditions);
	}

	
	$requete = "select libelle
                 from Livre";
     $curseurLivre = $connexion->prepare($requete);
     $curseurLivre->execute();
     $unLivre = $curseurLivre->fetch();
     	echo("<form action='AjoutModif.php' method='post'>");
		  echo("<button class='button button1' type='text' value='Ajouter' >Ajouter un livre</button>");
	    echo("</form>");
    echo("<table>");
        echo("<caption>Liste de livres</caption>");
        echo("<tbody>");
        
        while($unLivre){
            echo("<tr>");
                echo("<td> $unLivre[0]</td>");
                 echo("<td><form action='connexion.php' method='post'>
								<input type='hidden' value=$unLivre[0] name='idSuppr'/>
								<input class='boutonImage' type='image' value='Supprimer' src='suppr.jpg'>
								</form></td>");
            echo("</tr>");
            $unLivre = $curseurLivre->fetch();
        }
       echo("</tbody>");
    echo("</table>");
    $curseurLivre = null;
?>
