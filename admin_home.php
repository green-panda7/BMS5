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
    <?php require('database/edit_home.php'); ?>
    <div class="container">
        <div class = "headings">
            <ul>
                <span class="nav">
                    <li><a href="admin_home.php"><span class="nav_title">HOME</span></a></li>
                    <li><a href="#"><span class="nav_title">SERVICES</span></a></li>
                    <li><a href="admin_contacts.php"><span class="nav_title">CONTACT US</span></a></li>
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
            <div class="announcement_title">Announcements</div>
            <div class="display_ann">
                <div class="content_ann">
                    <?php
                        if(mysqli_num_rows($result_ann) > 0){
                            echo "<table>";
                                echo "<tr>";
                                    echo "<th></th>";
                                echo "</tr>";
                            while($row = mysqli_fetch_array($result_ann)){
                                echo "<tr>";
                                    echo "<td>" . $row['text_anno'] . "</td> ";
                                echo "</tr>";
                            }
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result_ann);
                        } else{
                            echo "No records matching your query were found.";
                        }
                    ?>
                </div>
            </div>
            <div class="new_ann">
                <form action = "admin_home.php" method="POST">
                    <div class="in_ann"><label>Type new announcement here: </label><input type="text" name = "annform" required></div>
                    <input type="submit" value="Save Announcement" name="insert_ann" class="ann_btn">
                </form>
            </div>
        </div>
        <div class="gallery">
            PHOTO GALLERY EDITING HERE!
        </div>
        <div class="workers_dash">
            <div class="brgy_workers">
                <a href="admin_workers.php">
                    <span class="brgy_workers_title">Barangay Workers</span>
                    <img src="images/official.jpg"><br>
                </a>   
            </div>
            <div class="dashboard">
                <div class="brgy_workers_title">Dashboard</div>
                <button onclick = "openForm('edit')" class= "edit">
                    <img src="images/edit_icon.png" width="20px" height="20px" align="middle">
                    <span class="txt">Edit Data</span>
                </button>
                <div>
                    <ul>
                        <li>
                            <div class="imgs"><img src="images/population.png"></div>
                            <span class="num"><?php echo "".$population?></span><br>
                            <span class="dashboard_title">Population</span>
                        </li>
                        <li>
                            <div class="imgs"><img src="images/female.png"></div>
                            <span class="num"><?php echo "".$female?></span><br>
                            <span class="dashboard_title">Female</span>
                        </li>
                        <li>
                            <div class="imgs"><img src="images/male.png"></div>
                            <span class="num"><?php echo "".$male?></span><br>
                            <span class="dashboard_title">Male</span>
                        </li>
                        <li>
                            <div class="imgs"><img src="images/senior.png"></div>
                            <span class="num"><?php echo "".$senior?></span><br>
                            <span class="dashboard_title">Senior Citizen</span>
                        </li>
                        <li>
                            <div class="imgs"><img src="images/house.png"></div>
                            <span class="num"><?php echo "".$household?></span><br>
                            <span class="dashboard_title">Household</span>
                        </li>
                        <li>
                            <div class="imgs"><img src="images/school.png"></div>
                            <span class="num"><?php echo "".$school?></span><br>
                            <span class="dashboard_title">School</span>
                        </li>
                    </ul>
                </div>
                <div id="edit" class="formTab" style="display:none;">
                    <span onclick="this.parentElement.style.display='none'" class="close">&times;</span><br>
                    <form action = "admin_home.php" method="POST">
                        <div class="in_data"><label>No. of Population: </label><input type="text" name = "popform" required></div>
                        <div class="in_data"><label>No. of Female: </label><input type="text" name = "femform" required></div>
                        <div class="in_data"><label>No. of Male: </label><input type="text" name = "maleform" required></div>
                        <div class="in_data"><label>No. of Senior Citizen: </label><input type="text" name = "seniorform"></div>
                        <div class="in_data"><label>No. of Household: </label><input type="text" name = "houseform" required></div>
                        <div class="in_data"><label>No. of School: </label><input type="text" name = "schoolform" required></div>
                        <input type="submit" value="Save Changes" name="insert_dash" class="submit_btn">
                    </form>
                </div>
            </div>
        </div>   
    </div>
    <script>
        function openForm(tabName){
            var i, x;
            x = document.getElementsByClassName("formTab");
            for(i = 0; i < x.length; i++){
                x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
    </script>
</body>
</html>