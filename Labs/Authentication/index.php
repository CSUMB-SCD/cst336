<?php
    $host = "127.0.0.1";
    $dbname = "authentication";
    $username = "root";
    $password = 's3cr3t';
    
    
    
    try
    {
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        if(isset($_POST['login']))
        {
            if(!empty($_POST['username']) &&  !empty($_POST['password']) && $_POST['username'] == "admin")
            {
                
                // $page = "admin.php";
                // header("Location: " . $page);
                // exit;
            }
            else if(empty($_POST['username']) &&  empty($_POST['password'])) {
                echo "Must enter username and password!";
            }
            else{
                
            }
        }
    }
    catch(PDOException $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
    }
    
    
    

?>

<!DOCKTYPE html>
<html>
    <head>
        <title>Authentication</title>
        
    </head>
    
    <body>
        <form action="./index.php" method="POST">
            Username
            <input type="text" name="username">
            <br>
            Password
            <input type="password" name="password">
            <br>
            <input type="submit" value="Login" name="login">
        </form>
    </body>
</html>


