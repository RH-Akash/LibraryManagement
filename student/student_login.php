<!DOCTYPE html>
<html>
    <head>
        <title>Student Login</title>
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
            <div class="log_img">
                <br><br><br><br>
                <div class="box1">
                    <h1 style="text-align:center; font-size:35px;font-family:Lucida Console;">
                        Welcome to login panel</h1><br><br>
                    <h1 style="text-align:center; font-size:25px;">Student Login Form</h1><br>
                 <form name="login" action="" method="">
                    <input type="text" name="username"placeholder="Username" required=""><br><br>
                    <input type="password" name="password" placeholder="Password" required=""><br><br>
                    <button>Login</button>
                 </form>
                 <p style="color:white;">
                    <br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a style="color: white;" href="">Forgot password?</a><br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Don't have an account?&nbsp&nbsp<a style="color:white;" href="registration.php">Sign Up</a>
                 </p>

                    
                </div>

            </div>

        </section>

    </body>
</html>