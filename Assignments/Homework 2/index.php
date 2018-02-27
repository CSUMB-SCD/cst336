<!DOCTYPE html>
<html>
    <head>
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="index.php" method="GET">
           Enter email: <input type="text" name="email_field"/> <br>
           
           <br>
           Age group: <select name = "age_groups">
               <option name="group" value="18-21 years old">18-21 years old</option>
               <option name="group" value="21-40 years old">21-40 years old</option>
               <option name="group" value="40 years old or over">40 years old or over</option>
           </select><br>
           <br>
           
           Do you smoke? <select name="q1">
               <option name="q1_a" value="y">Yes</option>
               <option name="q1_a" value="n">No</option>
           </select><br>
           
           Do you drink? <select name="q2">
               <option name="q2_a" value = "y">Yes</option>
               <option name="q2_a" value = "n">No</option>
           </select><br>
           <br>
           
           How active do you consider yourself?<br>
           <p>Sedentary</p> <p>Neutral</p> <p>Very Active</p><br>
           <input id = "radio_bttn1" type="radio" name="r_opt" value = "1"/>
           <input id = "radio_bttn2" type="radio" name="r_opt" value = "2"/>
           <input id = "radio_bttn3" type="radio" name="r_opt" value = "3"/>
           <input id = "radio_bttn4" type="radio" name="r_opt" value = "4"/>
           <input id = "radio_bttn5" type="radio" name="r_opt" value = "5"/><br>
           <br>
           <input type="submit" name="submit_bttn" value="Submit"/>
           
           
        </form>
    </body>
    
    <?php 
        if(isset($_GET['submit_bttn']))
        {
            if($_GET['email_field'] != "" && isset($_GET['r_opt']))
            {
                if($_GET['age_groups'] == "40 years old or over")
                {
                    echo "<br>You are " . $_GET['age_groups'] . ".";
                    
                    if($_GET['q1'] == "y")
                    {
                        echo "<br>You do smoke.";
                    }
                    else{
                        echo "<br>You do not smoke.";
                    }
                    
                    if($_GET['q2'] == "y")
                    {
                        echo "<br>You do drink.";
                    }
                    else{
                        echo "<br>You do not drink.";
                    }
                }
                else{
                    echo "<br>You are between " . $_GET['age_groups'] . ".";
                    
                    if($_GET['q1'] == "y")
                    {
                        echo "<br>You do smoke.";
                    }
                    else{
                        echo "<br>You do not smoke.";
                    }
                    
                    if($_GET['q2'] == "y")
                    {
                        echo "<br>You do drink.";
                    }
                    else{
                        echo "<br>You do not drink.";
                    }
                }
            }
            else {
                echo '<br<p id = "error">All fields must be complete!';
            }
        }
    ?>
</html>