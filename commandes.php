<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>condition d'utilisation</title>
    <link rel="stylesheet" href="debut.css"/>
</head>
<body>
	<div id="niv1">
		<?php
		include("header.php"); 
		?>
			<section>
				<article>
					<h1>gestion des commandes</h1>
                    <form method="POST" action="traitement.php">
						<fieldset id="s1">
							<legend>informations valables</legend>
							<label for="commande">Nom</label>
							<input type="text" id="commande">
							<label for="prenom">Prénom</label>
							<input type="text" id="prenom"><br>
							<label for="mail">Adresse email</label>
							<input type="email" id="mail">
							<label for="telephone">Numéro de téléphone</label>
							<input type="tel" id="telephone"><br>
							<label for="cod">passez vos commandes</label>
							<textarea id="cod" cols="70" rows="10" name="commandes"></textarea><br>
							<input type="submit" value="envoyer">
						</fieldset>
                    </form>
				</article>
			</section>
			<?php
			include("footer.php");
			?>
		</div>
	</body>
</html>