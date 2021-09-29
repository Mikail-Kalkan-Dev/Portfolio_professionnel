<?php session_start();?>
<?php include '../includes/header.php'; ?>

<?php
if($_POST){
	if (isset($_POST['title']) && !empty($_POST['title'])){
		$title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);
	}else{
		$_SESSION['erreur'] = "Le champ titre est vide ou pas definie";
	};

	if (isset($_POST['short_description']) && !empty($_POST['short_description'])){
		$short_description = filter_input(INPUT_POST,"short_description", FILTER_SANITIZE_STRING);
	}else{
		$_SESSION['erreur'] = "Le champ courte description est vide ou pas definie";
	};

	if (isset($_POST['long_description']) && !empty($_POST['long_description'])){
		$long_description = filter_input(INPUT_POST,"long_description", FILTER_SANITIZE_STRING);
	}else{
		$_SESSION['erreur'] = "Le champ longue description est vide ou pas definie";
	};

	if (isset($_POST['category']) && !empty($_POST['category'])){
		$category = filter_input(INPUT_POST,"category", FILTER_SANITIZE_STRING);
	}else{
		$_SESSION['erreur'] = "Choisissez une categorie";
	};
	
	if ($_FILES['file_first']['size'] != 0 && $_FILES['file_first']['size'] < 4194304 && !empty($_FILES['file_first']['tmp_name'])){
		$file_first = $_FILES['file_first']['name'];
		$location = "../assets/img/".$file_first;

		if(is_uploaded_file($_FILES['file_first']['tmp_name'])){
		$typeMime = mime_content_type($_FILES['file_first']['tmp_name']);
			if( $typeMime == "image/png" || $typeMime == "image/jpeg"){
				move_uploaded_file($_FILES['file_first']['tmp_name'], $location);
				$imageVerification = "Image corectement telecharger";
				$_SESSION['message'] = $imageVerification;
			}else{
				$_SESSION['erreur'] = "Le fichier n'est pas une image. Format .png et .jpg accepter seulement. Format actuel: " . $typeMime;
			};
		}else{
			$_SESSION['erreur'] .= "Erreur l'image ne c'est pas ajouté";
		};
	}else{
		$_SESSION['erreur'] = "Le fichier est vide ou trop grand. Taille maximum 4 mb";
	};

	if ($_FILES['file_second']['size'] != 0 && $_FILES['file_second']['size'] < 4194304 && !empty($_FILES['file_second']['tmp_name'])){
		$file_second = $_FILES['file_second']['name'];
		$location = "../assets/img/".$file_second;

		if(is_uploaded_file($_FILES['file_second']['tmp_name'])){
		$typeMime = mime_content_type($_FILES['file_second']['tmp_name']);
			if( $typeMime == "image/png" || $typeMime == "image/jpeg"){
				move_uploaded_file($_FILES['file_second']['tmp_name'], $location);
				$imageVerification2 = "Image corectement telecharger";
				$_SESSION['message'] = $imageVerification;
			}else{
				$_SESSION['erreur'] = "Le fichier n'est pas une image. Format .png et .jpg accepter seulement. Format actuel: " . $typeMime;
			};
		}else{
			$_SESSION['erreur'] .= "Erreur l'image ne c'est pas ajouté";
		};
	}else{
		$_SESSION['erreur'] = "Le fichier est vide ou trop grand. Taille maximum 4 mb";
	};

	if ($_FILES['file_third']['size'] != 0 && $_FILES['file_third']['size'] < 4194304 && !empty($_FILES['file_third']['tmp_name'])){
		$file_third = $_FILES['file_third']['name'];
		$location = "../assets/img/".$file_third;

		if(is_uploaded_file($_FILES['file_third']['tmp_name'])){
		$typeMime = mime_content_type($_FILES['file_third']['tmp_name']);
			if( $typeMime == "image/png" || $typeMime == "image/jpeg"){
				move_uploaded_file($_FILES['file_third']['tmp_name'], $location);
				$imageVerification3 = "Image corectement telecharger";
				$_SESSION['message'] = $imageVerification;
			}else{
				$_SESSION['erreur'] = "Le fichier n'est pas une image. Format .png et .jpg accepter seulement. Format actuel: " . $typeMime;
			};
		}else{
			$_SESSION['erreur'] .= "Erreur l'image ne c'est pas ajouté";
		};
	}else{
		$_SESSION['erreur'] = "Le fichier est vide ou trop grand. Taille maximum 4 mb";
	};

	if(isset($title) && isset($short_description) && isset($long_description) && isset($category)  && isset($imageVerification) && isset($imageVerification2) && isset($imageVerification3) ){
		$sql = "INSERT INTO `articles` (`id`, `title`, `short_description`, `first_image`, `second_image`, `third_image`, `long_description`, `author`, `category`, `date_time`)
		VALUES (NULL, :title, :short_description, :first_image, :second_image, :third_image, :long_description, :author, :category, CURRENT_TIMESTAMP);";

		require_once('db_conn.php');
		$query = $dbh->prepare($sql);
		$query->bindValue(':title', $title, PDO::PARAM_STR);
		$query->bindValue(':short_description', $short_description, PDO::PARAM_STR);
		$query->bindValue(':first_image', $file_first, PDO::PARAM_STR);
		$query->bindValue(':second_image', $file_second, PDO::PARAM_STR);
		$query->bindValue(':third_image', $file_third, PDO::PARAM_STR);
		$query->bindValue(':long_description', $long_description, PDO::PARAM_STR);
		$query->bindValue(':author', 1, PDO::PARAM_INT);
		$query->bindValue(':category', $category, PDO::PARAM_STR);
		$query->execute();

		$_SESSION['message'] = "Article ajouté";

	};
};?>

<div class="">
	<form name="login__form" class="login__form grid" id="login-form" method="POST" enctype="multipart/form-data">
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
		<fieldset class="login__fieldset login__container grid">
			<legend>Nouvel article</legend>
				<div class="contact__inputs grid">
					<div class="contact__content">
						<label for="title" class="contact__label"><b>Titre</b></label>
						<input type="text" class="contact__input" placeholder="Titre" name="title" required>
					</div>
					<div class="contact__content">
						<label for="short_description" class="contact__label"><b>Courte description</b></label>
						<input type="mail" class="contact__input" placeholder="Courte description" name="short_description" required>
					</div>
                    <div class="contact__content">
						<label for="long_description" class="contact__label"><b>Longue description</b></label>
						<textarea class="contact__input" name="long_description" id="" cols="30" rows="5"></textarea>
					</div>

					<div class="contact__content">
						<div>
							<label for="category" class="contact__label"><b>Categories</b></label>
							<br />
							<select name="category" id="articles-category">
								<option value="">--Choisir une catégorie--</option>
								<option value="html">HTML</option>
								<option value="javascript">JavaScript</option>
								<option value="php">Php</option>
							</select>
						</div>
					</div>
					<div class="contact__content img_content">
						<div>
							<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
							<label for="file_first" class="contact__label">Première image</label>
							<input id="file_first" type="file" name="file_first" class="form-control" />
						</div>

						<div>
							<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
							<label for="file_second" class="contact__label">Seconde image</label>
							<input id="file_second" type="file" name="file_second" class="form-control" />
						</div>

						<div>
							<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
							<label for="file_third" class="contact__label">Troisieme image</label>
							<input id="file_third" type="file" name="file_third" class="form-control" />
						</div>
					</div>
			
				<div class="">
					<input class="button button--success" type="submit" value='Ajouté' name="submit">
					<a href="dashboard.php" class="dashboard__button" target="" rel="noopener noreferrer">Dashboard</a>
				</div>

		</fieldset>
	</form>

</div>

<?php include '../includes/footer.php'; ?>