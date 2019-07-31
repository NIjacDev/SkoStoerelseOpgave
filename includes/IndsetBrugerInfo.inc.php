<?php 

if(isset($_POST['submit-btn'])){


    require 'dbConn.php';

    $Navn = $_POST['Navn'];
    $Alder = $_POST['Alder'];
    $Email = $_POST['Email'];
    $SkoStr = $_POST['SkoStr'];

    if(empty($Navn) || empty($Alder) || empty($Email) || empty($SkoStr))
    {
        header("Location: ../index.html?error=emptyfields&Navn=".$Navn."&Alder=".$Alder."&mail=".$Email."&SkoStoerelse".$SkoStr);
        exit();
    }
    else
    {
        $sql = "SELECT Email FROM users WHERE Email=?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $Email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0)
            {
                header("Location: ../index.html?error=EmailAlleredeIBrug");
                exit();
            }
            else
            {
                $sql = "INSERT INTO users (Navn, Alder, Email, Skostr) VALUES (?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../index.html?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "ssss", $Navn, $Alder, $Email, $SkoStr);
                    mysqli_stmt_execute($stmt);
                    
                    Header("Location: ../index.php?Success");
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location: ../index.html");
}
?>