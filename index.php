<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ma page PHP</title>
    <!-- Local CSS that imports Bootstrap via CDN -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container py-5">

    <h1 class="display-4">Ma page PHP</h1>

    <?php
        $nom = "visiteur";
        echo "<p class=\"lead\">Hello, " . $nom . " !</p>";
    ?>

    </div>

    <!-- Local JS that loads Bootstrap bundle -->
    <script src="js/bootstrap.js" defer></script>

</body>
</html>