<?php
    $host = "127.0.0.1";
    $dbname = "authentication";
    $username = "root";
    $password = 's3cr3t';
    
   
    
    try
    {
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
        
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
        
    </body>
</html>