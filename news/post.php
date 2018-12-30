<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<? 
touch("news.bdd"); // on cree le fichier si il existe pas

if(ereg("^(.+)@(.+)\\.(.+)$", $_POST["mail_news"]))
{
$_POST["post_news"] = "<a href='mailto:".$_POST["mail_news"]."'>".$_POST["post_news"]."</a>";
}
$_POST["mess_news"] = ereg_replace("\n", "<br>", $_POST["mess_news"]);
$News = " <center>

<b>".$_POST["titre_news"]."</b>"." par "."<i>".$_POST["post_news"]."</i>.". 
"<br>le ".date("j/m/Y")."<br><br>" 
.$_POST["mess_news"]."<br/><br><hr><br/><br/></center>" ; 
$Fichier = './news.bdd' ; //on regarde si le fichier existe 

//on charge le contenue actuel 
$Fichier_r = fopen($Fichier,"r+"); 
$contenue = fread($Fichier_r , filesize($Fichier)); 
fclose($Fichier_r); 

//on ecrit la nouvelle news puis l'ancien contenue 
$Fichier_w = fopen($Fichier,"w+"); // on ouvre le fichier 
fwrite($Fichier_w,stripslashes($News.
"<!-- *********** -->".
$contenue)); // on ecrit dans le fichier; 
fclose($Fichier_w); // on referme le fichier; 

?> 
News ajoutée pour voir vos news <a href="voire.php">clickez ici</a> 
<!-- T-News par Tulkar -->  
</body>
</html>
