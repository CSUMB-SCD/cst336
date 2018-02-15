<!DOCKTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        
        <title>Password Generate</title>
        <style>
            input{
                color:black;
            }
        </style>
       
    </head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST"></a>>
            
            How many passwords? 
            <input type="text" name="password_count"/>
            <br>
            
           <b> Password Length </b><br>
           <input type="radio" name="opt1"/> 6 characters<br>
           <input type="radio" name="opt2"/> 8 characters<br>
           <input type="radio" name="opt3"/> 10 characters <br>
           
           
           <b>Letters to exclude</b>
           <select name="letters_exclude">
               <option value="_a">A</option>
               <option value="_b">B</option>
               <option value="_c">C</option>
               <option value="_d">D</option>
               <option value="_e">E</option>
               <option value="_f">F</option>
               <option value="_g">G</option>
               <option value="_h">H</option>
               <option value="_i">I</option>
               <option value="_j">J</option>
               <option value="_k">K</option>
               <option value="_l">L</option>
               <option value="_m">M</option>
               <option value="_n">N</option>
               <option value="_o">O</option>
               <option value="_p">P</option>
               <option value="_q">Q</option>
               <option value="_r">R</option>
               <option value="_s">S</option>
               <option value="_t">T</option>
               <option value="_u">U</option>
               <option value="_v">V</option>
               <option value="_w">W</option>
               <option value="_x">X</option>
               <option value="_y">Y</option>
               <option value="_z">Z</option>
           </select>
            
            <input type="submit" name="generate" value="Generate"/>
        </form>
    </body>
</html>


<?php 
    
    $select_options = array("_a","_b","_c","_d","_e","_f","_g","_h","_i","_j","_k","_l","_m","_n","_o","_p","_r","_s","_t","_u","_v","_w","_x","_y","_z");
    $alpha = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    $numbers = array(0,1,2,3,4,5,6,7,8,9);
    
    
    session_start();
    
    if(session_status() == PHP_SESSION_ACTIVE)
    {
        if(isset($opt1)){
            
        }
        else if(isset($opt2)){
            
        }
        else if(isset($opt3)){
            
        }
    }
    
?>