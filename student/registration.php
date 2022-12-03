<?php
  include"connection.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <header>
                    <div class="logo">
                        <img src="img/logo.png">
                        <h1 style="color: white;">FEC ONLINE LIBRARY  </h1>
                    </div>
        
                   
                    <nav>
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="books.php">BOOKS </a></li>
                            <li><a href="student_login.php">STUDENT-LOGIN</a></li>
                            <li><a href="registration.php">REGISTRATION</a></li>
                            <li><a href="feedback.php">FEEDBACK</a></li>
                        </ul>
                    </nav>
        

        </header>
        <section>
            <div class="reg_img">
                <br>
                <div class="box2">
                    
                    <h1 style="text-align:center; font-size:25px;">Student Registration Form</h1><br><br><br>
                 <form name="Registration" action="" method="post">
                    <input type="text" name="first" placeholder="First Name" required=" "><br><br>
                    <input type="text" name="last" placeholder="Last Name" required=" "><br><br>
                    <input type="text" name="batch" placeholder="Batch" required=" "><br><br>
                    <input type="text" name="department" placeholder="Department" required=" "><br><br>
                    <input type="text" name="roll" placeholder="Roll No" required=" "><br><br>
                    <input type="text" name="reg" placeholder="Reg No" required=" "><br><br>
                    <input type="text" name="email" placeholder="Email" required=" "><br><br>
                    <input type="text" name="phone"placeholder="Phone" required=""><br><br>
                    <input type="password" name="password" placeholder="Password" required=""><br><br>
                    <input type="submit" name="submit" value="Sign Up" style="height:20px">
                   
                 </form>
                

                    
                </div>

            </div>

        </section>
        <?php
        if(isset($_POST['submit']))
        {
            mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[batch]',
            '$_POST[department]', '$_POST[roll]', '$_POST[reg]', '$_POST[email]', '$_POST[phone]', '$_POST[password]');");
        }
        ?>

</body>