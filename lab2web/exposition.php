<!doctype html>
<html lang="en">

<?php
require_once 'logic.php';
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

      <div class="me-auto"><a href="#"><img src="./images_page/logo.jpg" alt="" height="45" width="158"></a></div>

      <ul class="nav nav-pills">
        <!-- <li class="nav-item"> <a href="#"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          </a></li> -->
        <li class="nav-item"><a href="#" class="nav-link" style="color: black;">Купить билет</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: black;">Стать другом</a></li>
        <li class="nav-item"><a href="#" class="nav-link" style="color: black;">Интернет магазин</a></li>
        <li class="nav-item"><a href="#"><img src="./images_page/bell.png" height="25" width="25"
              style="margin-top: 5px;"></a></li>
        <li class="nav-item"><a href="#" class="nav-link">🔎</a></li>
        <li class="nav-item">
          <div class="dropdown" style="color: black; margin-top: 5px;">
            <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
              aria-expanded="false">
              RU
            </p>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">RU</a></li>
              <li><a class="dropdown-item" href="#">EN</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </header>

    <div class="row">

      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            Посетителям
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li>
              <p class="dropdown-item">Спланируйте визит</p>
            </li>
            <li><a class="dropdown-item" href="#">Здания и часы работы</a></li>
            <li><a class="dropdown-item" href="#">Билеты, льготы и бесплатные дни</a></li>
            <li><a class="dropdown-item" href="#">Правила покупки и возврата билетов</a></li>
            <li><a class="dropdown-item" href="#">Экскурсии </a></li>
            <li><a class="dropdown-item" href="#">Аудиогид </a></li>
            <li><a class="dropdown-item" href="#">Контакты и отзывы </a></li>
            <li><a class="dropdown-item" href="#">Правила посещения </a></li>
            <li><a class="dropdown-item" href="#">Преподавателям </a></li>
            <li><a class="dropdown-item" href="#">Самостоятельные занятия </a></li>
            <li><a class="dropdown-item" href="#">Доступный музей </a></li>
          </ul>
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            Выставки
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Текущие выставки</a></li>
            <li><a class="dropdown-item" href="#">Будущие выставки</a></li>
            <li><a class="dropdown-item" href="#">Архив выставок</a></li>
            <li><a class="dropdown-item" href="#">Постоянные экспозиции</a></li>
          </ul>
        </div>
      </div>

      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            События
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Презентации</a></li>
            <li><a class="dropdown-item" href="#">Лекции</a></li>
            <li><a class="dropdown-item" href="#">Концерты и спектакли</a></li>
            <li><a class="dropdown-item" href="#">Творческие занятия</a></li>
            <li><a class="dropdown-item" href="#">Для друзей музея</a></li>
            <li><a class="dropdown-item" href="#">Архив событий</a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            Кино
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Фильмы в прокате</a></li>
            <li><a class="dropdown-item" href="#">Кинопрограммы</a></li>
            <li><a class="dropdown-item" href="#">Архив кино</a></li>
            <li><a class="dropdown-item" href="#">Все фильмы</a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            Образование
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Творческие занятия</a></li>
            <li><a class="dropdown-item" href="#">Программы к выставкам</a></li>
            <li><a class="dropdown-item" href="#">Лекторий</a></li>
            <li><a class="dropdown-item" href="#">Архив</a></li>
            <li><a class="dropdown-item" href="#">Семейные выходные</a></li>
            <li><a class="dropdown-item" href="#">Семинары</a></li>
            <li><a class="dropdown-item" href="#">Инклюзия и доступность</a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            Коллекция
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <div class="row">
              <div class="col">Наука</div>
              <div class="col">Купить изображение</div>
            </div>
            <div class="row">
              <div class="col">Издания</div>
              <div class="col">Видеоматериалы</div>
            </div>
            <div class="row">
              <div class="col"> Сувениры</div>
            </div>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="dropdown">
          <p class="dropdown-toggle" href="#" role="text" id="dropdownMenuLink" data-bs-toggle="dropdown"
            aria-expanded="false">
            Онлайн образование
          </p>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#"> </a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        Поддержать музей
      </div>
      <div class="col">
        Третьяковка онлайн
      </div>
      <div class="col">
        О музее
      </div>
    </div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" style="color: black; text-decoration: none;">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#"
            style="color: black; text-decoration: none;">Выставки</a></li>
      </ol>
    </nav>
  </div>

  <!-- форма фильтрации -->

  <div class="container text-align-center" style="padding:100px">
    <h1 style="text-align:  center;">Фильтрация результатов поиска </h1>


    <form method="GET" name="filter" id="form_filter">
      <h3 style="text-align:  center;">По названию картины: </h3>
      <div class="mb-3">
        <input type="text" class="form-control" id="1" placeholder="Введите название картины:" name="input_title" value="<?php if (isset($_GET['input_title']))
          echo $_GET['input_title'] ?>">
        </div>


        <div>
          <h3 style="text-align:  center;">По названию зала: </h3>
          <div class="mb-3">
            <input type="text" name="name_hall" class="form-control" id="2" placeholder="Введите название зала:" value="<?php if (isset($_GET['name_hall']))
          echo $_GET['name_hall'] ?>">
          </div>
        </div>

        <div>
          <h3 style="text-align:  center;">По описанию: </h3>
          <div class="mb-3">
            <input class="form-control" name="description" id="3" placeholder="Введите описание картины:" value="<?php if (isset($_GET['description']))
          echo $_GET['description'] ?>">

          </div>

          <div style="display: flex; justify-content: center">
            <button class="btn btn-primary" name="saveFilter">Применить фильтр</button>
            <button
              onclick="document.getElementById('1').value=''; document.getElementById('2').value=''; document.getElementById('3').value='';"
              class="btn btn-danger" name="clearFilter">Очистить фильтр</button>
          </div>
        </div>
      </form>
    </div>


    <!-- вывод данных -->

    <div class="container text-center mt-3">
    <?php if (count($result) > 0): ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Название зала</th>
            <th scope="col">Описание</th>
            <th scope="col">год создания</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($result as $item): ?>
            <tr>
              <th scope="row"><img src="./images_bd/<?= $item['image'] ?>" style="max-width: 200px;"></th>
              <td>
                <?= $item['title'] ?>
              </td>
              <td>
                <?= $item['hallName'] ?>
              </td>
              <td>
                <?= $item['description'] ?>
              </td>
              <td>
                <?= $item['year_of_creation'] ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>

    </table>
  </div>



  <!-- Footer -->
  <footer class="text-center text-lg-start bg-black text-white border-bottom border-secondary"
    style="margin-top: 135px;">

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start  py-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-1">
            <!-- Content -->
            <a href="#"><img src="./images_page/logo_dark.jpg" alt=""></a>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-3">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-3">
              О музее
            </h6>
            <p>
              <a href="#!" class="text-secondary">Ответы на частые вопросы</a>
            </p>
            <p>
              <a href="#!" class="text-secondary">История</a>
            </p>
            <p>
              <a href="#!" class="text-secondary">Проекты</a>
            </p>
            <p>
              <a href="#!" class="text-secondary">Попечительский совет</a>
            </p>
            <p>
              <a href="#!" class="text-secondary">Фонд поддержки</a>
            </p>
            <p>
              <a href="#!" class="text-secondary">Контакты</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-2">
            <!-- Links -->
            <h6 class="text-uppercase mb-3">
              Наука в музее
            </h6>
            <p>
              <a href="#!" class="text-secondary">Научные отделы</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-2">
            <!-- Links -->
            <h6 class="text-uppercase mb-3">
              Билеты
            </h6>
            <p>
              <a href="#!" class="text-secondary">Купить билет</a>
            </p>
            <p>
              <a href="#!" class="text-secondary">Возвраты</a>
            </p>
          </div>
          <!-- Grid column -->


          <!-- Grid column -->
          <div class="col-4">
            <!-- Links -->
            <h6 class="text-uppercase mb-4">
              Подпишитесь на новости
            </h6>

            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="ЭЛ.ПОЧТА">

              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <p class="form-check-label text-secondary mb-5" for="exampleCheck1" style="font-size: 12px;">
                  Подписываясь на рассылку, Вы соглашаетесь с политикой <br> обработки персональных данных</p>
              </div>
            </form>

            <div class="row py-2">
              <div class="text-uppercase">Давайте дружить</div>
            </div>
            <div class="row py-2">
              <div class="col-7">
                <a href="#"><img src="./images_page/vk-logo2.svg" height="22px" width="22px" alt=""></a>
                <a href="#"><img src="./images_page/youtube-logo.svg" height="22px" width="22px"
                    style="margin-left: 25px;" alt=""></a>
                <a href="#"><img src="./images_page/tripadvisor-logo.svg" height="22px" width="22px"
                    style="margin-left: 25px;" alt=""></a>
                <a href="#"><img src="./images_page/telegram-logo.svg" height="22px" width="22px"
                    style="margin-left: 25px;" alt=""></a>
                <a href="#"><img src="./images_page/odnoklassniki-logo.svg" height="22px" width="22px"
                    style="margin-left: 25px;" alt=""></a>
              </div>
            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <div class="row py-4 my-4">
          <div class="col-2">
            <a href="#"><img src="./images_page/RF.png" height="34px" width="193px" alt=""></a>
          </div>
          <div class="col-2 offset-6">
            <div class="row">
              <div class="col-3">
                <a href="#"><img src="./images_page/danger.png" height="30px" width="32px" alt=""></a>
              </div>
              <div class="col">
                <div class="text" style="font-size: 12px;">Сообщить об ошибке</div>
              </div>
            </div>

          </div>
          <div class="col-2">
            <div class="row">
              <div class="col-3">
                <a href="#"><img src="./images_page/estimation.png" height="30px" width="32px" alt=""></a>
              </div>
              <div class="col-9">
                <div class="text" style="font-size: 12px;">Оценка качества услуг<br>учреждений культуры</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- Footer -->

  <div class="text-center text-lg-start bg-black text-secondary">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <a href="#" class="text-secondary text-decoration-none" style="font-size: 13px;">Условия пользования
            материалов сайта</a>
          <br>
          <a href="#" class="text-secondary text-decoration-none" style="font-size: 13px;">Политика
            конфиденциальности</a>
        </div>
        <div class="col-4">
          <div class="text-secondary" style="font-size: 13px;margin-top: 5px;">
            2023 © Государственная Третьяковская галерея
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <div class="col-4 offset-6">
              <div class="text-secondary" style="font-size: 13px;margin-top: 5px;margin-left: 10px;">
                Разработка сайта -
              </div>
            </div>
            <div class="col-1">
              <a href="#" class="text-secondary text-decoration-none" style="font-size: 13px;">Infospice</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>