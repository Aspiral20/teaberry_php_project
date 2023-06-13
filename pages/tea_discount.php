<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TeaInfo</title>
  <link rel="icon" href="../images/tea_main/logo.png">
  <!-- Adaptive -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../fonts/Gilroy-Bold/style.css">
  <link rel="stylesheet" href="../fonts/Gilroy-Light/style.css">
  <link rel="stylesheet" href="../fonts/Gilroy-Medium/style.css">
  <link rel="stylesheet" href="../fonts/Gilroy-Regular/style.css">
  <link rel="stylesheet" href="../fonts/MarkerFelt-Thin/style.css">

  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/adaptive.css">
  <link rel="stylesheet" href="../css/pages_tea_discount/tea_discount.css">
  <link rel="stylesheet" href="../css/defaultCSS.css">
</head>
<body>

<div id="scroll-percent"></div>

<div class="left_menu__open">⍟</div>
<div class="opacity_fon" id="js_of">
  <div class="left_menu">
    <div class="left_menu__header">
      <a href="../index.php" class="left_menu__main-icon">
        <img src="../images/tea_main/logo.png" alt="">
      </a>
      <div class="left_menu__close" id="js_lmc">⍟</div>
    </div>
    <div class="left_menu__content">
      <a href="tea_assorts.php" class="left_menu__body">Ассортименты</a>
      <a href="tea_picking.php" class="left_menu__body">Сбор чая</a>
      <a href="#" class="left_menu__body active">Акции</a>
      <a href="tea_properties.php" class="left_menu__body">Своиства</a>
      <a href="tea_contacts.php" class="left_menu__body">Контакты</a>
    </div>
  </div>
</div>

<div id="header">
  <div id="menu">
    <div id="burger">☰</div>
    <div id="menu-item-logo-second">
      <a href="#" class="menu-item">
        <img src="../images/tea_main/logo.png" alt="">
      </a>
    </div>
    <div id="menu-items">
      <div id="menu-items-container">
        <div id="menu-close">✖</div>
        <a href="tea_assorts.php" class="menu-item">Ассортимент</a>
        <a href="tea_picking.php" class="menu-item">Как мы собираем чай</a>
        <a href="#" class="menu-item active">Наши акции</a>
        <div id="menu-item-logo-first">
          <a href="../index.php" class="menu-item">
            <img src="../images/tea_main/logo.png" alt="">
          </a>
        </div>
        <a href="tea_properties.php" class="menu-item">Полезные свойства</a>
        <a href="tea_contacts.php" class="menu-item">Контакты</a>
      </div>
    </div>
  </div>
</div>

<div id="shares">
  <img class="shares-bgabsolute" src="../images/tea_main/shares-bgabsolute.png" alt="">
  <div id="shares-container" class="wow animate__flipInX">
    <div id="shares-leaves">
      <img class="shares-absolute-img" src="../images/tea_main/shares-absolute-img.png" alt="">
    </div>
    <h2 class="text-header">
      Акция для новых клиентов
    </h2>
    <div id="shares-content">
      <img class="shares-relative-img" src="../images/tea_main/shares-relative-img.png" alt="">
      <div class="shares-relative-content">
        <div class="info-discount">
          Дарим скидку <span class="green-bold-span">5%</span> на первый заказ!
        </div>
        <div class="info-discount">
          Скопируйте промокод из письма и ставьте чайник
        </div>
        <div class="shares-form-block">
          <div id="shares-true-discount">
            <span>Мы отправили промокод на указанную почту</span>
          </div>
          <form action="" id="shares-form">
            <div class="shares-input-block">
              <input type="email" placeholder="example@gmail.com" name="discount" class="shares-input">
              <p class="text-error">Заполните поле!</p>
            </div>
            <button type="button" class="shares-button btn">
              Получить скидку
              <img src="../images/tea_main/teaButton.png" alt="">
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="footer" class="pages">
  <div id="footer-container">
    <img class="footer-flower" src="../images/tea_main/footer-flower.png" alt="">
    <div id="footer-logo">
      <img src="../images/tea_main/logo.png" alt="">
    </div>
    <div id="pickup">
      <div class="content">
        <h3>
          Пункты самовывоза:
        </h3>
        <div class="item">
          г. Москва, Люберцы, ул. Озерная, 5
        </div>
        <div class="item">
          г. Москва, ТЦ «Метрополь», 2 этаж
        </div>
        <div class="item">
          г. Москва, пр-т Некрасова, 25
        </div>
      </div>
    </div>
    <span class="rights">Все права защищены, 2022</span>
    <div id="worktime">
      <div class="content">
        <h3>
          Режим работы:
        </h3>
        <div class="item">
          Пн-Пт с 10:00 до 20:00
        </div>
        <div class="item">
          Сб-Вс с 10:00 до 18:00
        </div>
      </div>
    </div>
    <span class="studio">Разработка сайта: студия Designer</span>
    <div id="numbers">
      <div class="content">
        <h3>
          Телефоны:
        </h3>
        <div class="item">
          +7 (495) 384-66-76
        </div>
        <div class="item">
          +7 (495) 584-76-86
        </div>
      </div>
    </div>
    <div id="networks">
      <div class="networks-content">
        <a href="https://www.instagram.com/tea/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00096 512.00096">
            <path
              d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"/>
            <path
              d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"/>
            <path
              d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"/>
          </svg>
        </a>
        <a href="https://www.facebook.com/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
              d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"/>
          </svg>
        </a>
        <a href="https://www.youtube.com/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -62 512.00199 512">
            <path
              d="m334.808594 170.992188-113.113282-61.890626c-6.503906-3.558593-14.191406-3.425781-20.566406.351563-6.378906 3.78125-10.183594 10.460937-10.183594 17.875v122.71875c0 7.378906 3.78125 14.046875 10.117188 17.832031 3.308594 1.976563 6.976562 2.96875 10.652344 2.96875 3.367187 0 6.742187-.832031 9.847656-2.503906l113.117188-60.824219c6.714843-3.613281 10.90625-10.59375 10.9375-18.222656.027343-7.628906-4.113282-14.640625-10.808594-18.304687zm-113.859375 63.617187v-91.71875l84.539062 46.257813zm0 0"/>
            <path
              d="m508.234375 91.527344-.023437-.234375c-.433594-4.121094-4.75-40.777344-22.570313-59.421875-20.597656-21.929688-43.949219-24.59375-55.179687-25.871094-.929688-.105469-1.78125-.203125-2.542969-.304688l-.894531-.09375c-67.6875-4.921874-169.910157-5.5937495-170.933594-5.59765575l-.089844-.00390625-.089844.00390625c-1.023437.00390625-103.246094.67578175-171.542968 5.59765575l-.902344.09375c-.726563.097657-1.527344.1875-2.398438.289063-11.101562 1.28125-34.203125 3.949219-54.859375 26.671875-16.972656 18.445312-21.878906 54.316406-22.382812 58.347656l-.058594.523438c-.152344 1.714844-3.765625 42.539062-3.765625 83.523437v38.3125c0 40.984375 3.613281 81.808594 3.765625 83.527344l.027344.257813c.433593 4.054687 4.746093 40.039062 22.484375 58.691406 19.367187 21.195312 43.855468 24 57.027344 25.507812 2.082031.238282 3.875.441406 5.097656.65625l1.183594.164063c39.082031 3.71875 161.617187 5.550781 166.8125 5.625l.15625.003906.15625-.003906c1.023437-.003907 103.242187-.675781 170.929687-5.597657l.894531-.09375c.855469-.113281 1.816406-.214843 2.871094-.324218 11.039062-1.171875 34.015625-3.605469 54.386719-26.019532 16.972656-18.449218 21.882812-54.320312 22.382812-58.347656l.058594-.523437c.152344-1.71875 3.769531-42.539063 3.769531-83.523438v-38.3125c-.003906-40.984375-3.617187-81.804687-3.769531-83.523437zm-26.238281 121.835937c0 37.933594-3.3125 77-3.625 80.585938-1.273438 9.878906-6.449219 32.574219-14.71875 41.5625-12.75 14.027343-25.847656 15.417969-35.410156 16.429687-1.15625.121094-2.226563.238282-3.195313.359375-65.46875 4.734375-163.832031 5.460938-168.363281 5.488281-5.082032-.074218-125.824219-1.921874-163.714844-5.441406-1.941406-.316406-4.039062-.558594-6.25-.808594-11.214844-1.285156-26.566406-3.042968-38.371094-16.027343l-.277344-.296875c-8.125-8.464844-13.152343-29.6875-14.429687-41.148438-.238281-2.710937-3.636719-42.238281-3.636719-80.703125v-38.3125c0-37.890625 3.304688-76.914062 3.625-80.574219 1.519532-11.636718 6.792969-32.957031 14.71875-41.574218 13.140625-14.453125 26.996094-16.054688 36.160156-17.113282.875-.101562 1.691407-.195312 2.445313-.292968 66.421875-4.757813 165.492187-5.464844 169.046875-5.492188 3.554688.023438 102.589844.734375 168.421875 5.492188.808594.101562 1.691406.203125 2.640625.3125 9.425781 1.074218 23.671875 2.699218 36.746094 16.644531l.121094.128906c8.125 8.464844 13.152343 30.058594 14.429687 41.75.226563 2.558594 3.636719 42.171875 3.636719 80.71875zm0 0"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<script src="../js/wow.min.js"></script>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/slick/slick.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/pages_tea_discount/tea_discount.js"></script>
</body>
</html>

