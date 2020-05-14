<?php
    function connexion ($sgbd, $serveur,$utilisateur,$mpServeur,$base)
    {
          try {
            $connexion = new PDO("$sgbd:host=$serveur;dbname=$base", "$utilisateur", "$mpServeur");
            echo "Connexion établie <br />";
            } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br />";
            die();}
        return $connexion;
    }
    
    	function sup($connexion, $table, $conditions)
	{
		$requete="DELETE ";

		$requete .= " FROM $table";
		
		if (!empty($conditions))
		{
			$requete .= " WHERE ";
			if(is_array($conditions))
			{
				$nb = count($conditions);
				for($i=0;$i<$nb;$i++){
					$requete .= "$conditions[$i] AND ";
				}
				$requete = substr($requete, 0, -5);
			}
			else{	$requete .= $conditions;
			}
		}
		
		$request = $connexion->prepare($requete);
		$request->execute();
		return $request;
	}
?>