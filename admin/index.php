<?php session_start();?>
<?php include '../includes/header.php'; ?>
<?php if($_SESSION['role'] == "admin"){
	header('location: dashboard.php');
};
?>
<?php
if($_POST){
	if (isset($_POST['nom']) && !empty($_POST['nom'])){
		$nom = filter_input(INPUT_POST,"nom", FILTER_SANITIZE_STRING);
	}else{
		$_SESSION['erreur'] = "Le champ nom est vide ou pas definie";
	};

	if (isset($_POST['email']) && !empty($_POST['email'])){
		$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
	}else{
		$_SESSION['erreur'] = "Le champ email est vide ou pas definie";
	};

	if (isset($_POST['password']) && !empty($_POST['password'])){
		$password = $_POST['password'];
	}else{
		$_SESSION['erreur'] = "Le champ password est vide ou pas definie";
	};

	if(isset($nom) && isset($email) && isset($password)){
		$sql = 'SELECT * FROM `users` WHERE `user_name` = :entry_name AND `user_mail` = :entry_mail;';

		require_once('db_conn.php');
		$query = $dbh->prepare($sql);
		$query->bindValue(':entry_name', $nom, PDO::PARAM_STR);
		$query->bindValue(':entry_mail', $email, PDO::PARAM_STR);
		$query->execute();

		$result = $query->fetch(PDO::FETCH_ASSOC);
	};

	if(!empty($result)){

		if(password_verify($password, $result['user_pass'])){
			$_SESSION['nom'] = $result['user_name'];
			$_SESSION['email'] = $result['user_mail'];
			$_SESSION['role'] = "admin";
			
			$_SESSION['message'] = "Connexion effectué";
			header('location: dashboard.php');
		}else{
			$_SESSION['erreur'] .= "Mauvais identifiant";
		}
		
		
	}else{
		$_SESSION['erreur'] .= "Ce compte n'existe pas";
	}
};


?>
<?php if(!empty($_SESSION['erreur'])){
?>
<div class="alert alert-danger" role="alert">
	<?= $_SESSION['erreur'];?>
</div>
<?php $_SESSION['erreur'] ="";
}
if(!empty($_SESSION['message'])){
?>
<div class="alert alert-success" role="alert">
	<?= $_SESSION['message'];?>
</div>
<?php $_SESSION['message'] ="";
}
?>
<div class="login__container grid">
	<form name="login__form" class="login__form grid" id="login-form" method="POST">
		<fieldset class="login__fieldset">
			<legend>Connexion</legend>
				<div class="contact__inputs grid">
					<div class="contact__content">
						<label for="nom" class="contact__label"><b>Nom</b></label>
						<input type="text" class="contact__input" placeholder="Nom" name="nom" required>
					</div>
					<div class="contact__content">
						<label for="email" class="contact__label"><b>Email</b></label>
						<input type="mail" class="contact__input" placeholder="email" name="email" required>
					</div>
					<div class="contact__content">
						<label for="password" class="contact__label"><b>Mot De Passe</b></label>
						<input type="password" class="contact__input" placeholder="PassWord" name="password" required>
					</div>
			
				<div class="">
					<input class="button button--flex" type="submit" value='Connexion' name="submit">
				</div>

		</fieldset>
	</form>

</div>

<?php include '../includes/footer.php'; ?>