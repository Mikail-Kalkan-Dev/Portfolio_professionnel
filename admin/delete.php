<?php session_start();?>
<?php include '../includes/header.php'; ?>

<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
	require_once('db_conn.php');
	// on clean la valeur d'id
	$id = strip_tags($_GET['id']);

	$sql = 'SELECT * FROM `articles` WHERE `id` = :id;';

	$query = $dbh->prepare($sql);
	$query->bindValue(':id', $id, PDO::PARAM_INT);
	$query->execute();
	// on fetch un resultat fetch suffit
	$result = $query->fetch();

	if(!$result){
		$_SESSION['erreur'] = "Cette id n'existe pas";
		header('location: dashboard.php');
	}

	$sql = 'DELETE FROM `articles` WHERE `id` = :id;';

	// on prépare la requête
	$query = $dbh->prepare($sql);
	$query->bindValue(':id', $id, PDO::PARAM_INT);
	$query->execute();
	
	$_SESSION['message'] = "Articles $id Supprimer";

	unlink("../assets/img/".$result['image']);
	
	header('location: dashboard.php');
}else{
	$_SESSION['erreur'] = "Url invalid";
	header('location: dashboard.php');
}
?>