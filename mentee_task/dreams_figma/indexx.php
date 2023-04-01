<?php
    function url($text)
    {
        $text=html_entity_decode($text);
        $text="".$text;
        $text=preg_replace('/(https{0,1}:\/\/[\w\-\.\/#?&=]*)/','<a href="$1" target="_blank">$1</a>',$text);
        return $text;
    }

    $exampl = "Haai da kena Punda https://www.youtube.com/watch?v=vEsY9kkdTNc&ab_channel=Mvochoa-English";

    $text_final=url($exampl);

    echo"$text_final";
?>