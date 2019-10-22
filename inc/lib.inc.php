<?php
function drawTable($cols, $rows, $num, $color){
	static $cnt = 0;
	$cnt++;
		echo "Таблица рисуется $cnt раз";
    echo "<table border =$num>";
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
}
?>