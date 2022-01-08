<!-- for admin-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>
    <div class="container">
        <div class = "headings">
            <ul>
                <span class="nav">
                    <li><a href="#"><span class="nav_title">HOME</span></a></li>
                    <li><a href="#"><span class="nav_title">SERVICES</span></a></li>
                    <li><a href="#"><span class="nav_title">CONTACT US</span></a></li>
                    <li><a href="#"><span class="nav_title">MAP</span></a></li>
                </span>
                <li class="date">
                        <?php 
                            date_default_timezone_set("Asia/Manila"); 
                            echo date("l jS \of F Y h:i:s A");
                        ?>                            
                   </li>
            </ul>
        </div>
        <div class="barangay">
            <ul>
                <li><img src="images/brgy.jpg" align="middle" width="220px" height="170px"></li>
                <li><span class="brgy_name"><h1>Barangay Mabuhay Ka Hanggat Gusto Mo</h1></span></li>
            </ul>
        </div> 
    </div>
    <div class="home_main">
        <div class="announcements">
            <div>
                <button onclick = "add_announcement()">Add Announcement</button>
            </div>
            <div id="add_form">
                <form>
                    
                </form>
            </div>
            ANNOUNCEMENT EDITING HERE!
        </div>
        <div class="gallery">
            PHOTO GALLERY EDITING HERE!
        </div>
        <div class="workers_dash">
            <div class="brgy_workers">
                <a href="workers.php">
                    <img src="images/official.jpg"><br>
                    <span class="brgy_workers_title">Barangay Workers</span>
                </a>   
            </div>
            <div class="dashboard">
                <span class="brgy_workers_title">Dashboard</span>
                <ul>
                    <li>
                        <div class="imgs"><img src="images/population.png"></div>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Population</span>
                    </li>
                    <li>
                        <div class="imgs"><img src="images/population.png"></div>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Household</span>
                    </li>
                    <li>
                        <div class="imgs"><img src="images/population.png"></div>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">School</span>
                    </li>
                    <li>
                        <div class="imgs"><img src="images/population.png"></div>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Female</span>
                    </li>
                    <li>
                        <div class="imgs"><img src="images/population.png"></div>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Male</span>
                    </li>
                    <li>
                        <div class="imgs"><img src="images/population.png"></div>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Senior Citizen</span>
                    </li>
                </ul>
            </div>
        </div>   
    </div>
    <script>
        function myFunction() {
            document.getElementById("demo").innerHTML = "Hello World";
        }
    </script>
</body>

</html>