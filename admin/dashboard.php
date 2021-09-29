<?php include 'session_start.php'; ?>
<?php include '../includes/header.php'; ?>

<?php 
require_once('db_conn.php');


$reqSql = "SELECT count(id) AS nbrLignes FROM articles";

$query = $dbh->prepare($reqSql);
$query->execute();
$resultat = $query->fetch();
$toutesLignes = (int) $resultat['nbrLignes'];

$limitLignesPage = isset($_SESSION['nbrLignesAffiche']) ? $_SESSION['nbrLignesAffiche'] : 3;

// Calculer le nombre total de pages
$totalpages = ceil($toutesLignes / $limitLignesPage);


// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = $_GET["page"];
    $suiv = $_GET["page"] + 1;  
    $prec = $_GET["page"] - 1;  

}else{
    $page = 1;
    $suiv =  $page + 1;  
    $prec = $page - 1;  
}

$start = ($page-1) * $totalpages;  


$sql = 'SELECT * FROM `articles` LIMIT :start, :limit';

$query = $dbh->prepare($sql);
$query->bindParam(':start', $start, PDO::PARAM_INT);
$query->bindParam(':limit',$limitLignesPage, PDO::PARAM_INT);
$query->execute();

$articles = $query->fetchAll(PDO::FETCH_ASSOC);

?>


<nav class="nav__pagination">
    <ul class="pagination__list">
        <li class="pagination__item <?php if($page <= 1){echo 'page__disabled';}?>">
            <a class="pagination__link" href="<?php if($page <= 1){echo '#';} else{echo "?page= $prec";}?>" class="page__link">Précédent</a>
        </li>

        <?php for($i = 1; $i <= $totalpages; $i++):?>
            <li class="pagination__item <?php if($page == $i){echo 'page__active';}?>">
                <a class="pagination__link" href="?page= <?= $i; ?>"> <?php echo "$i"; ?></a>
            </li>
        <?php endfor; ?>
        
        <li class="pagination__item <?php if($page >= $totalpages){echo 'page__disabled';} ?>">
        <a class="pagination__link" href="<?php if($page >= $totalpages){echo '#';} else{echo "?page= $suiv";}?>" class="page__link">Suivant</a>
        </li>
    </ul>
</nav>

<div class="crud__action">
    <a href="add_articles.php" class="crud__button button--info" target="" rel="noopener noreferrer">Ajouter article</a>
    <a href="session_kill.php" class="crud__button button--danger" target="" rel="noopener noreferrer">Deconnexion</a>
</div>

<?php
    if(!empty($_SESSION['erreur'])){
    ?>
    <div class="alert alert__danger" role="alert">
        <?= 
        $_SESSION['erreur'];
        ?>
    </div>
    <?php
    $_SESSION['erreur'] ="";
    };
    if(!empty($_SESSION['message'])){
        ?>
    <div class="alert alert__success" role="alert">
        <?= 
            $_SESSION['message'];
            ?>
    </div>
    <?php
        $_SESSION['message'] ="";
        }
    ?>
<section class="crud__container">
    <table class="crud__table">
    <caption>Listes des articles</caption>
        <thead>
            <th>ID</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Categorie</th>
            <th>Date</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            foreach($articles as $article){
            ?>
            <tr class="crud__tr">
                <td><?= $article['id'] ?></td>
                <td><?= $article['title'] ?></td>
                <td> <img src="../assets/img/<?= $article['first_image']; ?>" height="50" width="50"
                        alt="<?= $article['first_image']; ?>">
                </td>
                <td><?= $article['category'] ?></td>
                <td><?= $article['date_time'] ?></td>
                <td class="td__button">
                    <a href="detail.php?id=<?= $article['id'] ?>" class="crud__button button--info" target=""
                        rel="noopener noreferrer">
                        Detail
                    </a>
                    <a href="delete.php?id=<?= $article['id'] ?>" class="crud__button button--danger" target=""
                        rel="noopener noreferrer">
                        Supprimer
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>

<div class="crud__action">
    <a href="../index.php" class="crud__button button--info" target="" rel="noopener noreferrer">Accueil</a>
</div>

<?php include '../includes/footer.php'; ?>