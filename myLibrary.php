<?php
function webColors($red, $green, $blue){
    function ft_dechex($ft_color){
        if ($ft_color <16) 
            return "0".dechex($ft_color);
        else 
            return dechex($ft_color);
    }
    return "#".ft_dechex($red).ft_dechex($green).ft_dechex($blue);
}
?>