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

<?php
    session_start();
    if(isset($_SESSION['username'])) {
        $table_name = $_SESSION['username'];
        $sql = mysqli_query($dbcon,"TRUNCATE TABLE $table_name ");
        if($sql){

        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
</head>
<body>
    <script>
        alert("order confirmed");
    </script>
    <div class="row"> 
        <h3><center> Your order is confirmed and shipped on your address. Thank you for shopping with us. <a href="index.php">Click here</a> to purchase any other item.</center></h3>
        <?php
            // sleep(20);
			// header('Location: index.php?d=index'); 

        ?>
    </div>
</body>
</html>