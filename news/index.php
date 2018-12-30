<link href="styles.css" rel="stylesheet" type="text/css">
<br>
<br>
<br>
<table width="100%" border="0">
  <tr> 
    <td width="20%"><table width="150" border="1">
        <tr> 
          <td> <h1 align="center"><strong>Menu</strong></h1></td>
        </tr>
        <tr> 
          <td><p align="center"><a href="formupost.php" class="menu">Poster une 
              news</a></p></td>
        </tr>
        <tr> 
          <td><div align="center"><a href="voire.php" class="menu">Voir les news</a></div></td>
        </tr>
        <tr> 
          <td> <div align="center"><a href="voirelast.php" class="menu">Voir les 
              10 <br>
              dernieres news </a></div></td>
        </tr>
        <tr> 
          <td><div align="center"><a href="effacement_modif.php" class="menu">Effacer 
              ou modifier<br>
              une news</a></div></td>
        </tr>
        <tr> 
          <td><div align="center"><a href="effacer.php" class="menu">Effacer toutes 
              les news</a></div></td>
        </tr>
        <tr> 
          <td> <p align="center"><a href="save.php" class="menu">Sauvegarder les 
              news</a></p></td>
        </tr>
        <tr> 
          <td><div align="center"><a href="restaurer.php" class="menu">Restaurer 
              les news &agrave; partir de la sauvegarde</a></div></td>
        </tr>
        <tr> 
          <td><div align="center"><a href="voiresave.php" class="menu">Consulter 
              le fichier de sauvegarde</a></div></td>
        </tr>
      </table></td>
    <td width="5%" valign="top">&nbsp;</td>
    <td width="74%" valign="top"><p>&nbsp;</p>
      <p>Il y a actuellement : </p>
      <table width="100%" border="0">
        <tr>
          <td>
            <?
$Fichier = './news.bdd' ;
if(file_exists($Fichier))
{
$Fichier_r = fopen($Fichier,"r");
$taille = filesize($Fichier);
$contenu = fread($Fichier_r,$taille);
fclose($Fichier_r);
$nombre = substr_count($contenu,"<!-- *********** -->");
print('<b>'.$nombre.' news </b> dans '.'<i>'.$Fichier.'</i>');
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier.'</i>');
}
?>
          </td>
        </tr>
        <tr>
          <td>
            <?

$Fichier2 = './news.save' ;
if(file_exists($Fichier2))
{
$Fichier_r2 = fopen($Fichier2,"r");
$taille2 = filesize($Fichier2);
$contenu2 = fread($Fichier_r2,$taille2);
fclose($Fichier_r2);
$nombre2 = substr_count($contenu2,"<!-- *********** -->");
print('<b>'.$nombre2.' news </b> dans '.'<i>'.$Fichier2.'</i>');
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier2.'</i>');
}
?>
          </td>
        </tr>
      </table>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp; </p></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!-- T-News par Tulkar -->