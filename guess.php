#!/c/php-8.2.5-Win32-vs16-x64/php

<?php 

class GuessGame
{
   private $maxNumber,$minNumber,$attempt=0,$rightNumber;
   public function __construct($maxNumber=1,$minNumber=10)
   {
    $this->maxNumber = $maxNumber;
    $this->minNumber = $minNumber;
    $this->rightNumber = rand($this->minNumber,$this->maxNumber);
   }

    public function guessNumber($userNumber)
    {
        if($this->rightNumber==$userNumber)
        {
            $this->attempt++;
            echo "You are successfully guessed right number $userNumber on ".($this->attempt).' number of attempts'.PHP_EOL;
            return false;
        }
        else if($this->rightNumber>$userNumber)
        {
            $this->attempt++;
            echo "You guessed wrong number $userNumber.Its little bit more bigger. Try again ". $this->attempt." attempts done".PHP_EOL;
            return true;
        }
        else{
            $this->attempt++;
            echo "You guessed wrong number $userNumber.Its little bit more smaller. Try again ". $this->attempt." attempts done".PHP_EOL;
            return true;
        }
    }
}

$minNumber=readline("Please enter minimum number of guessing game you wish to \n");

$maxNumber=readline("Please enter maximum number of guessing game you wish to \n");

$guessGame = new GuessGame($maxNumber,$minNumber);
$bool=true;
while($bool)
{
    $userNumber = readline("Please enter your guessing number \n");
   $bool=$guessGame->guessNumber($userNumber);
}
 
?>