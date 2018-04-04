<!DOCKTYPE html>
<html>
    <head>
        <title>Aces vs Kings</title>
        <style>
            
        </style>
    </head>
    
    <body>
        <form action="./program1.php" method="GET">
            <h1>Aces vs Kings</h1>
            <br>
            <p>Number of Rows: </p>
            <input type="text" name="rows"/>
            <br>
            <p>Number of Columns: </p>
            <input type="text" name="columns"/>
            <br>
            <p>Suit to omit: </p>
            <select name="card">
                <option value="hearts">Hearts</option>
                <option value="clubs">Clubs</option>
                <option value="diamonds">Diamonds</option>
                <option value="spades">Spades</option>
            </select>
            <input type="submit" value="Submit" name="submit_btn"/>
        </form>
        
        
        <?php
        
        $deck = array("hearts"=>array("./cards/hearts/1.png","./cards/hearts/2.png","./cards/hearts/3.png","./cards/hearts/4.png","./cards/hearts/5.png","./cards/hearts/6.png","./cards/hearts/7.png","./cards/hearts/8.png","./cards/hearts/9.png","./cards/hearts/10.png","./cards/hearts/11.png","./cards/hearts/12.png","./cards/hearts/13.png"),
            "clubs"=>array("./cards/clubs/1.png","./cards/clubs/2.png","./cards/clubs/3.png","./cards/clubs/4.png","./cards/clubs/5.png","./cards/clubs/6.png","./cards/clubs/7.png","./cards/clubs/8.png","./cards/clubs/9.png","./cards/clubs/10.png","./cards/clubs/11.png","./cards/clubs/12.png","./cards/clubs/13.png"),
            "diamonds"=>array("./cards/diamonds/1.png","./cards/diamonds/2.png","./cards/diamonds/3.png","./cards/diamonds/4.png","./cards/diamonds/5.png","./cards/diamonds/6.png","./cards/diamonds/7.png","./cards/diamonds/8.png","./cards/diamonds/9.png","./cards/diamonds/10.png","./cards/diamonds/11.png","./cards/diamonds/12.png","./cards/diamonds/13.png"),
            "spades"=>array("./cards/spades/1.png","./cards/spades/2.png","./cards/spades/3.png","./cards/spades/4.png","./cards/spades/5.png","./cards/spades/6.png","./cards/spades/7.png","./cards/spades/8.png","./cards/spades/9.png","./cards/spades/10.png","./cards/spades/11.png","./cards/spades/12.png","./cards/spades/13.png")
            
            );
        
        
        $user_tbl = array();
        
        if(isset($_GET['submit_btn']))
        {
            if(intval(trim($_GET['rows'])) > 39 && intval(trim($_GET['columns'])) > 39)
            {
                echo "exceed row and column values max.";
            }
            else
            {
                $size = intval(trim($_GET['rows']))*intval(trim($_GET['columns']));
                $r1 = rand(0,3);
                $r2 = rand(0,12);
                
                while(count($user_tbl) != $size)
                {
                    $exist = false;
                    $rm = false;
                    
                    for($i = 0; $i < count($user_tbl); $i++)
                    {
                        if($deck[$r1][$r2] === $user_tbl[$i])
                        {
                            $exist = true;
                        }
                        
                    }
                    
                    if(array_key_exists($_GET['card'],$deck) && )                        
                    
                    if($exist == false && $rm == false)
                    {
                        $user_tbl[] = $deck[$r1][$r2];    
                    }
                    
                    
                    $r1 = rand(0,3);
                    $r2 = rand(0,12);
                }
                
                
                
                echo "<table>";
            
                $count = 0;
                for($i = 0; $i < intval(trim($_GET['rows'])); $i++)
                {
                    echo "<tr>";
                    for($j = 0; $j < intval(trim($_GET['columns'])); $j++)
                    {
                        echo "<td>" . "<img src= " . $user_tbl[$count] . " />" . "</td>";
                        $count++;
                    }
                    
                    echo "</tr>";
                }
            
                echo "</table>";
                
            }
        }
        
        
        ?>
        
        
       
    </body>
</html>