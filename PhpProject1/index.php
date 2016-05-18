/*Задача : указывается строка в переменную $str . Далее приложение должно определить
является ли данная строка палиндромом , если да то выводит всю строку 
если же нет , то находится максимально длинная подстрока , являющаяся палиндромом.
Если же таковой нет , то выводится первый символ строки.*/
<?php
//блок схема : http://i.imgur.com/RmTd11z.png
function revStr($str){
   $str=iconv('utf-8', 'utf-16le',$str);
   $str=strrev ($str);
   $str=iconv('utf-16be', 'utf-8',$str);
   return $str;
}

function isPalindrom($str){
   $isPalindrom=false;
   $str = str_replace(" ","",$str);
   if((mb_strtolower($str,'UTF-8') == mb_strtolower(revStr($str),'UTF-8'))&&(mb_strlen($str,'UTF-8')!=1)){
   $isPalindrom=true;
}
   return $isPalindrom;
}

$str = "Потенциальны палиндром вводится сюда.";
$length = $originalLength = mb_strlen($str,'UTF-8');
$n=0;
while ($length > 1)
{
    $chStr = mb_substr($str,$n,$length,'UTF-8');
    $chStr = str_replace(" ","",$chStr);
    if ((mb_strlen($chStr,'UTF-8') == 0) && ($length == $originalLength)){//Это условие может быть выполенно только в первую итерацию цикла while, т.к. далее $length будет только уменьшаться.
        echo "В проверяемой строке нет символов , кроме пробелов. Приложение будет остановлено";
        break ;
    }else if (isPalindrom($chStr)){
        break ;
    }else {
        if (($n + $length)<$originalLength){
            $n++;
        }else{
            $length--;
            $n=0;
            if ($length == 1) {
                break ;
            }
        }
    }
}
echo mb_substr($str,$n,$length,'UTF-8');
?>
