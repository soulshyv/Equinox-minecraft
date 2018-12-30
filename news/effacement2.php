<?

// declaration des variables

$newsnumber = $_POST["newsnumber"];
$Fichier = './news.bdd';
$Fichier_a = fopen($Fichier,"a+");
$taille = filesize($Fichier);
$contenu = fread($Fichier_a,$taille);
$nombre = substr_count($contenu,"<!-- *********** -->");
$Newslist = explode("<!-- *********** -->",$contenu);
$bouclecompte = 0;
fclose($Fichier_a);

// debut de la suppression du texte actuel

$Fichier_suppr = fopen($Fichier,"w+");
fwrite($Fichier_suppr,"");
fclose($Fichier_suppr);

//fin de la suppression

$Fichier_a = fopen($Fichier,"a");

if($newsnumber>$nombre)
{
print('La news n\'a pas pu être supprimée.');
}

else

{

while($bouclecompte != $nombre)

{

	if ($bouclecompte!= $newsnumber) {


		fwrite($Fichier_a,$Newslist[$bouclecompte]."<!-- *********** -->");

		$bouclecompte++ ;
					}


		else
			 {

			$bouclecompte++ ;

			}

}

fclose($Fichier_a);

print('La news suivante a été effacé :<br><br>'.$Newslist[$newsnumber]);
print('<br><br><div align="center"><a href="index.php">Revenir au menu principal</a></div>');
}
?>
<!-- T-News par Tulkar -->