<?php
    require('database/db.php');
    //announcement update
    if (isset($_POST['insert_ann'])){
        // removes backslashes
        $text_anno = $_POST['annform'];

        $query = "INSERT INTO `announcements`(id,text_anno) VALUES ('null','$text_anno')";

        if(mysqli_query($con, $query)){
        }else{
            echo "Update unsuccessful";
        }
    }
    $data_ann = "SELECT text_anno  FROM announcements";
    $result_ann = mysqli_query($con,$data_ann);
    $row_ann = mysqli_fetch_assoc($result_ann);
    extract($row_ann);

    //dashboard update
    if (isset($_POST['insert_dash'])){
        $population = $_POST['popform'];
        $female = $_POST['femform'];
        $male = $_POST['maleform'];
        $senior = $_POST['seniorform'];
        $household = $_POST['houseform'];
        $school = $_POST['schoolform'];
        $query_dash = "INSERT INTO `dashboard`(`dashID`, `population`, `female`, `male`, `senior`, `household`, `school`) VALUES ('null','$population', '$female', '$male', '$senior', '$household', '$school')";
        if(mysqli_query($con, $query_dash)){
        }
    }
    $data_dash = "SELECT population, female, male, senior, household, school  FROM dashboard where dashID = (SELECT MAX(dashID) FROM dashboard)";
    $result_dash = mysqli_query($con,$data_dash);
    $row_dash = mysqli_fetch_assoc($result_dash);
    extract($row_dash);

    //close connection
    mysqli_close($con);
?>