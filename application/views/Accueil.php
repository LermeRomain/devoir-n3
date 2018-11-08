<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="http://localhost/sio2/devoir/devoir-n3/JS/mesFonctions.js"></script>
<script type="text/javascript" src="http://localhost/sio2/devoir/devoir-n3/Jquery/jquery-3.1.1.js"></script>
</head>
<body>
	<meta charset="utf-8">
	<form method="post" action="accueil.php">
    <p>
		<label>User</label> : <input type="text" id="User" value=""/><br>
		<input type="button"  value="connexion" id="connexion"><br>
    </p>
</form>
</body>
</html>
<script>
			$( "#connexion" ).click(function()
			{
				if ($("#User").val() == "girard")
				{
					afficherRegions($(this).val());;
				}
				else if ($("#User").val() == "royer")
				{
					afficherRegions($(this).val());;
				}
			})
</script>