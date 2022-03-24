<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Практика</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="img/fav.ico" type="image/x-icon">
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me">

        <h1>  <?php echo $p ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php  echo '<img src="img/logo2.png">'; ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                <p> Мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

            <?php
            $end = 25;
            $j = 1;
            for($i=1; $i<$end; $i+=$j) {
                echo $i, ' ';
                $j = $i - $j;
            }
            ?>   <br>
            <?php
            echo $d;
            ?>  <br>

            <?php
            for($q = 0; $q < 10; $q++) {
                echo fibanchi($q), ' ';
            }
            ?>  <br>
            <?php
            echo $h;
            ?>

        </div>

        <div class="article">
            <p class="text">
                В ходе данного модуля, удалось освоить основы работы с языком гипертекстовой разметки HTML с применением
                скриптового языка программирования PHP, а также применять таблицы стилей CSS к созданным страницам.
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>
</html>
