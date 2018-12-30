<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<script language="javascript" type="text/javascript">

function ajoutbalise(balise) {
if (balise == '<img src=\'URL\'>')
{var url = prompt("URL de l'image :","");
balise = '<img src=\'' + url +'\'>' ;
}
else if ( balise == '<a href=\'URL\'>Lien</a>')
{var url = prompt("URL du lien :","http://");
var lien = prompt("Nom du lien :","");
balise = '<a href=\'' + url +'\'>' + lien +'</a>';
}
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
<div align="center"><u>Ajout de News :</u></div>
<form action="post.php" method="post" name="formulaire">
  <div align="center">
    
    <table width="454" border="0">
      <div align="right">
	  <tr>
        <td width="448"><p align="right">Post&eacute; par : 
              <input name="post_news" type="text" size="50">
            </p>
	<p align="right">Email du posteur : 
              <input name="mail_news" type="text" size="50">
            </p>
            <p align="right"> Titre de la news : 
              <input name="titre_news" type="text" size="50">
            </p>
    </td>
      </tr>
	  </div>
    </table>
    <p><u>Contenue de la news :</u></p>
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
        <area shape="rect" coords="72,1,99,25" href="javascript:ajoutbalise('<BR> \n')">
        <area shape="rect" coords="99,2,122,26" href="javascript:ajoutbalise('<b></b>')">
        <area shape="rect" coords="122,1,149,25" href="javascript:ajoutbalise('<i></i>')">
      </map>
  <p> 
      <textarea name="mess_news" cols="50" rows="10"></textarea>
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
