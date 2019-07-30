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
    }
    



} 
?>