<?php
function myErr($no, $msg, $file, $line){
    if($no == E_USER_ERROR) {
			echo 'Что-то случилось';
      $str = date("d-m-Y H:i:s") . " - $msg in $file : $line\n";
			error_log($str, 3, "error.log");
    }
 
}
function drawTable($cols, $rows, $border, $color){
	static $cnt = 0;
	$cnt++;
		echo "Таблица рисуется $cnt раз";
    echo "<table border =$border>";
    for($tr=1; $tr<= $rows; $tr++) {
        echo"<tr>"; 
        for($td=1; $td<=$cols; $td++){
            if($tr == 1 or $td == 1)
                echo"<th style='background:$color'>".$tr*$td.'</th>';
            else
                echo"<td>". $tr*$td  .'</td>';
        }
        echo"</tr>";
    }
    echo"</table>";
}
function drawMenu($menu, $vertical = true){
    if(!is_array($menu))
        return false;
    $style = "";
    if(!$vertical)
        $style = "class='menu-inline'";
    echo "<ul $style>";
        foreach($menu as $item){
            echo"<li>";
            //echo"<a href='".$item['href']."'>".$item['link']."</a>";
            echo"<a href='{$item['href']}'>{$item['link']}</a>";
            echo'</li>';
            // echo"<li><a href='{$item['href']}'>{$item['link']}</a></li>"; В одну строку
        }
    echo '</ul>';
		return true;
}
?>