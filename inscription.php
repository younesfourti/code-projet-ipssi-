<!DOCTYPE html>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=workshop','root','');

if(isset($_POST['forminscription']))
{

$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$mail = htmlspecialchars($_POST['mail']);
		$mdp = ($_POST['mdp']);
		$mdp2 = ($_POST['mdp2']);

	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{

		$nomlength = strlen($nom);
		$prenomlength = strlen($prenom);
		if($nomlength <= 20)
		{
			if($prenomlength <= 20)
			{
				if(filter_var($mail,FILTER_VALIDATE_EMAIL))
				{
					$reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
					$reqmail-> execute(array($mail));
					$mailexist = $reqmail->rowCount();
					if($mailexist == 0)
					{
						if($mdp == $mdp2)
						{
							$insertmbr = $bdd ->prepare("INSERT INTO membre(nom, prenom, mail, motdepasse) VALUES( ?, ?, ?, ?)");
							$insertmbr->execute(array($nom, $prenom, $mail, $mdp));
							$erreur = "Votre compte a bien été créer";	
							header('Location: index.php');
						}
						else
						{
							$erreur = "Vos mots de passe ne sont pas identiques";
						}
					}
					else
					{
						$erreur = "Adresse mail déja utilisé";
					}
				}
				else
				{
					$erreur = "Votre email est invalide";
				}
			
			}
			else
			{
				$erreur = " Votre prenom ne doit pas dépasser 255 caractères !";
			}
		}
		else
		{
			$erreur = " Votre nom ne doit pas dépasser 255 caractères !";
		}

	}
	else
	{
		$erreur = "Tous les champs doivent etre completer";
	}
}

?>
<html>
<head>
	<title> workshop</title>
	<meta charset="utf-8">
	
</head>
<link rel="stylesheet" type="text/css" href="css\inscription.css" />
<body>
	<div align="center">
		<h2> inscription</h2>
		</br>
		<form class='box' action='' method='post'>
			<table>
				<tr>
					<td align="right">
						<label for="nom">
						Nom: </label>
					</td>
					<td>
						<input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php  if(isset($nom)) {echo $nom;} ?>" />
					</td>
				</tr>	
				<tr>
					<td align="right">
						<label for="prenom">
						Prenom: </label>
					</td>
					<td>
						<input type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php  if(isset($prenom)) {echo $prenom;} ?>"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mail">
						Mail: </label>
					</td>
					<td>
						<input type="text" placeholder="Votre mail" id="mail" name="mail" value="<?php  if(isset($mail)) {echo $mail;} ?>"/>
					</td>
				</tr>	
				<tr>
					<td align="right">
						<label for="mdp">
						Mot de passe: </label>
					</td>
					<td>
						<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="mdp2">
						Confirmez le mot de passe: </label>
					</td>
					<td>
						<input type="password" placeholder="Confirmez le mdp" id="mdp2" name="mdp2"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<br>
						<input type="submit" value="Je m'inscris" name="forminscription">
					</td>
				</tr>			
			</table>
		</form>
		<?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur."</font>";
		}
		?>
	</div>
</body>
</html>