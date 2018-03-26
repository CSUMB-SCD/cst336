
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
        <table>
            <form id = "formElements" action="index.php?show=true" method = "post" name="filter">
                <tr>
                    <td>
                        <div id="sortByYear">
                            <label>Year: </label>
                            <select name="YearList">
                                <option value="none">Select</option>
                                <option value="2017">2017</option>
                                <option value="2016"> 2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
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
                            <input class="button" type="submit" value="Apply Filters"/><br></br>
                        </div>
                    </td>
                </tr>
            </form>
        </table>
        <?php
            $show = $_GET["show"];
            
                $sql = "SELECT * FROM movie;";
                $stmt = $dbConn->prepare($sql);
                $stmt->execute();
                $count = 0;
                $result = $stmt->fetchAll();
                
                echo "<div>";
                for($i = 0; $i < count($result); $i++)
                {
                    echo"<img src= '" . $result[$i][4] . "'height=300 width=200/>";
                    echo"<h3>" . $result[$i][0] ."</h3>";
                }
                echo "</div>";
                    // $image = $row['image_url'];
                    // $movieTitle = $row['movie_title'];
                    // $propName = $row['name'];
                    // $movieGenre = $row['genre'];
                    // $movieYear = $row['year'];
                    
                $sql = "SELECT * FROM prop;";
                $stmt = $dbConn->prepare($sql);
                $stmt->execute();
                $count = 0;
                $result = $stmt->fetchAll();
                
                echo "<div>";
                for($i = 0; $i < count($result); $i++)
                {
                    echo"<img src= '" . $result[$i][3] . "'height=300 width=200/>";
                    echo"<h3>" . $result[$i][0] ."</h3>";
                }
                echo "</div>";    
                
               
        ?>
        <?php
                    $count++;
                    if($count == 3)
                    {
                        echo"<br></br>";
                        $count = 0;
                    }
                
        ?>
    </div>
</body>
</html>