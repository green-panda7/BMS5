<!-- this is for visitors-->

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="content">
                <div class="main_title">Admin Login In</div>
            </div>
            <div class="img_content">
                <img src="images/brgy.jpg">
            </div>
        </div>
        <div class="wrapper">
            <?php 
                require('database/db.php');
                session_start();
                if(isset($_POST['login_s'])){
                    
                    $username = $_POST['username'];  
                    $password = $_POST['password'];
                    $username = stripcslashes($username);  
                    $password = stripcslashes($password);  
                    $username = mysqli_real_escape_string($con, $username);  
                    $password = mysqli_real_escape_string($con, $password);  
                
                    $sql = "SELECT username, password from users where username = '$username' and password = '$password'";  
                    $result = mysqli_query($con, $sql);  
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count = mysqli_num_rows($result);  
                    
                    if($count == 1){  
                        header("Location: admin_home.php");  
                    }  
                    else{  
                        echo "<h1> Login failed. Invalid username or password.</h1>";  
                    } 
                }
                
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                    
                </div>    
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-primary" value="Login" name="login_s">
                </div>
            </form>
        </div>
    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
</body>

</html>