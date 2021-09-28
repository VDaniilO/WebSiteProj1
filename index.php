<?php include 'temp/header.php'; ?>

<div class="zagol">
    <h1>НОВЫЕ ПОСТУПЛЕНИЯ ВЕСНЫ</h1>
    <h2>Мы подготовили для вас лучшие новинки сезона</h2>
    <input type="button" value="Посмотреть новинки">
</div>

<div class = "photos">
    <a href="#"><img src="images/1.jpg" width="300px" height="600px"></a>
    <img src="images/menu1.jpg" width="300px" height="300px">
    <a href="ked10198.php"><img src="images/3.jpg" width="300px" height="300px"></a>
    <img src="images/menu3.jpg" width="300px" height="300px">
    <a href="#"style="margin-top:300px; margin-left: -900px;"><img src="images/2.jpg" width="300px" height="300px" ></a>
    <img src="images/menu4.jpg" width="300px" height="300px" style="margin-top:300px;">
    <a href="#" style="margin-top:300px;"><img src="images/4.jpg" width="300px" height="600px"></a>
    <a href="#" style="margin-top:600px;margin-left: -1200px;"><img src="images/5.jpg" width="300px" height="300px"></a>
    <img src="images/menu5.jpg" width="300px" height="300px" style="margin-top:600px;">
    <a href="#" style="margin-top:600px;"><img src="images/menu2.jpg" width="300px" height="300px"></a>
</div>

<div class="podpis">
        <h2>БУДЬ ВСЕГДА В КУРСЕ ВЫГОДНЫХ ПРЕДЛОЖЕНИЙ</h2>
        <h3>Подписывайся и следи за новинками и выгодными предложениями</h3>
        <form>
            <input type="text" name = "mail" placeholder="Ваша почта">
            <input type="submit" value="Подписаться">
        </form>
<?php
    $email = $_GET['mail'];

    $z1 = '@';
    $z2 = '.';

    $a1 = stripos($email, $z1);
    $a2 = stripos($email, $z2);

    if ($a1 === false || $a2 === false)
    {
        print "Указан некорректный email <br>";
    }
    else if ($a1 !== false || $a2 !== false)
    {
        echo "Вы успешно подписались!";
    }
?>
</div>


<?php include 'temp/footer.php'; ?>