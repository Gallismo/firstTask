<?php
//1. PHP и HTML. Напишите код на PHP
//В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
//Нужно в переменную $b записать сокращенный текст новости по правилам:
//- обрезать до 180 символов
//- приписать многоточие
//- последние 2 слова и многоточие сделать ссылкой на полный текст новости.
//Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
//    Результат: ссылка на репозиторий с кодом и ваши комментарии.
$a = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";
$link = 'http://lorem-ipsum.com/news/Lorem';
$tempArray = explode(" ", mb_substr($a, 0, 180));
$count = count($tempArray)-1;
$linkStr = $tempArray[$count-1]." ".$tempArray[$count]."...";
unset($tempArray[$count-1]);
unset($tempArray[$count]);
$b = implode(" ", $tempArray)." <a href='$link'>$linkStr</a>";
echo $a;
echo $b;