<?php
    $host = 'localhost';
    $username ='root';
    $password = '';
    $database = 'furniture_store';
    $dbcon = @mysqli_connect($host, $username, $password, $database);
    if(!$dbcon){
        die('could not find database'. mysqli_error($dbcon));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        display: block;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        width: auto;
        background-image: url("https://lh3.googleusercontent.com/p/AF1QipOWR20oeJBq4bbtRdgoF7BAFV9eoOcVoh2jiz92=w1080-h608-p-no-v0");
        background-size: 1540px 720px; 
        background-repeat: no-repeat;
        /* opacity: 0.6; */
        
    }

    
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh; 
    }
    
    .login-form {
        background-color: hsl(32, 13%, 74%);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        text-align: center;
        color: #333;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
    }
    
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }
    
    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #0056b3;
    }
    </style>
    
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="login-form">
            <h1>Login</h1>
            <label for="username">Username / Email:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="submit">Login</button>
            <h4>Don't have an account yet? <a href="signup.php">Sign Up</a></h4>
        </form>
        
    </div>
</body>
</html>

<?php
//https://www.sitepoint.com/community/t/using-session-variables-to-keep-user-logged-in-if-they-havent-logged-out/294407
ob_start();
session_start();
// include 'db.php';
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username =='' || $password == ''){
	echo '<p class="errorMsg">All the fields are required</p>'; 
	}else{
		$sql = mysqli_query($dbcon,"SELECT * FROM user WHERE email = '$username' AND password = '$password'");

        if(mysqli_num_rows($sql) == 1) {
            // $row = $result->fetch_assoc();

	        $member = mysqli_fetch_assoc($sql);

			$_SESSION['username'] = $member['name'];
			$_SESSION['contact_id'] = $member['phoneno'];
			
            sleep(1);
			header('Location: index.php?d=index'); 
		
        }else{
            echo '<p class="loginerror">Invalid username or password</p>';
        }
	
	}
}

?>

<?php
    if(isset($_POST['submit'])) {
        echo "<br>submit pressed";
        if($dbcon) {
            echo "<br>Connected";
        }
        else {
            echo "<br>Connected";
        }

        $email = $_POST['username'];
        $pass = $_POST['password'];
        
        echo "  $email  $pass ";
        
    }
?>