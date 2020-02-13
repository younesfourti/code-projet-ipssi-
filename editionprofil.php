<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=workshop','root','') ;

 

 

if(isset($_SESSION['id']))
{
	



	

	if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $_SESSION['lenom'])
	{
		$newnom = htmlspecialchars($_POST['newnom']);
		$_SESSION['lenom'] = $newnom;
		$insertnom = $bdd->prepare("UPDATE membre SET nom = ? WHERE ID  = ?");
		$insertnom->execute(array($newnom, $_SESSION['id']));
		header('Location: page1.php?id='.$_SESSION['id']);
		

	}

	if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] !=  $_SESSION['leprenom'])
	{
		
		$newprenom = htmlspecialchars($_POST['newprenom']);
		$_SESSION['leprenom'] = $newprenom;
		$insertprenom = $bdd->prepare("UPDATE membre SET prenom = ? WHERE ID  = ?");
		$insertprenom->execute(array($newprenom, $_SESSION['id']));
		header('Location: page1.php?id='.$_SESSION['id']);

	}

	if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $_SESSION['lemail'])
	{
		$newmail = htmlspecialchars($_POST['newmail']);
		$_SESSION['lemail']=$newmail ;
		if(filter_var($newmail,FILTER_VALIDATE_EMAIL))
		{
			$reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
			$reqmail-> execute(array($newmail));
			$mailexist = $reqmail->rowCount();
			if($mailexist == 0)
			{
				$insertmail = $bdd->prepare("UPDATE membre SET mail = ? WHERE ID  = ?");
				$insertmail->execute(array($newmail, $_SESSION['id']));
				header('Location: page1.php?id='.$_SESSION['id']);
			}
		}

	}

	if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND $_POST['newmdp1'] != $_SESSION['lemotdepasse'])
	{
		$mdp1 = ($_POST['newmdp1']);
		$mdp2 = ($_POST['newmdp2']);

		if($mdp1 == $mdp2)
		{
			$insertmdp = $bdd->prepare("UPDATE membre SET motdepasse =  ? WHERE ID = ?");
			$insertmdp->execute(array($mdp1, $_SESSION['id']));
			header('Location: page1.php?id='.$_SESSION['id']);
		}
		else
		{
			$msg = "Vos deux mots de passes ne correspondent pas !";
		}

	}

	


?>
<html>
<head>
	<title> workshop</title>
	<meta charset="utf-8">
	
</head>

<style>
	body {
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background:  #E8E8E8;
	}

	.box {
		width: 350px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		text-align: center;
		border-radius: 15px;
		border: 3px solid #191919;
	}

	.box h1 {
		color: black;
		text-transform: uppercase;
		font-weight: 500;
	}

	.box input[type="text"],
	.box input[type="password"] {
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #EC0433;
		padding: 14px 10px;
		width: 260px;
		outline: none;
		color: black;
		border-radius: 24px;
		transition: 0.25s;
	}

	.box input[type="text"]:focus,
	.box input[type="password"]:focus {
		width: 320px;
		border-color: #003b6e;
	}

	.box input[type="submit"] {
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		margin-left: 5px;
		margin-right: 5px;
		border: 2px solid #EC0433;
		padding: 14px 40px;
		outline: none;
		color: #EC0433;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
		display: inline-block;
		width: 260px;
	}

	.box input[type="submit"]::placeholder {
		text-align: center;
	}

	.box input[type="submit"]:hover {
		background: #003b6e;
		color: #E8E8E8;
		border: 2px solid #E8E8E8;
	}
</style>
<body>
	
		</form>
		<?php
		if(isset($msg)) 
		{
			echo "$msg";
		}
		
		?>
	</div>

	
	

	<form class='box' action='' method='post'>
			<label>Nom :</label>
			<input type="text" name="newnom" placeholder="nom" value="<?php echo  $_SESSION['lenom']; ?>" />
			<label>Prenom :</label>
			<input type="text" name="newprenom" placeholder="prenom" value="<?php echo $_SESSION['leprenom']; ?>"/>
			<label>Email :</label>
			<input type="text" name="newmail" placeholder="mail" value="<?php echo  $_SESSION['lemail']; ?>"/>
			<label>Mot de passe :</label>
			<input type="password" name="newmdp1" placeholder="Mot de passe"/>
			<label>Confirmation mot de passe :</label>
			<input type="password" name="newmdp2" placeholder="Confirmation mot de passe"/>
			<input type="submit" value="Mettre a jour mon profil">
		</form>
		
</body>

</html>
<?php
}
else
{
	header("Location: connexion.php");
}

?>
