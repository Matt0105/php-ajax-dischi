<?php 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <?php include_once __DIR__ . '/server/db.php' ?>
    <main>
        <div class="card-container">
            <div class="card">
                <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-ajax-dischi/img/<?php echo $musicData[0]["img"] ?>" alt="">
                <h2>titolone</h2>
                <p class="author">paragrafone</p>
                <p class="year">anno</p>
            </div>
          
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>
</body>
</html>