<?
$Fichier='./news.bdd';
print('<br><br><div align="center"><a href="index.php">Revenir au menu principal</a></div>');

if(file_exists($Fichier))
{
$Fichier_r = fopen($Fichier,"r+");
$taille = filesize($Fichier);
$contenu = fread($Fichier_r,$taille);
$Newslist = explode("<!-- *********** -->",$contenu);
fclose($Fichier_r);

$nombre = substr_count($contenu,"<!-- *********** -->");
$bouclecompte = 0;
if ($nombre>=10)
{
while($bouclecompte<10)
{
print($Newslist[$bouclecompte]);
$bouclecompte++;
}
}
else
{
while($bouclecompte!=$nombre)
{
print($Newslist[$bouclecompte]);
$bouclecompte++;
}
}
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier.'</i>');
}

?>
<!-- T-News par Tulkar -->