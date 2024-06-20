<?php 
namespace App;
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


 
?>