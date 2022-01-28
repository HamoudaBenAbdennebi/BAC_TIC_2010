<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
    if( isset($_GET['date']) and isset($_GET['numero']) and isset($_GET['libelle']) and isset($_GET['montant']) ){
        $date = $_GET['date'];
        $numero = $_GET['numero'];
        $libelle = $_GET['libelle'];
        $montant = $_GET['montant'];
    }
    else{
        $date = "";
        $numero = "";
        $libelle = "";
        $montant = "";
    }
    $idc = mysql_connect("localhost","root","");
    $c = mysql_select_db('bdhamouda');

    $find = "select * from compte where NumCompte = '$numero'";
    $resultatfind = mysql_query($find);
    if(mysql_num_rows($resultatfind) == 1){
        $enreg=mysql_fetch_array($resultatfind);
        $solde = $enreg["Solde"];
        if(floatval($solde)>=floatval($montant)){
            $req = "insert into transactiopn (NumCompte,DateTrans,LibelleTrans,MontTrans) VALUES ('$numero','$date','$libelle','$montant')";
            $resultat = mysql_query($req);
            if($resultat == 1)
                echo('ajouter avec succsess');
            
            else
                echo('une erreur est intervenue');
        }
    }

    
    
?>
</body>
</html>