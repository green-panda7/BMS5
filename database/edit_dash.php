<?php
    require('database/db.php');
    
    if (isset($_POST['insert_dash'])){
        // removes backslashes
        $population = $_POST['popform'];
        $female = $_POST['femform'];
        $male = $_POST['maleform'];
        $senior = $_POST['seniorform'];
        $household = $_POST['houseform'];
        $school = $_POST['schoolform'];
    
        
        $query = "INSERT INTO `dashboard`(`dashID`, `population`, `female`, `male`, `senior`, `household`, `school`) VALUES ('null','$population', '$female', '$male', '$senior', '$household', '$school')";

        if(mysqli_query($con, $query)){
            echo "Updated successfully";
        }
    }

    $data = "SELECT population, female, male, senior, household, school  FROM dashboard where dashID = (SELECT MAX(dashID) FROM dashboard)";
    $result = mysqli_query($con,$data);

    $row = mysqli_fetch_assoc($result);
    extract($row);

    mysqli_close($con);
?>