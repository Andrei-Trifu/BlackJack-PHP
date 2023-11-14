<!DOCTYPE html>
<h1>BlackJack Game</h1>
</html>


<?php


class Deck 
{
   public $cardValue =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
   public $cardName = ['Spades', 'Hearts', 'Diamonds', 'Clubs'];

   public function drawCards() 
   {
     shuffle($this->cardValue);
     shuffle($this->cardName);

     $randomCardValue1 = array_pop($this->cardValue);
     $randomCardName1 = array_pop($this->cardName);

     $randomCardValue2 = array_pop($this->cardValue);
     $randomCardName2 = array_pop($this->cardName);

     $randomCardValue3 = array_pop($this->cardValue);
     $randomCardName3 = array_pop($this->cardName);

     $randomCardValue4 = array_pop($this->cardValue);
     $randomCardName4 = array_pop($this->cardName);



     $playerTotal = $randomCardValue1 + $randomCardValue2;
     $dealerTotal = $randomCardValue3 + $randomCardValue4;
 
     echo "Player cards:<br>$randomCardValue1-$randomCardName1<br>$randomCardValue2-$randomCardName2<br><br>";
      

     echo "Player cards:<br>$randomCardValue3-$randomCardName3<br>$randomCardValue4-$randomCardName4<br><br>";

     echo 'Player total:' . $playerTotal . '<br>';
     echo 'Dealer total:' . $dealerTotal;

     if($playerTotal > 21 && $dealerTotal > 21 ) 
     {
        return "It's a draw! Both players bust.";
     } elseif($playerTotal >21 && $dealerTotal <= 21){
        return "Dealer wins! Player bust.";
     } elseif($playerTotal <=21 && $dealerTotal >21) {
        return "Player wins! Dealer bust.";
     } elseif($playerTotal == $dealerTotal) {
        return "It's a draw! Both players have the same score.";
    } else {
        if($playerTotal > $dealerTotal) {
            return "Player wins";
        } else {
            return 'Dealer wins';
        }
    }
     
   }


   public function PlayGame () 
   {
     return "<br>Winner: <br />" . $this->drawCards();
   }

   
    }
   


$deck= new Deck();
echo ($deck->PlayGame()) . '<br /> <br />';






