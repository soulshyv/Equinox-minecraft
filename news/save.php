<?
$Fichier = './news.bdd' ;
$Save = './news.save' ;

if(file_exists($Fichier))
{
copy($Fichier, $Save);
print('La sauvegarde s\'est bien passée.');
}
else
{
print('Le fichier de news n\'existe pas encore !');
}
print('<br><br><a href="index.php">Revenir au menu principal</a>');
?>
<!-- T-News par Tulkar -->