<?php

require_once('../common/pdo.php'); 

$artists = findArtistsByLetter($_GET['filter']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic details</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<?php require_once('../../components/header_comiclopedia.html'); ?>

<body class="bg-old_paper-100">
<div class="w-9/12 min-w-fit mx-auto bg-old_paper-200">

    <div class="flex justify-evenly mx-auto pt-1 border-b-4 border-b-comic_blue">
    <?php foreach (range('a', 'z') as $letter) { ?> 
        <span class="uppercase">
            <a href="/src/php/pages/artists.php?filter=<?= $letter ?>">
                <p class="p-2 bg-old_paper-100 text-center "><?= $letter ?></p>
            </a>
        </span>
    <?php } ?>  
    </div>

    <article class="bg-old_paper-200 p-8">
        <section class="font-serif columns-3xs [column-rule:1px_solid_#3477ab]">
            <?php foreach ($artists as $artist) { ?>
                <p class="break-before-avoid ">
                    <a href="artist_details.php?name=<?= $artist['lastname'] ?>">
                        <?= $artist['lastname'] ?>, <?= $artist['firstname'] ?>
                    </a>
                </p>
            <?php } ?>
        </section>
    </article>
</div>

</body>
</html>
