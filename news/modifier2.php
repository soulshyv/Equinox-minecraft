<?

// declaration des variables

$newsnumber = $_POST["newsnumber"];
$newsmodif = stripslashes(ereg_replace("\n", "<br>", $_POST["modif_news"]));
$Fichier = './news.bdd';
$Fichier_a = fopen($Fichier,"a+");
$taille = filesize($Fichier);
$contenu = fread($Fichier_a,$taille);
$nombre = substr_count($contenu,"<!-- *********** -->");
$Newslist = explode("<!-- *********** -->",$contenu);
$bouclecompte = 0;
fclose($Fichier_a);
$Newslist[$newsnumber] = $newsmodif;

// debut de la suppression du texte actuel

$Fichier_suppr = fopen($Fichier,"w+");
fwrite($Fichier_suppr,"");
fclose($Fichier_suppr);

//fin de la suppression

$Fichier_a = fopen($Fichier,"a");

if($newsnumber>$nombre)
{
print('La news n\'a pas pu être modifié.');
}

else

{



while($bouclecompte != $nombre)

{

if ($newsnumber != $bouclecompte)
{
	
		fwrite($Fichier_a,$Newslist[$bouclecompte]."<!-- *********** -->");

		$bouclecompte++ ;
		
}
else {
	fwrite($Fichier_a,$newsmodif."<!-- *********** -->");

		$bouclecompte++ ;
}
}


fclose($Fichier_a);

print('<br>La news a été modifié en  :'.$Newslist[$newsnumber].'<br/>');
print('<br><br><div align="center"><a href="index.php">Revenir au menu principal</a></div>');
}
?>
<!-- T-News par Tulkar -->