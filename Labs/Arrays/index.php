<!DOCTYPE html>
<html>
    <head>
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
        <title>Silverjack</title>
    </head>
    <body>
        <h1>Silverjack</h1>
        
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
   $player_names = array("Chris", "Sam", "Bob", "PowderPuff");

  
   
    $players = array();
    
    function getHand($players,$key,$player,$suit){
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
        
       
        $players[] = array(array($key, $player), $cards,$points);
        
        
        return $players;
       
    }
        
     
function displayWinner($players) 
{
 
     if($players[0][2] > $players[1][2] && $players[0][2] > $players[2][2] && $players[0][2] > $players[3][2])
     {
        $winner = $players[0][0][0]; 
        echo '<div class="winner">' . $winner . ' is the winner'. '</div>'; 
      
         
     }
    else if($players[1][2] > $players[0][2] && $players[1][2] > $players[2][2] && $players[1][2] > $players[3][2])
    {
        $winner = $players[1][0][0]; 
        echo '<div class="winner">' . $winner . ' is the winner'. '</div>'; 
    
    }
    else if($players[2][2] > $players[0][2] && $players[2][2] > $players[1][2] && $players[2][2] > $players[3][2])
    {
        $winner = $players[2][0][0]; 
        echo '<div class="winner">' . $winner . ' is the winner'. '</div>'; 
        return $winner; 
        
    }
    else if($players[3][2] > $players[0][2] && $players[3][2] > $players[1][2] && $players[3][2] > $players[2][2])
    {
        $winner = $players[3][0][0]; 
        echo '<div class="winner">' .$winner . ' is the winner' . '<div>'; 
        return $winner; 
    }
    else {
        echo '<div class="winner">' . ' Tie no winner' . '<div>'; 
    }
  
}
      
     
    
    $players = getHand($players,"Chris",$player_images["Chris"],$suit);
    $players = getHand($players,"Sam",$player_images["Sam"],$suit);
    $players = getHand($players,"Bob",$player_images["Bob"],$suit);
    $players = getHand($players,"PowderPuff",$player_images["PowderPuff"],$suit);

    shuffle($players);

    shuffle($players);

?>



        <div id='players'>
    
            
            
            <table>
                <?php
                for($i = 0; $i < count($players); $i++)
                {
                    echo '<tr> ';
                    echo '<td>' . '<img class="pic" src= "' . $players[$i][0][1] . '"/>' . '<br><h2>'.$players[$i][0][0] . '</h2>' .'</td>';
                    
                    
                    for($j = 0; $j < count($players[$i][1]); $j++)
                    {
                        echo '<td class="cards">' . '<img src = "' . $players[$i][1][$j] . '"/></td>';
                    }
                    
                    echo '<td class="score">' . $players[$i][2] . '</td>';
                    echo '</tr>';
                }
                

                ?>
            </table>

        </div>
        
        <?php
            displayWinner($players);
        ?>    
        <div id = "footer" class "center">
            <form>
                <input id="buttonn" type="button" value="Play Again" onClick="window.location.reload()">
            </form>
        </div>
    
    </body>
</html>
