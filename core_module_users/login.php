<?php
    session_start();


    if(isset($_GET['q']) && !empty($_GET['q'])) {
        echo "<script>alert('Erron: Invalid credentials...Please login/signUp')</script>";
        $_GET['q'] = '';
    }

    
    if(isset($_SESSION["user_email"]) && !empty($_SESSION["user_email"])) {
        header("Location: dashboard.php");      
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Shop - Login</title>
    	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
        }

        body{
            background-image: url("../images/employees-at-coprorate-event.jpg");
            overflow: hidden;
                       
        }
    </style>
</head>
<body>
    <div class="row">
        <div style="margin:150px auto; width:300px;">
           <div class="card">
				<div class="card-header" style="background-color:skyblue;">
                    <h5 style="color:white">Login to your work space</h5>
                </div>
                <div class="card-body">
                    <form action="./dashboard.php" method="POST">
                            
                            <div class="form-group">
                                <label for="login_email">Email:</label>
                                <input type="email" class="form-control" id="login_email" name="login_email">
                                
                            </div>
                            <div class="form-group">
                                <label for="login_password">Password:</label>
                                <input type="password" class="form-control" id="login_password" name="login_password">
                            </div>
                            <button type="submit" name="login_submit" id="signup" class="btn btn-primary btn-block">Login</button>
                            
                        </form>

                </div> 
                
            </div>
        </div>
    </div>

                            <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>