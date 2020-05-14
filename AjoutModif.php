<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Style.css" />
    <title>Gestion des emprunts</title>
</head>
<?php
    require("fonctionsSQL.php");

    echo("<table>");
    echo("<caption> Ajout d'un nouveau livre </caption>");
    echo("<thead>");

    echo("<th >id Livre</th>");
    echo("<th >Titre</th>");
    echo("<th >Qte existante</th>");
    echo("<th >Qte disponible</th>");
    echo("<th >id License du joueur</th>");
    echo("</thead>");
    echo("<tbody>");
        echo("<form action='connexion.php' method='post'>");
            echo("<tr>");
                echo("<td>");
                        echo("<input type='text' name='idLivre' />");
                echo("</td>");
                   
                echo("<td>");    
                        echo("<input type='text' name='titre' pattern = '[A-Za-z]{1,}' title='Le titre ne peut contenir que des lettres de A à Z'/>");
                echo("</td>");   
                echo("<td>");
                 echo("<input type='text' name='qteexist' />");
                 echo("</td>");
                                 echo("<td>");
                 echo("<input type='text' name='qtedispo' />");
                 echo("</td>");
                                 echo("<td>");
                 echo("<input type='text' name='idlicence' />");
                 echo("</td>");
            echo("</tr>");
            echo("<td>");               
                    echo("<input class='boutonImage' type='image' value='insérer' src='inserer.jpg'>");
            echo("</td>");
        echo("</form>"); 
        echo("<form action='connexion.php' method='post'>");
            echo("<td>");  
                echo("<input class='boutonImage' type='image' value='annuler' src='annuler.png'>");
            echo("</td>");
        echo("</form>"); 
    echo("</tbody>");
    echo("</table>");

?>