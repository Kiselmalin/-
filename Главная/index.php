<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

 require_once '..\Главная\config\connect.php';

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MIRACLE PAY - Главная страница</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="images/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Roboto:ital,wght@0,400;0,700;1,400&family=Zen+Dots&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div id="logo" a href ="#" onclick="slowScroll('#top')">
      <span>MIRACLE PAY</span>
    </div>
    <div id="about">
      <a href="#" onclick="slowScroll('#top')" title="О НАС">О НАС</a>
      <a href="..\Главная\product.php" onclick="slowScroll('#value')" title="ВАЛЮТА">ВАЛЮТА</a>
      <a href="#" onclick="slowScroll('#advantages')" title="ПРЕИМУЩЕСТВА">ПРЕИМУЩЕСТВА</a>
      <a href="#" onclick="slowScroll('#information')" title="ПОДДЕРЖКА И КОНТАКТЫ">ПОДДЕРЖКА И КОНТАКТЫ</a>
      <a href="#myModal" onclick="slowScroll('#myModal')" title="ВХОД">ВХОД</a>
    </div>
  </header>

  <div id="top">
    <h1>О НАС</h1>
	<h3>MIRACLE PAY - это сайт который предоставляет пользователям услуги по приобретению игровой валюты по самым выгодным ценам. </h3>
  </div>

  <div id="value">
    <h2>Валюта</h2>
    <a href="#all"><h3>Посмотреть все</h3></a>
    <div class="images">
      <div class="img">
        <a href="#money"><img src="img/XBOX ONE.png" alt=""></a>
        <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
      </div>
    <div class="img">
      <a href="#money"><img src="img/XBOX ONE.png" alt=""></a>
      <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
    </div>
    <div class="img">
      <a href="#money"><img src="img/XBOX ONE.png" alt=""></a>
      <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
    </div>
    <div class="img">
      <a href="#money"><img src="img/XBOX ONE.png" alt=""></a>
      <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
    </div>
    <div class="img">
    <a href="#addition"><img src="img/🦆 icon _add square_.png" alt=""></a>
      <a href="#addition"> <span>ДОБАВИТЬ</span></a>
  </div>
  </div>


  <div id="advantages">
    <div class="intro">
      <h2>Преимущества MIRACLE PAY</h2>
    </div>
    <div class="text">
      <span>Если сравнивать FunPay с обычным магазином, то преимущества очевидны:<br> Во-первых, самая лучшая цена.<br>
        Во-вторых, мгновенная доставка. Поскольку вы покупаете без посредников, напрямую у продавцов, вы получаете не только лучшую цену, но и мгновенную доставку, ведь все товары находятся в наличии, и поэтому сразу же передаются вам.<br>
        В-третьих, честные отзывы. После совершения оплаты, покупатель имеет возможность написать отзыв о работе продавца, причём ещё до завершения заказа. </span>
    </div>
  </div>

  <div id="information">
    <div>
    <h1>Поддержка и контакты<br></h1>
          <span class="heading">Социальные сети<br></span>
          <img src = "img/🦆 icon _telegram_.png">
          <img src = "img/🦆 icon _Vkontakte_.png">
          <img src = "img/🦆 icon _youtube_.png">
    </div>
    <div class="copyright">
      <p><span>&copy; 2015-2023 MIRACLE PAY. Все права защищены.</span></p>
    </div>
    <div class="contacts">
        <img src="img/telephone1.png">Наши контакты
      <p>+78005553535<br>+79189793982</a></p>
    </div>
  </div>


  <div id="money" class="money">
    <a href="#about" class="money_area"></a>
    <div class="money_body">
      <div class="money_content">
        <a href="#about" class="money_close">X</a>
        <div class="money_title">ВАЛЮТА НА XBOX ONE</div>
        <div class="money_img">
          <img src="img/XBOX ONE.png" alt="">
        </div>
        <div class="money_text">
          Валюта наличными на счёт</br>
          -530.000.000 = 1490₽ </br>
          Информация:</br>
          Время выполнения заказа: от 7 суток (с момента предоставления корректных данных)</br>
          УСПЕЙ ЗАКАЗАТЬ, КОЛИЧЕСТВО ОГРАНИЧЕНО</br>
          <form>
            <input type="button" value="КУПИТЬ">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id ="myModal" class="modal">
    <a href="#about" class="modal_area"></a>
    <div class="modal_body">
      <div class="modal_content">
        <a href="#about" class="modal_close">X</a>
        <div class="modal_title">ВХОД</div>
        <div class="modal_text">
          <form>
            <input type="text" name="username" class="username form-control" placeholder="Логин"/></br>
            <input type="password" name="password" class="password form-control" placeholder="Пароль"/></br>
            <input class="btn login" type="submit" value="Войти" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id ="addition" class="addition">
    <a href="#about" class="addition_area"></a>
    <div class="addition_body">
      <div class="addition_content">
        <a href="#about" class="money_close">X</a>
        <form action="vendor/create.php" method="post">
          <p>Название товара</p>
          <input type="text" name="Product_Name">
          <p>Описание/Состав товара</p>
          <textarea name ="Product_Composition"></textarea>
          <p>Цена</p>
          <input type ="number" name="Product_Price"><br>
          <button type="submit">Добавить новый товар</button>
        </form>
      </div>
    </div>
  </div>
  <div id="all" class="all">
    <a href="#about" class="all_area"></a>
    <div class="all_body">
      <div class="all_content">
      <a href="#about" class="all_close">X</a>
      <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr>

        <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - composition
             */

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><a href="update.php?id=<?= $product[0] ?>">Обновить</a></td>
                        <td><a style="color: red;" href="vendor\delete.php?id=<?= $product[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
      </table>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>