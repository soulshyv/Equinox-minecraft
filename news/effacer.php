<?
$Fichier='./news.bdd';
print('<div align="center"><a href="index.php">Revenir au menu principal</a></div><br><br>');

if(file_exists($Fichier))
{
print('Etes vous sur de vouloir effacer les news ? <br>
<table width="100" border="1">
  <tr>
    <td align="center" valign="middle"><a href="effacer2.php"><img src="img/ok.gif" border="o">OUI</a></td>
    <td align="center" valign="middle"><a href=""><img src="img/no.gif" border="o">NON</a></td>
  </tr>
</table>
');
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier.'</i>');
}

?>

<!-- T-News par Tulkar -->