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
    
    input, textarea {
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
    
    <title>Signup Page</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="login-form">
            <h1>Signup</h1>
            <!-- <label for="name">Name:</label> -->
            <input type="text" id="nmae" name="name" placeholder="Enter name here" required>

            <!-- <label for="email">Email:</label> -->
            <input type="email" id="email" name="email" placeholder="Enter email here" required>
            
            <!-- <label for="phno">Phone no:</label> -->
            <input type="number" id="phno" name="phno" placeholder="Enter Phone no here" required>

            <!-- <label for="password">Password:</label> -->
            <input type="password" id="password" name="password" placeholder="Enter Password here" required>

            <!-- <label for="password">Confirm Password:</label> -->
            <input type="password" id="confpassword" name="confpassword" placeholder="Re-Enter Password here" required>
            
            <label for="add">Enter Address:</label>
            <textarea type="textarea" id="add" name="add" placeholder="Enter address here" required rows="4" cols="50">
            </textarea>
            <button type="submit" name="submit">Signup</button>
            <h4>already have an account <a href="signup.php">Login</a></h4>
        </form>
        
    </div>
</body>
</html>
<?php
    if(isset($_POST['submit'])) {
        echo "<br>submit pressed";
        if($dbcon) {
            echo "<br>Connected";
        }
        else {
            echo "<br>Connected";
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phno = $_POST['phno'];
        $pass = $_POST['password'];
        $confpass = $_POST['confpassword'];
        $add = $_POST['add'];
        
        // echo "$name  $email  $pass  $confpass";

        $sql = "INSERT INTO user(email, name, password, phoneno, address) VALUES ('$email', '$name', '$pass', '$phno', '$add')";
        
        if($pass == $confpass) {
            if(mysqli_query($dbcon, $sql)) {
                $sql1 = "CREATE TABLE $name ( proname VARCHAR(20) , price INT )";
                if(mysqli_query($dbcon, $sql1)) {
                    ?>
                    <script>alert("Table created");</script>
                    <?php
                }
                else {
                    ?>
                    <script>alert("error");</script>
                    <?php
                }
                ?>
                <script>alert("Data inserted");</script>
                <?php
                sleep(1);
                // echo "<h1> shdioshcviowsdhiswwfv </h1>";
                header('Location: login.php');
            }
            else {
                echo "<br>error";
            }

        }
        else {
            ?>
            <script>alert("Password and Confirm Passsword should be same");</script>
            <?php
        }
        
    }
?>