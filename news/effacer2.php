<?
$Fichier = './news.bdd' ; //on regarde si le fichier existe
//on efface le contenue
$Fichier_e = fopen($Fichier,"w+"); // on ouvre le fichier
fwrite($Fichier_e,""); // on ecrit dans le fichier;
fclose($Fichier_e); // on referme le fichier;)
print('Effacement total effectué');
print('<br><br><a href="index.php">Revenir au menu principal</a>');
?>
<!-- T-News par Tulkar -->