<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />

        <title>Techno Web – Blog</title>
        <!-- Commenter le style pour le développement -->
        <link rel="stylesheet" href="/dist/main.css" />
    </head>
    <body>
        <?php view('components/navbar'); ?>

        <?= $content; ?>

        <?php view('components/footer'); ?>
        <script src="/dist/bundle.js"></script>

        <!-- Script à utiliser pour le développement -->
        <!-- <script src="http://localhost:3000/bundle.js"></script> -->
    </body>
</html>
