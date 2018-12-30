<?

$Fichier = './news.bdd' ;
print('<div align="center"><a href="index.php">Revenir au menu principal</a></div><br><br>');
if(file_exists($Fichier))
{

$Fichier_r = fopen($Fichier,"r+");
$taille = filesize($Fichier);
$contenu = fread($Fichier_r,$taille);
$Newslist = explode("<!-- *********** -->",$contenu);

fclose($Fichier_r);

$nombre = substr_count($contenu,"<!-- *********** -->");

$bouclecompte = 0;

while($bouclecompte != $nombre)

{
$newsnum = $bouclecompte +1 ;

print("<div align=\"center\">");
print("
<table width=\"462\" height=\"113\"  border=\"1\">
  <tr> 
    <td height=\"31\" colspan=\"2\">"."news".$newsnum."</td>
  </tr>
  <tr> 
    <td width=\"389\">".$Newslist[$bouclecompte]."</td>
    <td width=\"57\">
<form name= \" 
"
."formulaire".$bouclecompte.
" \" method=\"post\" action=\"effacement2.php\">

<input name=\"newsnumber\" type=\"hidden\" value=\"".$bouclecompte."\">

        <input type=\"submit\" name=\"Submit\" value=\"Effacer\">

      </form>
<form name= \" 
"
."modiformulaire".$bouclecompte.
" \" method=\"post\" action=\"modifier.php\">

<input name=\"newsnumber\" type=\"hidden\" value=\"".$bouclecompte."\">

        <input type=\"submit\" name=\"Submit\" value=\"Modifier\">

      </form></td>
  </tr>
</table>
");
print("</div>");

$bouclecompte++;
}
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier.'</i>');
}


?>
<!-- T-News par Tulkar -->