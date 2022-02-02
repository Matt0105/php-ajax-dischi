<?php 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <?php include_once __DIR__ . '/server/db.php' ?>
    <main id="app">
        <div class="card-container">
            <div v-for="song in musicData" class="card">
                <img :src="`http://localhost:8888/php-ajax-dischi/img/${song.img}`" alt="">
                <h2> {{song.title}} </h2>
                <p class="author">{{song.author}}</p>
                <p class="year">{{song.year}}</p>
            </div>
            
        </div>
    </main>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>