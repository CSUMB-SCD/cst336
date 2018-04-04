
<!DOCKTYPE html>


<html>
    <head>
        <title>PHP and MySQL</title>
    </head>
    
    <body>
        <p>Students</p>
        <br>
        <?php
        
        $host = '127.0.0.1';
        $dbname = "midterm";
        $username = "root";
        $password = "";
        
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $sql = "select firstName, lastName from m_students;";
            
        $stmt = $dbConn->prepare($sql);
            
          
        $stmt->execute();
        $students = $stmt->fetchAll();
        
        ?>
        
        <table>
            <?php
                for($i = 0; $i < count($students); $i++)
                {
                    echo "<tr>";
                    for($j=0; $j < 2; $j++)
                    {
                        echo "<td>" . $students[$i][$j] . "</td>";
                    }
                    
                    echo "</tr>";
                }
            ?>
        </table>
            <br>
         <table>
             <?php
             $sql = "select firstName, lastName, grade from m_students inner join m_gradebook on m_students.studentId = m_gradebook.studentId and grade < 50;";
             $stmt = $dbConn->prepare($sql);
            
          
                $stmt->execute();
                $students = $stmt->fetchAll();
                
                for($i = 0; $i < count($students); $i++)
                {
                    echo "<tr>";
                    for($j=0; $j < 3; $j++)
                    {
                        echo "<td>" . $students[$i][$j] . "</td>";
                    }
                    
                    echo "</tr>";
                }
             ?>
         </table>
         
         <br>
         <table>
             <?php
             $sql = "select lastName, title from (m_students inner join m_gradebook on m_students.studentId = m_gradebook.studentId) inner join m_assignments on m_gradebook.assignmentId = m_assignments.assignmentId order by m_students.lastName and m_assignments.title;";
             $stmt = $dbConn->prepare($sql);
            
          
                $stmt->execute();
                $students = $stmt->fetchAll();
                
                for($i = 0; $i < count($students); $i++)
                {
                    echo "<tr>";
                    for($j=0; $j < 3; $j++)
                    {
                        echo "<td>" . $students[$i][$j] . "</td>";
                    }
                    
                    echo "</tr>";
                }
             ?>
         </table>
    </body>
</html>