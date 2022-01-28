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
        if( isset($_GET['num'] ) and isset($_GET['pass'] ) ){
            $num = $_GET['num'];
            $pass = $_GET['pass'];
        }
        else{
            $num = "";
            $pass = "";
        }
        $idc = mysql_connect("localhost","root","");
        $c = mysql_select_db('bdhamouda');
        $req = "select * from compte where NumCompte = '$num' and MotPasse = '$pass'";
        $resultat = mysql_query($req);
        
            if(mysql_num_rows($resultat) == 1){
                $enreg=mysql_fetch_array($resultat);
                echo($enreg['NumCompte']);
                echo('<br>');
                echo($enreg['MotPasse']);
                echo('<br>');
                echo($enreg['NomPrenom']);
                echo('<br>');
                echo($enreg['Solde']);
            }
            else
                echo('Contacter votre banque pour verifier les parametres de votre identification');
    ?>
</body>
</html>