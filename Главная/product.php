<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>MIRACLE PAY - ВАЛЮТА</title>
  <link rel="stylesheet" href="product.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="images/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Roboto:ital,wght@0,400;0,700;1,400&family=Zen+Dots&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="logo"> <a href ="..\Главная\1.html" onclick="slowScroll('#top')">
          <span>MIRACLE PAY</span>
        </div>
        <div id="about">
          <a href="..\Главная\index.php" onclick="slowScroll('#top')" title="О НАС">О НАС</a>
          <a href="#valute" onclick="slowScroll('#valute')" title="ВАЛЮТА">ВАЛЮТА</a>
          <a href="..\Главная\index.php" onclick="slowScroll('#advantages')" title="ПРЕИМУЩЕСТВА">ПРЕИМУЩЕСТВА</a>
          <a href="#information" onclick="slowScroll('#information')" title="ПОДДЕРЖКА И КОНТАКТЫ">ПОДДЕРЖКА И КОНТАКТЫ</a>
          <a href="#myModal" onclick="slowScroll('#myModal')" title="ВХОД">ВХОД</a>
        </div>
      </header> 

    <div id="valute">
       <h1>Валюта</h1>
        <div class="images">
            <div class="img">
                <a href="#money"><img src="img\XBOX ONE.png" alt=""></a>
                <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
            </div>
            <div class="img">
              <a href="#money"><img src="img\XBOX ONE.png" alt=""></a>
              <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
            </div>
            <div class="img">
              <a href="#money"><img src="img\XBOX ONE.png" alt=""></a>
              <a href="#money"><span>ВАЛЮТА НА XBOX ONE</span></a>
            </div>
        </div>
    </div>

    <div id="sets">
        <h1>Наборы</h1>
        <div class="images">
            <div class="img">
                <a href="#popup"><img src="img\НАБОР.png" alt=""></a>
                <a href="#popup"><span>НАБОР</span></a>
            </div>
            <div class="img">
              <a href="#popup"><img src="img\НАБОР.png" alt=""></a>
              <a href="#popup"><span>НАБОР</span></a>
            </div>
            <div class="img">
              <a href="#popup"><img src="img\НАБОР.png" alt=""></a>
              <a href="#popup"><span>НАБОР</span></a>
            </div>
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
  <div id="popup" class="popup">
    <a href="#about" class="popup_area"></a>
    <div class="popup_body">
      <div class="popup_content">
        <a href="#about" class="popup_close">X</a>
        <div class="popup_title">НАБОР</div>
        <div class="popup_img">
          <img src="img\НАБОР.png" alt="">
        </div>
        <div class="popup_text">
          Данный товар находится в разработке</br>
          Поэтому здесь ничего нет</br>
          Но вы не расстраивайтесь</br>
          <form>
            <input type="button" value="ТЫК">
          </form>
        </div>

      </div>
    </div>
  </div>
  <div id="money" class="money">
    <a href="#about" class="money_area"></a>
    <div class="money_body">
      <div class="money_content">
        <a href="#about" class="money_close">X</a>
        <div class="money_title">ВАЛЮТА НА XBOX ONE</div>
        <div class="money_img">
          <img src="img\XBOX ONE.png" alt="">
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
</body>
</html>