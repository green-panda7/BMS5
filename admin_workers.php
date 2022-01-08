<!-- for admin-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System</title>
    <link rel="stylesheet" type="text/css" href="css/workers.css">
</head>

<body>
    <div class="container">
        <div class = "headings">
            <ul>
                <span class="nav">
                    <li><a href="home.php"><span class="nav_title">HOME</span></a></li>
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
    <div class="main">
        <div class="worker_row">
            <div class = "worker_tab" onclick="openTab('brgy');">Barangay Officials</div>
            <div class = "worker_tab" onclick="openTab('sk');">Sangguniang Barangay Officials</div>
            <div class = "worker_tab" onclick="openTab('bhw');">Barangay Health Workers</div>
        </div>
        <div id="brgy" class="contentTab" style="display:none;">
            <span onclick="this.parentElement.style.display='none'" class="close">&times;</span>
            <div class="brgy_officials">
                <div class="title">
                    <h2>Barangay Officials</h2>
                </div>
                <dl>
                    <dt>
                        <!-- Brgy Chairman -->
                        <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Chairperson</div>
                    </dt>
                    <dt>
                        <!-- Brgy Kagawas -->
                        <div class="kagawad">
                            <ul>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                            </ul>
                        </div>
                    </dt>
                    <dt>
                        <!-- Brgy Secretary -->
                        <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Secretary</div>
                    </dt>
                    <dt>
                        <!-- Brgy Treasurer -->
                        <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Treasurer</div>
                    </dt>
                </dl>
            </div>
        </div>
        <div id="sk" class="contentTab" style="display:none;">
            <span onclick="this.parentElement.style.display='none'" class="close">&times;</span>
            <div class="sk_officials">
                <div class="title">
                    <h2>Sangguniang Kabataan Officials</h2>
                </div>
                <dl>
                    <dt>
                        <!-- SK Chairman -->
                        <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Chairperson</div>
                    </dt>
                    <dt>
                        <!-- SK Members -->
                        <div class="sk_members">
                            <ul>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                                <li>
                                    <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Member</div>
                                </li>
                            </ul>
                        </div>
                    </dt>
                    <dt>
                        <!-- SK Secretary -->
                        <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Secretary</div>
                    </dt>
                    <dt>
                        <!-- SK Treasurer -->
                        <div class="sk_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="sk_name_title">Juan Dela Cruz<br>Sangguniang Kabataan<br>Treasurer</div>
                    </dt>
                </dl>
            </div>
        </div>
        <div id="bhw" class="contentTab" style="display:none;">
            <span onclick="this.parentElement.style.display='none'" class="close">&times;</span>
            <div class="brgy_officials">
                <div class="title">
                    <h2>Barangay Officials</h2>
                </div>
                <dl>
                    <dt>
                        <!-- Brgy Chairman -->
                        <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Chairperson</div>
                    </dt>
                    <dt>
                        <!-- Brgy Kagawas -->
                        <div class="kagawad">
                            <ul>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                                <li>
                                    <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                                    <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Kagawad</div>
                                </li>
                            </ul>
                        </div>
                    </dt>
                    <dt>
                        <!-- Brgy Secretary -->
                        <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Secretary</div>
                    </dt>
                    <dt>
                        <!-- Brgy Treasurer -->
                        <div class="brgy_Img"><img src="images/2.png" width="60px" height="60px"></div>
                        <div class="brgy_name_title">Juan Dela Cruz<br>Barangay Treasurer</div>
                    </dt>
                </dl>
            </div>
        </div>
    </div>
    <script>
        function openTab(tabName){
            var i, x;
            x = document.getElementsByClassName("contentTab");
            for(i = 0; i < x.length; i++){
                x[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
    </script>
</body>

</html>