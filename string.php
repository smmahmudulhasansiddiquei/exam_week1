<?php

    $strings = ["Hello", "World", "PHP", "Programming"];

    foreach($strings as $key => $string){
        // echo "original string : $string \n";
       
        $vowels = ["a","A","e","E","i","I","o","O","u","U"];
        $explodeedString = explode(" ", $string);
        foreach($explodeedString as $index => $explode){
            $vowelCount = 0;
            for($i = 0; $i < strlen($string); $i++){
                if(in_array($string[$i], $vowels)){
                    $vowelCount++;
                }
            }
        }
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: " . strrev($string) . "\n <br>";
    }

?>