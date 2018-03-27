<? php 

     $servername = "vvfv20el7sb2enn3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $database = "rtt8eikccb51c8d3";
     $dbPort = 3306;
     $username = "tolx7vgtfh0est6f";
     $password = "ad2n1irfrmrqq0d0";
     $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
     $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<html>
    <head>
        <title>Search results</title>
    </head>
<body>
        
<? php



if(isset($_GET['keywords']))
{
    $keywords = $dbConn->mysql_escape_string($_GET['keywords']);
    $query = $dbConn->mysql_query("
    SELECT title, description, year, genre FROM movie
    WHERE title LIKE '%{$keywords}%'
    OR description LIKE '%{$keywords}%'
    OR year LIKE '%{$keywords}%'
    OR genre LIKE '%{$keywords}%'
    
    ");
    
    
    
    
    
}

?>

<div class="result-count">
    Found <? php echo $query->num_rows; ?> results; 
    
</div> 

<? php 
    
    if($query->mysql_num_rows)
    {
        while($r = $query->fetch_object())
    }
     
?>

<div class="result">
<a href="#"><? php echo $r->title; ?></a>
      
</div>   
        
        
        
</body>
    
    
    
    
</html>
