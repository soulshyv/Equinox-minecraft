<?
$Fichier = './news.bdd' ;
$Save = './news.save' ;

if(file_exists($Save))
{
copy($Save,$Fichier);
print('La restoration s\'est bien passée.');
print('<br><br><a href="index.php">Revenir au menu principal</a>');
}
else
{
print('Le fichier de sauvegarde n\'existe pas encore !');
}
?>
<!-- T-News par Tulkar -->