<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<script language="javascript" type="text/javascript">

function ajoutbalise(balise) {
var txtarea = document.formulaire.mess_news;
	text = ' ' + balise + '';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}
</script>
<div align="center"></div>
<form action="modifier2.php" method="post" name="formulaire">
  <div align="center"> 
    <p><u>Modification de la news :</u></p>
    <table width="100" border="0" bordercolor="#FFFFFF">
      <tr>
        <td><div align="center">
            <p>Toolbox :</p>
            <p><img src="img/IMG-URL-BR-B-I.jpg" width="149" height="26" border="0" usemap="#MapMap"> 
              <img src="img/Text_Color.jpg" width="64" height="66" border="0" usemap="#Map2"> 
              <map name="MapMap">
                <area shape="rect" coords="0,1,33,25" href="javascript:ajoutbalise('<img src=\'URL\'>')">
                <area shape="rect" coords="32,1,73,25" href="javascript:ajoutbalise('<a href=\'URL\'>Lien</a>')">
                <area shape="rect" coords="72,1,99,25" href="javascript:ajoutbalise('<BR> \n')">
                <area shape="rect" coords="99,2,122,26" href="javascript:ajoutbalise('<b></b>')">
                <area shape="rect" coords="122,1,149,25" href="javascript:ajoutbalise('<i></i>')">
              </map>
            </p>
          </div></td>
      </tr>
    </table>
    
      <map name="Map">
        <area shape="rect" coords="0,1,33,25" href="javascript:ajoutbalise('<img src=\'URL\'>')">
        <area shape="rect" coords="32,1,73,25" href="javascript:ajoutbalise('<a href=\'URL\'>Lien</a>')">
        <area shape="rect" coords="72,1,99,25" href="javascript:ajoutbalise('<BR>')">
        <area shape="rect" coords="99,2,122,26" href="javascript:ajoutbalise('<b>		</b>')">
        <area shape="rect" coords="122,1,149,25" href="javascript:ajoutbalise('<i>		</i>')">
      </map>
    <p> 
      <textarea name="modif_news" cols="70" rows="20">
<?

$newsnumber = $_POST["newsnumber"];
$Fichier = './news.bdd';
$Fichier_a = fopen($Fichier,"a+");
$taille = filesize($Fichier);
$contenu = fread($Fichier_a,$taille);
$nombre = substr_count($contenu,"<!-- *********** -->");
$Newslist = explode("<!-- *********** -->",$contenu);
$bouclecompte = 0;
fclose($Fichier_a);
$Newslist[$newsnumber] = ereg_replace("<br>", "\n", $Newslist[$newsnumber]);
print($Newslist[$newsnumber]);
?>
</textarea>
      <input type="hidden" name="newsnumber" value="<? $newsnumber ?>">
    </p>
    <p>
    <input type="submit" name="Submit" value="Envoyer">
  </p>
  </div>
</form>
<map name="Map2">
  <area shape="rect" coords="3,17,21,31" href="javascript:ajoutbalise('<font color=\'#FF0000\'></font>')">
  <area shape="rect" coords="3,33,21,47" href="javascript:ajoutbalise('<font color=\'#1800FF\'></font>')">
  <area shape="rect" coords="22,17,41,31" href="javascript:ajoutbalise('<font color=\'#FF9900\'></font>')">
  <area shape="rect" coords="23,33,41,47" href="javascript:ajoutbalise('<font color=\'#FF00DE\'></font>')">
  <area shape="rect" coords="3,49,21,63" href="javascript:ajoutbalise('<font color=\'#000000\'></font>')">
  <area shape="rect" coords="23,49,41,63" href="javascript:ajoutbalise('<font color=\'#999999\'></font>')">
  <area shape="rect" coords="42,17,61,31" href="javascript:ajoutbalise('<font color=\'#FFFF00\'></font>')">
  <area shape="rect" coords="43,33,61,47" href="javascript:ajoutbalise('<font color=\'#00FF06\'></font>')">
  <area shape="rect" coords="43,49,61,63" href="javascript:ajoutbalise('<font color=\'#FFFFFF\'></font>')">
</map>
<!-- T-News par Tulkar -->
</body>
</html>
