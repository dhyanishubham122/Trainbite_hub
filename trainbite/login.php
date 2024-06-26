<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & sign-up page</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <div class="container">


        <section class="login">
            <div class="logo">
                <h1>LogIn</h1>
            </div>
            <form  method="post">
                <input type="text" class="form-control" placeholder="Mail Id" name="email">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="submit" value="LogIn" class="bg-primary" name="loginn">
                <!-- <input type="submit" value="Admin-Login" class="bg-primary" id="Admin-Login"> -->
                <p>You don't have an account? <a href="#" onclick="change()">SignUp </a> </p><br>
                <p><a href="#">Forgotten password?</a></p><br>
                <p><a href="ind.html">Admin Login</a></p>
            </form>
            <?php
            //include('test.php');
            if(isset($_POST['loginn']))
            {
                $con=mysqli_connect("localhost","root","root","trainbite");
                // $uname=$_POST['uname'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                
                $query="select * from users where email='$email' and password='$password'";
                $row=mysqli_query($con,$query);
                if(mysqli_num_rows($row)>=1)
                header("Location:landingPage.html");
                //echo("yes");
                mysqli_close($con);
                die;
            }
            ?>
            <div class="media">
                <li><i class="fab fa-google-plus-g fa-2x" style="color: red;"></i></li>
                <li><i class="fab fa-facebook fa-2x" style="color: blue;"></i></li>
                <li><i class="fab fa-twitter fa-2x" style="color: dodgerblue;"></i></li>
                <li><i class="fab fa-github fa-2x" style="color: #3c3c3c;"></i></li>
            </div>
        </section>
    </div>
    <!-- copy and paste for signup -->

    <div class="container1">
        <section class="signup">
            <div class="logo">
                <h1>Sign-up</h1>
            </div>
            <form  method="post"> 

                <input type="text" class="form-control" placeholder="User Name" name="uname">
                <input type="text" class="form-control" placeholder="Mail Id" name="email">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="password" class="form-control" placeholder="Confirm Password">
                <input type="submit" value="SignUp" class="bg-success" name="sign_up">

                <p>You alredy have an account? <a href="#" onclick="change()">LogIn</a> </p>
            </form>
            
            <?php
            //include('test.php');
            if(isset($_POST['sign_up']))
            {
                $con=mysqli_connect("localhost","root","","trainbite");
                $uname=$_POST['uname'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $query="insert into users (usrname, email,password) values ('$uname','$email','$password')";
                mysqli_query($con,$query);
                 header("Location:login.php");
                 mysqli_close($con);
                die;
            }
            ?>
            <div class="media">
                <li><i class="fab fa-google-plus-g fa-2x" style="color: red;"></i></li>
                <li><i class="fab fa-facebook fa-2x" style="color: blue;"></i></li>
                <li><i class="fab fa-twitter fa-2x" style="color: dodgerblue;"></i></li>
                <li><i class="fab fa-github fa-2x" style="color: #3c3c3c;"></i></li>
            </div>
        </section>

        <div class="empty">
            <div class="empty1">
                <div class="content">
                    <h1>HELLO!</h1>
                    <p>WE ARE HAPPY TO SEE YOU <br> AGAIN</p>
                </div>
            </div>
            <div class="empty2">
                <div class="content">
                    <h1>WELCOME!</h1>
                    <p>REGISTER AND ENJOY OUR <br>BENEFITS</p>
                </div>
            </div>
        </div>

    </div>
    <script>
        function change(){
            var e=document.querySelector('.container');
            e.classList.toggle('active');


            var e=document.querySelector('.container1');
            e.classList.toggle('active');
        }
    </script>
</body>
</html>
