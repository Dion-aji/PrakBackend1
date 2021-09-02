<?php 
error_reporting(0);
session_start(); 
$username=$_SESSION['username'];
$password=$_SESSION['password'];
echo "Selamat Datang " .  $username ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <style>
                
                li {
                    text-decoration: none;
                    list-style-type: none;
                }
        </style>
        <ul>
            
            <li>
                <h4><label for="username">Masukan Username</label></h4>
                <input type="textarea" name="username" placeholder="Username" required>
            </li>
            <li>
                <h4><label for="password">Masukan Password</label></h4>
                <input type="password" name="password" id="password" placeholder="password" required>
            </li>
            <li><button type="submit">Login</button></li>
            <div class="col-4">
					<h2></h2>
					<h4><a href="loguot.php">Log Out</a></h4>
				</div>

        </ul>
    </form>
    
    
</body>
</html>