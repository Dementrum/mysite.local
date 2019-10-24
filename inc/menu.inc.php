<h2>Навигация по сайту</h2>
<?php
    if(!drawMenu($leftMenu))
        trigger_error("Проблема с отрисовкой меню", E_USER_ERROR);
?>