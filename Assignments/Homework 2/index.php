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
               <option name="group">18-21 years old</option>
               <option name="group">21-40 years old</option>
               <option name="group">40 years old or over</option>
           </select><br>
           <br>
           
           Do you smoke? <select name="q1">
               <option name="q1_a">Yes</option>
               <option name="q1_a">No</option>
           </select><br>
           
           Do you drink? <select name="q2">
               <option name="q2_a">Yes</option>
               <option name="q2_a">No</option>
           </select><br>
           <br>
           
           How active do you consider yourself?<br>
           <p>Sedentary</p> <p>Neutral</p> <p>Very Active</p><br>
           <input type="radio" name="r_opt"/>
           <input type="radio" name="r_opt"/>
           <input type="radio" name="r_opt"/>
           <input type="radio" name="r_opt"/>
           <input type="radio" name="r_opt"/><br>
           <br>
           <input type="submit" name="submit_bttn" value="Submit"/>
           
           
        </form>
    </body>
    
    <?php 
        if(isset($_GET['submit_bttn']))
        {
            if(1){
                echo "Form completed";
            }
            else{
                echo "Form incomplete";
            }
        }
    ?>
</html>