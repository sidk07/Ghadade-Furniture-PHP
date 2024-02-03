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
        $sql = mysqli_query($dbcon,"SELECT * FROM $table_name ");
    }
    
?>

<!DOCTYPE HTML>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
     
        <script>
            function order() {
                if (confirm("Do you want to place order??") == true) {
                    window.location.href = 'success.php';
                } 
            }

        </script>
        <!-- <link href="../../css/index.css" rel="stylesheet" type="text/css"/>  -->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">GADADE FURNITURE</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div><br><br><br><br>
        <div class="container head-padding"></div>
            <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <?php
                                if(mysqli_num_rows($sql) < 1) {
                                    // $row = $result->fetch_assoc();
                                    echo "<tr>
                                    <th style='font-size: 20px;'> Your cart is Empty!!</th>
                                    </tr>";
                                    // $member = mysqli_fetch_assoc($sql);
                        
                                    // $_SESSION['username'] = $member['name'];
                                    // $_SESSION['contact_id'] = $member['phoneno'];
                                    
                                    // sleep(1);
                                    // header('Location: index.php?d=index'); 
                                
                                }
                            ?>
                        <tr><th>Item Number</th> <th>Item Name</th> <th>Price</th> <th> </th> </tr>
                        <?php
                            if(mysqli_num_rows($sql) > 0) {
                                $count = mysqli_num_rows($sql);
                                $num = 1;
                                // $member = mysqli_fetch_assoc($sql);
                                while ($member = mysqli_fetch_assoc($sql) and $num <= $count) {
                                    echo "<tr>";
                                    echo "<td>" . $num . "</td>";
                                    echo "<td>" . $member['proname'] . "</td>";
                                    echo "<td>" . $member['price'] . "</td>";
                                    echo "<td> </td>";
                                    echo "</tr>";
                                    $num += 1;
                                }
                            }
                        ?>
                        <tr><td> </td> <td> </td> <td> </td> <td> </td></tr>
                        <tr><td> </td> <td>Total</td> <td>
                        <?php
                            if(mysqli_num_rows($sql) > 0) {
                                $sql1 = mysqli_query($dbcon,"SELECT SUM(price) from asd;");
                                // $count = mysqli_num_rows($sql);
                                // $num = 1;
                                $member = mysqli_fetch_assoc($sql1);
                                // while ($member = mysqli_fetch_assoc($sql) and $num <= $count) {
                                //     echo "<tr>";
                                //     echo "<td>" . $num . "</td>";
                                //     echo "<td>" . $member['proname'] . "</td>";
                                //     echo "<td>" . $member['price'] . "</td>";
                                //     echo "<td> </td>";
                                //     echo "</tr>";
                                //     $num += 1;
                                // }
                                echo "Rs ".$member['SUM(price)'];
                            }
                        ?>
                        </td> <td><a onclick="order();" class="btn btn-primary">Confirm Order</a></td></tr>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>