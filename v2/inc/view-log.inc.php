<?php
if(is_file('log/' . PATH_LOG)) :
    $file = file('log/' . PATH_LOG);
    
    echo"<ol>";
    
    foreach($file as $line):
        list($dt, $page, $ref) = explode("|", $line);
        $dt = date("H:i:s d:m:Y", (int)$dt);
        $ref = substr_replace($ref, " \ ", 0, 13); 
        echo"<li>";
            echo "[$dt] : $ref => $page";
        echo"</li>";
    endforeach;
    echo"</ol>";
endif;

