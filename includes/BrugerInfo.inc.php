<?php

    require 'dbConn.php';

    $sql = "SELECT * FROM users
            ORDER BY SkoStr;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<br><p>Navn: ".$row["Navn"]. "</p>";
            echo "<p>Alder: ".$row["Alder"]. "</p>";
            echo "<p>Email: ".$row["Email"]. "</p>";
            echo "<p>Sko Str: ".$row["SkoStr"]. "</p>";

        }
    }


?>