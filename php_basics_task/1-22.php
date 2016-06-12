<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<?php
    //1-4
    $name = "Nikita";
    $age = 20;
    echo "Меня зовут:$name мне $age лет. \n";

    //5-8
    if($age >= 0 and $age <= 17){
        echo "Вам еще рано работать.";
    }
    elseif($age >= 18 and $age <=59){
        echo "Вам еще работать и работать.";
    }
    elseif($age >59){
        echo "Вам пора на пенсию.";
    }
    else{
        echo "Неизвестный возраст.";
    }

    //9-12
    echo $date;
    $date = rand(1,7);
    switch ($date){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:{
            echo "Это рабочий день";
            break;
        }
        case 6:
        case 7:{
            echo "Это выходной.";
            break;
        }
        default:{
            echo "Неизвестный день.";
        }
    }

    //13
    $s=12;
    $t=120;
    echo "speed = ". $t/$s;

    //14
    $foo='10';
    $bar=(int) $foo;

    //15
    $a=3;
    $operator='%';
    $b=3;

    switch ($operator){
        case '+':{
            echo $a+$b;
            break;
        }
        case '-':{
            echo $a-$b;
            break;
        }
        case '*':{
            echo $a*$b;
            break;
        }
        case '/':{
            if($b==0){
                echo "error";
                break;
            }
            echo $a/$b;
            break;
        }
        case '%':{
            if($b==0){
                echo "error";
                break;
            }
            echo $a%$b;
            break;
        }
    }

    if($a>$b){
        echo " $a > $b";
    }
    elseif($b>$a){
        echo " $b > $a";
    }
    else{
        echo " $a = $b";
    }

    $a='78'; $b=78;
    if($a == $b){
        var_dump($a,$b);
    }
    if($a === $b){
        echo "not";
    }
 // 22
    $bool= (boolean) 0;
    echo var_dump($bool);
?>