<?php
require_once("facade.php");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $PARRAY = $_POST;
}
else {
    $PARRAY = $_GET;
}

/*selection de l'action */
if (isset($PARRAY["action"]))
{
    $act=$PARRAY["action"];
    
    if($act=="getClients"){
                getClients();
        }else if ($act=="getProduitsParCommande"){
                getProduitsParCommande($PARRAY["id"]);	
        }else if ($act=="getClientParDepartement"){
                getClientParDepartement($PARRAY["numDepart"]);			
        }else if($act=="getClientId"){
                getClientId($PARRAY["id"]);
        }else if($act=="getDepartement"){
                getDepartement();
		}else if($act=="getProduit"){
                getProduit();
        }else if($act=="getClientsNom"){
                getClientsNom($PARRAY["nom"]);
        }else if ($act=="getCommandesParClient"){
                getCommandesParClient($PARRAY["id"]);
        }else if($act=="getTypeProd"){
                getTypeProd();
        }else if($act=="getProduitsParTypeProd"){
                getProduitsParTypeProd($PARRAY["num"]);                        
        }else if($act=="addClient"){
                addClient($PARRAY["nom"],$PARRAY["pre"],$PARRAY["rue"],$PARRAY["cp"],$PARRAY["vil"]);
        }else if ($act=="updateClient"){
                updateClient($PARRAY["id"],$PARRAY["nom"],$PARRAY["pre"],$PARRAY["rue"],$PARRAY["cp"],$PARRAY["vil"]);
        }else if ($act=="deleteClient"){
                deleteClient($PARRAY["id"]);			
        }elseif ($act=="getImageProduit") {
                getImageProduit($PARRAY["idProd"]);
        }else{
                echo("Action inconnue !");			
        }		
}
else{
        echo ("Erreur, vérifiez les paramètres de votre requête http !");
}


