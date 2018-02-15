

<html>
    <head>
        <?php 
             $n = rand(1,10)+1;
             
             if($_POST['answer'] == $n)
             {
                 echo "You got it!"  . "<br>";
             }
             else
             {
                 echo "Nice try!" . "<br";
             }
        ?>
    </head>
    
    <body>
        <form action = "<?php $_PHP_SELF ?>" method = "POST">
            Guess the number??? 1 to 10
            <br>
            <input type="text" name="answer"/>
            <input type="submit" value="Guess"/>
        </form>
    </body>
</html>