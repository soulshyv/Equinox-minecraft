<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualité</title>
	<style type="text/css">
		body{
			background: #D4DAD3;
		}
		h1{
			font-family: DejaVu Sans Mono, monospace;
			font-size: 50px;
		}
		hr{
  margin: 0% 10% 0%;
 font-size: 15px;
}
		.btn-draw {
  position: relative;
  display: inline-block;
  color: #324577;
  border-bottom: 2px solid #324577;
  cursor: pointer;
  overflow: hidden;
  -webkit-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
}
.btn-draw:after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 2px;
  background: #324577;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
  -webkit-transition: -webkit-transform 0.2s ease-in-out;
  transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
  -webkit-transition-delay: 0.6s;
          transition-delay: 0.6s;
}
.btn-draw > span {
  position: relative;
  display: block;
  padding: 0.5em;
  color: inherit;
}
.btn-draw > span:before, .btn-draw > span:after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  background: #324577;
  -webkit-transition: -webkit-transform 0.2s ease-in-out;
  transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
}
.btn-draw > span:before {
  height: 2px;
  width: 100%;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-transition-delay: 0.4s;
          transition-delay: 0.4s;
}
.btn-draw > span:after {
  height: 100%;
  width: 2px;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.btn-draw:hover:after, .btn-draw:hover > span:before, .btn-draw:hover > span:after {
  -webkit-transform: translate(0, 0);
          transform: translate(0, 0);
}
.btn-draw:hover:after {
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}
.btn-draw:hover > span:before {
  -webkit-transition-delay: 0.2s;
          transition-delay: 0.2s;
}
.btn-draw:hover > span:after {
  -webkit-transition-delay: 0.4s;
          transition-delay: 0.4s;
}
.btn-draw:hover {
  color: #e4e4e2;
  background-color: #324577;
  -webkit-transition-delay: 0.6s;
          transition-delay: 0.6s;
}
a{
	text-decoration: none;
}

	</style>
</head>
<body>
	<center><h1>Actualité</h1></center>
	<center><h2><a href="index.php" class="btn-draw"><span>Accueil</span></a></h2></center><br/><br/><hr><br/>
<?
$Fichier='./news/news.bdd';
if(file_exists($Fichier))
{
include($Fichier);
}
else
{
print('Il n\'y a pas encore de fichier : '.'<i>'.$Fichier.'</i>');
}
?>
</body>
</html>
