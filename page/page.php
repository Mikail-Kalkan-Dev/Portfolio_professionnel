<?php include '../includes/header.php'; ?>
<?php require_once('../admin/db_conn.php'); ?>

<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
}

$sql = 'SELECT * FROM articles WHERE id = :id' ;

$sth = $dbh->prepare($sql);
$sth->execute(array(':id' =>  $id));
$one_article = $sth->fetch();

?>
<main class="main">
    <section class="page">
        <div class="page__bg">
            <div class="page__containner container grid">
                <div class="page__data">
                    <h1 class="section__title"><?= $one_article['title']; ?></h1>
                    <h2 class="page__title"> Article numéro <?= $one_article['id']; ?></h2>
                </div>
            </div>
        </div>
    </section>
    
    <section class="page">
        <span class="page__subtitle"><?= $one_article['short_description']; ?></span>

        <div>
            <img src="../assets/img/<?= $one_article['first_image']; ?>" alt="<?= $one_article['first_image']; ?>">

            <div>
                <h2 class="page__description__title">Description du projet</h2>
                <p class="page__description">
                <?= $one_article['long_description']; ?>
                </p>
            </div>
        </div>
        
        <div class="page__img">
            <img src="../assets/img/<?= $one_article['second_image']; ?>" alt="<?= $one_article['second_image']; ?>">

            <img src="../assets/img/<?= $one_article['third_image']; ?>" alt="<?= $one_article['third_image']; ?>">
        </div>

    </section>
</main>