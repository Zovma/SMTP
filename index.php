<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .form {
        margin-left: auto;
        margin-right: auto;
        width: 11em
    }
</style>

<body>
    <?php
    include "get_utm.php";
    ?>


    <form class="form" action="post.php" method="POST">

        <p>
            Имя
            <input type="text" name="name">
        </p>
        <p>
            Телефон
            <input type="text" name="phone">
        </p>
        <p>
            Email
            <input type="text" name="email">
        </p>
        <p>
            Город
            <input type="text" name="city">
        </p>
        <div>
            Услуга:
            <p><input type="radio" name="services" value="diagnostics" checked>Диагностика</p>
            <p><input type="radio" name="services" value="repair">Ремонт</p>
        </div>
        <div>
            <textarea name="comment"></textarea>
        </div>
        <input type="submit" value="Отправить">
        <?php echo get_utm(); ?>

    </form>

<script>


</script>


</body>

</html>