<?php
	error_reporting(0);
	require_once"inc/lib.inc.php";	
	require_once"inc/data.inc.php";	
?>
<!DOCTYPE html>
<html>

<head>
  <title>О сайте</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>О нашем сайте</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <p>
      Сайт создан на общественных началах и управляется на некоммерческой основе. Все фотографии и материалы предоставлены и используются с ведома и при участии администрации школы.
    </p>
    <h3>Цели создания проекта</h3>
    <ol>
      <li>поднятие престижа нашей школы.</li>
      <li>для информирования родителей будущих учеников нашей школы.</li>
      <li>для возобновления утраченных связей между выпускниками и учителями, с предоставлением им информационного пространства для общения.</li>
      <li>для общения учеников во внеурочное время.</li>
    </ol>
    <h3>Советы и предупреждения</h3>
    <p>
      Сайт оптимизирован под все браузеры. Наилучшее качество просмотра достигается при разрешении экрана монитора - 1280 на 1024 точек.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
  	<?php
			require_once"inc/menu.inc.php";	
		?>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
			require_once"inc/bottom.inc.php";	
		?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>