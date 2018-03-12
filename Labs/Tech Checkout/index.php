<html>
    <head>
        <title>Tech Checkout</title>
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        
        <form action="./index.php" method="GET">
            <h2>Filter By: </h2><br>
            
            <h3>Name: </h3>
            <input type="text" name="device_name"/><br>
            
            <h3>Type: </h3>
            <select name="device_type" size="7" multiple>
                <option value="VR Headset">VR Headset</option>
                <option value="Tablet">Tablet</option>
                <option value="Webcam">Webcam</option>
                <option value="Smartphone">Smartphone</option>
                <option value="Laptop">Laptop</option>
                <option value="Dynamic Mics">Dynamic Mics</option>
                <option value="Microphone">Microphone</option>
            </select>
            <br>
            
            <h3>Status: </h3>
            <select name="device_status" size="2" multiple>
                <option value="Available">Available</option>
                <option value="CheckedOut">CheckedOut</option>
            </select>
            <br>
            <input type="Submit" name="filter"/>
            <br>
        </form>
        
        
    </body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        if(isset($_GET['filter']))
        {
            
          
            
            $host = getenv('IP');
            $dbname = "tech_checkout";
            $username = getenv('C9_USER');
            $password = "";
            
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            
            if(isset($_GET['device_name']) && isset($_GET['device_type']) && isset($_GET['device_status']))
            {
                
                $sql = "SELECT * from device where deviceName LIKE " . "'%". $_GET['device_name'] . "%'" . " AND deviceType = '" . $_GET['device_type'] . "' AND status = '" . $_GET['device_status'] . "';";
            }
            else if(isset($_GET['device_name']))
            {
                $sql = "SELECT * from device where deviceName LIKE " . "'%" . $_GET['device_name'] . "%'" . ";";
            }
            
           
          
            $stmt = $dbConn->prepare($sql);
            
          
            $stmt->execute();
            
            var_dump($host);
            var_dump($username);
            
            echo "<table>";
            echo "<tr><th>Device_Name</th> <th>Device_Type</th> <th>Status</th></tr>";
            while($row=$stmt->fetch())
            {
                echo "<tr>";
                echo '<td style="margin-right:100px;">' . $row['deviceName'] . "</td>";
                echo '<td style="margin-right:100px;">' . $row['deviceType'] . "</td>";
                echo '<td>' . $row['status'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            
        }       
    }    
?>