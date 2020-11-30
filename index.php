<?php
require_once 'bd.php';
$sql = 'SELECT * FROM categories';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>SkillSpot</title>
</head>
<body>

<header>
    <div class="container">
        <div class="menu-logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <!-- /.menu-logo -->
        <div class="search">
            <input type="search" placeholder="Поиск на сайте">
        </div>
        <!-- /.search -->
        <a href="#" class="profile"><img src="img/user.png" alt="Профиль"></a>
        <a href="#" class="auth"><img src="img/auth.png" alt="Автризация"></a>
    </div>
</header>

<section class="categories">
    <div class="container">
        <ul>
            <?php foreach($categories as $category): ?>
                <li class="category"><a><?= $category->category; ?></a></li>
            <?php endforeach; ?>

        </ul>
    </div>
</section>
<!-- /.categories -->

</body>
</html>