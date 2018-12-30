<?
$Fichier='./news.bdd';
print('<br><br><div align="center"><a href="index.php">Revenir au menu principal</a></div>');

if(file_exists($Fichier))
{
include($Fichier);
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier.'</i>');
}
?>
<!-- T-News par Tulkar -->
