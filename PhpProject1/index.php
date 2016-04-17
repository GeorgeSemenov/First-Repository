<?php
/*echo mb_strlen($string,'UTF-8');//Подсчитаем длину строки

//Мастерский переворот строки!!!
$str = '123разДваТри\?';
$invertStr = iconv('utf-8', 'utf-16le',$str);
$invertStr = strrev ($invertStr);
$invertStr = iconv('utf-16be', 'utf-8',$invertStr);
echo $invertStr;
//Инфа отсюда : http://bolknote.ru/2012/04/02/~3625#56
 

//Сравнение строk
$a = 'Ха хашка';
$b = 'хА хАшка';
if(mb_strtolower($a,'UTF-8') == mb_strtolower($b,'UTF-8'))
{echo "Строки совпадают";}
else {echo "Строки не совпадают";}*/

//убираем пробел из строки.
/*$str = "Пирчет мойя звать ЖИРИ жирный ыыыы  ";
$strNonSpaces = str_replace(" ","",$str);
echo $strNonSpaces;*/

//Копируем часть строки в другую переменную
/*$str = "Креветки плывут в рот";
$cutStr = mb_substr($str,5,5,'UTF-8');
echo $cutStr;*/

//Теперь пора браться за саму работу.

function revStr($str){
   $str=iconv('utf-8', 'utf-16le',$str);
   $str=strrev ($invertStr);
   $str=iconv('utf-16be', 'utf-8',$invertStr);
   return $str;
}

function isPalindrom($str){
   $isPalindrom=false;
   $str = str_replace(" ","",$str);
   if(mb_strtolower($str,'UTF-8) == mb_strtolower(revStr($str,'UTF-8'))){
   $isPalindrom=true;
}
   return $isPalindrom;
}

$str = "Сюда вводится строка для проверки на палиндром";
$originalLength = mb_strlen($str,'UTF-8');
n=0;
//for($i=0;i

?>
