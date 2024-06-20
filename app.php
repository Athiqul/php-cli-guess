#!/c/php-8.2.5-Win32-vs16-x64/php

<?php 

require __DIR__.'/vendor/autoload.php';
use App\GuessGame;

// $minNumber=readline("Please enter minimum number of guessing game you wish to \n");

// $maxNumber=readline("Please enter maximum number of guessing game you wish to \n");

$options=getopt('min::max::',['min::','max::']);

$minNumber=$options['min']??1;

$maxNumber=$options['max']??10;
$guessGame = new GuessGame($maxNumber,$minNumber);
$bool=true;
while($bool)
{
    $userNumber = readline("Please enter your guessing number \n");
    $bool=$guessGame->guessNumber($userNumber);
}
 
?>