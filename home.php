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
                <li>
                    <a href="facebook.com"><ion-icon name="logo-facebook"></ion-icon></a>       
                </li>
                <li>
                    <a href="twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
                </li>
                <li>
                    <a href="instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
                </li>
                <li>
                   <span class="date">
                        <?php 
                            date_default_timezone_set("Asia/Manila"); 
                            echo date("l jS \of F Y h:i:s A");
                        ?>
                   </span>
                </li>
            </ul>
        </div>
        <div class="barangay">
            <ul>
                <li><img src="images/brgy.jpg" align="middle" width="220px" height="170px"></li>
                <li><span class="brgy_name"><h1>Barangay Mabuhay Ka Hanggat Gusto Mo</h1></span></li>
            </ul>
        </div>
        <div class="navigation" id="navbar">
            <ul>
                <li><a href="#"><span class="nav_title">HOME</span></a></li>
                <li><a href="#"><span class="nav_title">SERVICES</span></a></li>
                <li><a href="#"><span class="nav_title">CONTACT US</span></a></li>
                <li><a href="#"><span class="nav_title">MAP</span></a></li>
            </ul>
        </div>
    </div>
    <div class="home_main">
        <div class="announcements">
            ANNOUNCEMENT EDITING HERE!
        </div>
        <div class="gallery">
            PHOTO GALLERY EDITING HERE!
        </div>
        <div class="workers_dash">
            <div class="brgy_workers">
                <a href="#">
                    <ion-icon name="people-circle-outline"></ion-icon><br>
                    <span class="brgy_workers_title">Barangay Workers</span>
                </a>   
            </div>
            <div class="dashboard">
                <span class="brgy_workers_title">Dashboard</span>
                <ul>
                    <li>
                        <ion-icon name="accessibility-outline"></ion-icon>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Population</span>
                    </li>
                    <li>
                        <ion-icon name="accessibility-outline"></ion-icon>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Household</span>
                    </li>
                    <li>
                        <ion-icon name="accessibility-outline"></ion-icon>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">School</span>
                    </li>
                    <li>
                        <ion-icon name="accessibility-outline"></ion-icon>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Female</span>
                    </li>
                    <li>
                        <ion-icon name="accessibility-outline"></ion-icon>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Male</span>
                    </li>
                    <li>
                        <ion-icon name="accessibility-outline"></ion-icon>
                        <span class="num">1000000000</span><br>
                        <span class="dashboard_title">Senior Citizen</span>
                    </li>
                </ul>
            </div>
        </div>   
    </div>

    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>