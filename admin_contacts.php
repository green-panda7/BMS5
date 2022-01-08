<!-- for admin-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System</title>
    <link rel="stylesheet" type="text/css" href="css/contacts.css">
</head>

<body>
    <?php require('database/edit_home.php'); ?>
    <div class="container">
        <div class = "headings">
            <ul>
                <span class="nav">
                    <li><a href="admin_home.php"><span class="nav_title">HOME</span></a></li>
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
    <div class="contacts_main">
        <div class="email_contact">EMAIL MO TO!</div>
        <div class="other_contact">
            <dl>
                <dt><img src="images/contacts_icon.png" align="middle" width="80px" height="80px"></dt>
                <dt class="police">
                    <span class="title">Police Department Contact:</span>
                    <div class="contact_deets">
                        <img src="images/location.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/telephone.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/mobile.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/email.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                </dt>
                <dt class="fire">
                    <span class="title">Fire Department Contact:</span>
                    <div class="contact_deets">
                        <img src="images/location.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/telephone.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/mobile.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/email.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                </dt>
                <dt class="hospital">
                    <span class="title">Hospital Department Contact:</span>
                    <div class="contact_deets">
                        <img src="images/location.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/telephone.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/mobile.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/email.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                </dt>
                <dt class="health_center">
                    <span class="title">Health Center Department Contact:</span>
                    <div class="contact_deets">
                        <img src="images/location.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/telephone.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/mobile.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/email.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                </dt>
                <dt class="school">
                    <span class="title">School Department Contact:</span>
                    <div class="contact_deets">
                        <img src="images/location.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/telephone.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/mobile.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                    <div class="contact_deets">
                        <img src="images/email.png" align="middle" width="20px" height="20px">
                        <span class="text">000 Abc St. Defg Hijk, Lmno 0000</span>
                    </div>
                </dt>
            </dl>
        </div>
    </div>
</body>
</html>