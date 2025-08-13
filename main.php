<?php

function calculate($a,$b,$command ): mixed {
        switch($command){
            case'add':
                return $a + $b;
            case'subtract':
                return $a - $b;
            case'multiply':
                return $a * $b;
            case'divide':
                if ($b == 0) {
                    return "Cannot divide by zero";
                }    
                return $a / $b;
        }
    }
    
    

    echo calculate(a: 10, b: 20, command: 'add') . "\n";
    echo "\n<br>";
    echo calculate(a: 50, b: 70, command: 'subtract');
    echo "\n<br>";
    echo calculate(a: 9, b: 9, command: 'multiply') ."\n";
    echo "\n<br>";
    echo calculate(a: 100, b: 20, command: 'divide') . "\n";
    echo "\n<br>";
    

    $str= "Hello, Websys";
    echo strlen(string:$str) ;
    
?>