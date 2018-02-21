<!DOCTYPE html>
<html>
    <head>
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Silverjack</title>
    </head>
    <body>
        
    </body>
</html>
<?php

    $suit = array("hearts"=>array("./img/cards/hearts/1.png","./img/cards/hearts/2.png","./img/cards/hearts/3.png","./img/cards/hearts/4.png","./img/cards/hearts/5.png",
    "./img/cards/hearts/6.png","./img/cards/hearts/7.png","./img/cards/hearts/8.png","./img/cards/hearts/9.png","./img/cards/hearts/10.png","./img/cards/hearts/11.png",
    "./img/cards/hearts/12.png","./img/cards/hearts/13.png"), "diamonds" => array("./img/cards/diamonds/1.png","./img/cards/diamonds/2.png","./img/cards/diamonds/3.png","./img/cards/diamonds/4.png","./img/cards/diamonds/5.png",
    "./img/cards/diamonds/6.png","./img/cards/diamonds/7.png","./img/cards/diamonds/8.png","./img/cards/diamonds/9.png","./img/cards/diamonds/10.png","./img/cards/diamonds/11.png",
    "./img/cards/diamonds/12.png","./img/cards/diamonds/13.png"), "spades" => array("./img/cards/spades/1.png","./img/cards/spades/2.png","./img/cards/spades/3.png","./img/cards/spades/4.png","./img/cards/spades/5.png",
    "./img/cards/spades/6.png","./img/cards/spades/7.png","./img/cards/spades/8.png","./img/cards/spades/9.png","./img/cards/spades/10.png","./img/cards/spades/11.png",
    "./img/cards/spades/12.png","./img/cards/spades/13.png"),"clubs" => array("./img/cards/clubs/1.png","./img/cards/clubs/2.png","./img/cards/clubs/3.png","./img/cards/clubs/4.png","./img/cards/clubs/5.png",
    "./img/cards/clubs/6.png","./img/cards/clubs/7.png","./img/cards/clubs/8.png","./img/cards/clubs/9.png","./img/cards/clubs/10.png","./img/cards/clubs/11.png",
    "./img/cards/clubs/12.png","./img/cards/clubs/13.png"));
   
   $player_images = array("Chris"=>"./img/players/kitty1.png", "Sam" => "./img/players/kitty2.png", "Bob" => "./img/players/kitty3.png", "PowderPuff" => "./img/players/kitty4.png");
   
   
    $players = array();
   
    function getHand($players,$player,$suit){
        $points = 0;
        $card_index = array();
        $suit_index = array("hearts","diamonds","spades","clubs");
        $deal = true;
       
            while($deal)
            {
                $symbol = rand(0,3);
                $index = rand(0,12);
                
                if(!array_search(array($suit_index[$symbol],$index),$card_index))
                {
                    $points= $points + $index + 1;
                    
                    if($points > 42)
                    {
                        $points = $points - $index - 1;
                        $deal = false;
                    }
                    else {
                    
                        
                        
                            $card_index[] = array($suit_index[$symbol],$index);
                    
                    }
                
                }
                
            }
        
      
        
        $cards = array();
        
        foreach ($card_index as $index)
        {
            $cards[] = $suit[$index[0]][$index[1]];
        }
        
       
        $players[] = array($player,$cards,$points);
        
        
        return $players;
       
    }
    
    $players = getHand($players,$player_images["Chris"],$suit);
    $players = getHand($players,$player_images["Sam"],$suit);
    $players = getHand($players,$player_images["Bob"],$suit);
    $players = getHand($players,$player_images["PowderPuff"],$suit);
    
    
    
    
?>
