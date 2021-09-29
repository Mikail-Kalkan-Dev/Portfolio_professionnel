<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!--==================== ICONify ====================-->
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="../assets/css/styles.css" />


    <title>Responsive Portfolio Website</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
    <?php if(!empty($_SESSION['user_name'])){?>
    <button class="button button--flex"> Déconnexion </button>
    <?php } ?>
    </header>



