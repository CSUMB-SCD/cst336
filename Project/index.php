
 <?php
     $servername = "vvfv20el7sb2enn3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $database = "rtt8eikccb51c8d3";
     $dbPort = 3306;
     $username = "tolx7vgtfh0est6f";
     $password = "ad2n1irfrmrqq0d0";
     $dbConn = new PDO("mysql:host=$servername;port=$dbPort;dbname=$database", $username, $password);
     $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies and Props Galore</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
    <div class="container">    
        <h1>Movies and Props Galore</h1>
     
      <form action="search.php" method="get" />
        <label>
            Search
            <input type="text" name="keywords">
        </label>
       
        <input type="submit" value="Search" />
        
        
        
        
        
        </form>
        <table>
            <form id = "formElements" action="index.php?show=true" method = "GET">
                <tr>
                    <td>
                        <div id="sortByYear">
                            <label>Year: </label>
                            <select name="YearList">
                                <option value="none">Select</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016"> 2016</option>
                                <option value="2015">2015</option>
                            </select>

                        </div> 
                    </td>
                    <td>
                        <div id="sortByGenre">
                            <label>Genre: </label>
                            <select name="GenreList">
                                <option value="none">Select</option>
                                <option value="Crime">Crime</option>
                                <option value="Action"> Action</option>
                                <option value="Drama">Drama</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Science fiction">Science fiction</option>
                                <option value="Thriller">Thriller</option>
                                <option value="Adventure">Adventure</option>
                            </select>

                        </div> 
                    </td>
                    <td>
                        <div id="sortByName">
                            <p>Sort By Name:</p><br></br>
                            <label><input type="radio" name="sort" value="ascending"/>A to Z</label> <br></br>
                            <label><input type="radio" name="sort" value="descending"/>Z to A</label> <br></br>
                        </div>    
                    </td>
                    <td>
                        <div id = "submitButtonDiv">
                            <input class="button" type="submit" name="filter" value="Apply Filters"/><br></br>
                        </div>
                    </td>
                </tr>
            </form>
        </table>
        </div>
        <br>
        <div>
            <?php
                $show = $_GET["show"];
                    
                    if($_GET['sort'] == "ascending" && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id order by movie.title ASC;";
                    }
                    else if($_GET['sort'] == "descending" && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id order by movie.title DESC;";
                    }
                    else {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id;";
                    }
                    
                    if(isset($_GET['GenreList']) && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id where movie.genre = " . "'" . $_GET['GenreList'] . "'" . ";";
                    }
                    else if(isset($_GET['YearList']) && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id where movie.year = " . $_GET['YearList'] . ";";
                    }
                    
                    if(isset($_GET['GenreList']) && $_GET['sort'] == "ascending" && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id where movie.genre = " . "'" . $_GET['GenreList'] . "'" .  " order by movie.title ASC;";
                    }
                    
                    
                    if(isset($_GET['GenreList']) && $_GET['sort'] == "descending" && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id where movie.genre = " . "'" . $_GET['GenreList'] . "'". " order by movie.title DESC;";
                    }
                    
                    
                    if(isset($_GET['YearList']) && $_GET['sort'] == "ascending" && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id where movie.year = " . $_GET['YearList'] . " order by movie.title ASC;";
                    }
                    
                    if(isset($_GET['YearList']) && $_GET['sort'] == "descending" && isset($_GET['filter']))
                    {
                        $sql = "select movie.title, movie.description, movie.year, movie.genre, movie.poster_url, inventory.id, inventory.quantity, inventory.amount from movie inner join inventory_movie on movie.title = inventory_movie.title inner join inventory on inventory_movie.id = inventory.id where movie.year = " . $_GET['YearList'] . " order by movie.title DESC;";
                    }
                    
                    $stmt = $dbConn->prepare($sql);
                    $stmt->execute();
                    $count = 0;
                    $result_movie = $stmt->fetchAll();
                    
                ?>
                <div id="movies">
                <h3><u>Movies</u></h3>
                <?php
                    for($i = 0; $i < count($result_movie); $i++)
                    {
                        echo '<div style="display:inline-block;margin-left:10px;text-align:center;">';
                        echo"<img src= '" . $result_movie[$i][4] . "'height=300 width=200/>";
                        echo"<h3>" . $result_movie[$i][0] ."</h3>";
                        echo "</div>";
                        
                    }
                 ?>
                        
                    
                    
                
                </div>
                
                <br>
                
               
                    <!--$sql = "select prop.name, prop.description, prop.image_url, inventory.id, inventory.quantity, inventory.amount from prop inner join inventory_prop on prop.name = inventory_prop.name inner join inventory on inventory_prop.id = inventory.id;";-->
                   
        </div>
    
</body>
</html>
