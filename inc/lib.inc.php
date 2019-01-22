<?php
	function deawMenu($menu,  $vertical=true){
		$style = "";
		if(!$vertical)
			$style = "dislay-inline: inline; margin-right: 15px;";
		echo "<ul$style>";
		foreach($menu as $item){
			echo "<li>";
			echo"<a href='{$item['href']}'{$item['link']}></a>";
			echo "</li>";
		}
		echo "</ul>";
			
	}
?>    
    <!-- Таблица -->
    <?php
		//$cnt = 0;
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
//    drawTable(10, 10, 1, '#ccb');

    ?>
    <!-- Таблица -->