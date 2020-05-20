<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>pageA</title>
	<link rel="stylesheet" type="text/css" href=" ">	
</head>

<form action="s" method="POST">
<p>Saisir Valeur:<br /></p>
<input type="text" name="valeur"/>
<button type="submit">
	Envoyer
</button>
</form>
<?php
  if(isset($_POST['valeur']))
   {
	   echo $_POST['valeur'];
   }
?>
</body>
</html>