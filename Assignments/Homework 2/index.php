<!DOCTYPE html>
<html>
    <head>
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form>
           Enter email: <input type="text" name="email_field"/> <br>
           
           <br>
           Age group: <select name = "age_groups">
               <option value="group1">18-21 years old</option>
               <option value="group2">21-40 years old</option>
               <option value="group3">40 years old or over</option>
           </select><br>
           <br>
           
           Do you smoke? <select name="q1">
               <option value="q1_a1">Yes</option>
               <option value="q1_a2">No</option>
           </select><br>
           
           Do you drink? <select name="q2">
               <option value="q2_a1">Yes</option>
               <option value="q2_a2">No</option>
           </select><br>
           <br>
           
           How active do you consider yourself?<br>
           <p>Sedentary</p> <p>Neutral</p> <p>Very Active</p><br>
           <input id="radio_bttn1" type="radio" name="opt1"/>
           <input id="radio_bttn2" type="radio" name="opt2"/>
           <input id="radio_bttn3" type="radio" name="opt3"/>
           <input id="radio_bttn4" type="radio" name="opt4"/>
           <input id="radio_bttn5" type="radio" name="opt5"/><br>
           <br>
           <input type="submit" name="submit_bttn" value="Submit"/>
           
           
        </form>
    </body>
    
    <?php ?>
</html>