<?php
include "db/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti PHP</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row row-cols-5">

            <?php
            foreach ($dischi as $disco) {
            ?>
                <div class="col">
                    <div class="card d-flex flex-column text-center p-3 mt-3">
                        <img :src="<?php echo $disco["src"] ?>" alt="" />
                        <h4><?php echo $disco["titolo"] ?></h4>
                        <span><?php echo $disco["artista"] ?></span>
                        <span><?php echo $disco["anno"] ?></span>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

</body>

</html>