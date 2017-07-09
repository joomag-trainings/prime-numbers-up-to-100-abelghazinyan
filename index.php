<?php
/**
 * Created by PhpStorm.
 * User: abelghazinyan
 * Date: 7/9/17
 * Time: 5:59 PM
 */
    echo "<ul><li>2</li>";
    for($j=3;$j<=100;$j++){
        $bool = true;
        for($i = 2; $i <= floor(sqrt($j)); $i++){
            if($j % $i == 0){
                $bool = false;
                break;
            }
        }
        if($bool){
            echo "<li>{$j}</li>";
        }
    }
    echo "</ul>";