<?php
session_start();

// require 'db.php';
// $query = "SELECT contact_id FROM contactdetails ";
//     $result = mysqli_query($dbcon,$query);
// 	$row = @mysqli_num_rows($result);
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
    if(isset($_POST['matt1'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('mattress1','352')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['matt2'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('mattress2','359')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['matt3'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('mattress3','684')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['matt4'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('mattress4','548')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['bed1'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('bed1','854')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['bed2'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('bed2','785')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['bed3'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('bed3','856')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['bed4'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('bed4','865')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['sofa1'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('sofa1','658')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['sofa2'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('sofa2','455')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['sofa3'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('sofa3','625')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['sofa4'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('sofa4','458')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['tabel1'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('tabel1','325')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['tabel2'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('tabel2','452')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['tabel3'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('tabel3','412')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }

    if(isset($_POST['tabel4'])) {
        if(isset($_SESSION['username'])) {
            $table_name = $_SESSION['username'];
            $sql = "INSERT INTO $table_name (proname, price) VALUES ('tabel4','352')";
            if(mysqli_query($dbcon, $sql)) {
                ?>
                <script>alert("Added to cart");</script>
                <?php
            }
            else {
                ?>
                <script>alert("error");</script>
                <?php
            }
        }
        else {
            ?>
                <script>alert("Please login first");</script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            transition: .3s;
        }

        nav a:hover {
            font-weight: 900;
        }

        .profile {
            margin-left: 70%;
        }

        main {
            display: flex;
            flex-direction: column;
            /* justify-content: space-around; */
            padding: 20px;
        }

        .container1 {
            display: block;
            padding: 0px;
            border: 1px solid #ccc;
            margin: 0px;
            height: 350px;
            width: auto;
            background-image: url(https://wakefit-co.s3.ap-south-1.amazonaws.com/consumer-react/banners/static-common-banner.jpg) ;
            background-size: contain; 
            /* background-repeat: no-repeat; */
        }

        .container2 {
            /* flex: 1; */
            padding: 20px;
            height: auto;
            border: 1px solid #ccc;
            margin: 40px;
        }

        .Furniture_label{
            color:black; 
            text-align:center;
            font-weight:900;
            font-size: 2rem;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .row1{
            display:flex;
            flex-direction: row;
        }

        .img{
            display: block;
            padding: 0px;
            border: 1px solid #ccc;
            background-size: contain; 
            height:200px;
            width:1000px;
            margin:40px;
        }

        .add {
            width: 100%;
            font-size: 30px;
            background-color: rgba(0,0,0,0.6);
            color:white;
            /* position: absolute; */
            Left: 0px;
            bottom: -40px;
            opacity: 0;
            transition: 1s;
        }

        .img:hover .add {
            bottom: 0px;
            opacity: 1;
        }

        .img1{
            background-image: url("https://wakefitdev.gumlet.io/img/mattresslifestyle/ortho_01.jpg?w=1700");
        }
        .img2{
            background-image: url("https://wakefitdev.gumlet.io/img/cooltech/1.jpg?w=1140");
        }
        .img3{
            background-image: url("https://wakefitdev.gumlet.io/img/Beds_Cosmo81223/WEWB7236NONTAURUSPGR2/WEWB7236NONTAURUSPGR2_1.jpg?w=1920");
        }
        .img4{
            background-image: url("https://wakefitdev.gumlet.io/img/npl_modified_images/Bed_sheets/Images/Paulas.jpg?w=1700");
        }
        .img5{
            background-image: url("https://wakefitdev.gumlet.io/img/engineered-wood-bed/cosmo-queen/1.jpg?w=1700");
        }
        .img6{
            background-image: url("https://wakefitdev.gumlet.io/img/Beds_Cosmo81223/WEWB7236NONTAURUSPGR2/WEWB7236NONTAURUSPGR2_1.jpg?w=1700");
        }
        .img7{
            background-image: url("https://wakefitdev.gumlet.io/img/npl_modified_images/UP_Beds/WEWB7860NONUPOPLMARS/1.jpg?w=1700");
        }
        .img8{
            background-image: url("https://wakefitdev.gumlet.io/img/npl_modified_images/UPBeds/WEWB7860NONALGOL/1.jpg?w=1700");
        }
        .img9{
            background-image: url("https://wakefitdev.gumlet.io/img/sofa-sets/napper/sectional/lifestyle/lc/FOBL.jpg?w=1700");
        }
        .img10{
            background-image: url("https://wakefitdev.gumlet.io/img/sofa-sets/napper/regular/lifestyle/LATC.jpg?w=1700");
        }
        .img11{
            background-image: url("https://wakefitdev.gumlet.io/img/naples/fobl/1.jpg?w=1700");
        }
        .img12{
            background-image: url("https://wakefitdev.gumlet.io/img/sofa-sets/lifestyle/WSFAFLPR3CFOBL.jpg?w=1700");
        }
        .img13{
            background-image: url("https://wakefitdev.gumlet.io/img/npl_modified_images/Lamps221223/WDINEACNOS6COPIW/WDINEACNOS6COPIW_1.jpg?w=1700");
        }
        .img14{
            background-image: url("https://wakefitdev.gumlet.io/img/dining/sets/mintosw/1.jpg?w=1700");
        }
        .img15{
            background-image: url("https://wakefitdev.gumlet.io/img/dining/sets/salvia/4s/0.jpg?w=1700");
        }
        .img16{
            background-image: url("https://wakefitdev.gumlet.io/img/dining/sets/finiksw/1.jpg?w=1700");
        }

        footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      display:flex;
      flex-direction: row;
    }

    .contact {
      margin-bottom: 10px;
      margin-left: 100px;
      margin-right: 200px;
    }

    .address{
        margin-right: 100px;
        margin-left: 100px;

    }

    .Social_media{
        display:inline-block;
        flex-direction:row ;
        margin-left: 200px;

    }

    .Whatsapp{
        display: block;
        padding: 0px;
        border: 1px solid ;
        margin: 0px;
        height: 15px;
        width: 15px;
        margin:20px;
        background-image: url("https://cdn.vectorstock.com/i/preview-1x/15/29/green-phone-in-speech-bubble-icon-whatsapp-vector-6261529.webp");
        background-size: contain; 
        border-radius: 50%;
    }

    .Instagram{
        display: block;
        padding: 0px;
        border: 1px solid;
        margin: 0px;
        height: 15px;
        width: 15px;
        margin:20px;
        background-image: url("https://seeklogo.com/images/I/instagram-logo-2D3332C00B-seeklogo.com.png");
        background-size: contain; 
        border-radius: 50%;
    }

    .Facebook{
        display: block;
        padding: 0px;
        border: 1px solid #ccc;
        margin: 0px;
        height: 15px;
        width: 15px;
        margin:20px;
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Facebook_Logo_2023.png/900px-Facebook_Logo_2023.png");
        background-size: contain; 
        border-radius: 50%;
    }

    </style>
</head>
<body>

    <header>
        <h1><u>GADADE FURNITURE</u></h1>
    </header>

    <nav>
        <div class="nav">
            <a onclick="smoothScroll(document.getElementById('mattress'));">MATTRESS</a>
            <a onclick="smoothScroll(document.getElementById('bed'));">BED</a>
            <a onclick="smoothScroll(document.getElementById('sofa'));">SOFA</a>
            <a onclick="smoothScroll(document.getElementById('dinningTable'));">DINNING TABLE</a>
        </div>
        <div class="profile">
            <h3><?php
            if (isset($_SESSION['username'])) {
                echo "<p>Logged in as <span>" .$_SESSION['username']. "</span> <a href ='cart.php'>Cart</a></p>";
                echo "<a href ='logout.php'>Log out here</a>";
            }
            else {
                echo "<a href ='login.php'>Login here</a>";
            }   ?></h3>
        </div>
    </nav>

    <main>
        <div class="container1">
            <p class="Furniture_label"><b>FURNITURE</b></p>
        </div>  

        <div class="container2">
            <h1 style="text-align:center; color:rgb(66, 131, 161);"><u><b>Our Products</b></u></h1>
            <form action="" method="post">
            <div class="row1" id="mattress">
                <h2 style="margin-top:90px; color:brown;">MATTRESS</h1>
                <br>
                <div class="img1  img">
                    <button type="submit" name="matt1" class="add" >Add to cart</button>   
                </div>
                <div class="img2 img">
                    <button type="submit" name="matt2" class="add">Add to cart</button> 
                </div>
                <div class="img3 img">
                    <button type="submit" name="matt3" class="add">Add to cart</button> 
                </div>
                <div class="img4 img">
                    <button type="submit" name="matt4" class="add">Add to cart</button> 
                </div>
            </div>

            <div class="row1" id="bed">
                <h2 style="margin-top:90px; color:brown;">BED</h1>
                <div class="img5 img" style="margin-left: 120px;">
                    <button type="submit" name="bed1" class="add">Add to cart</button> 
                </div>
                <div class="img6 img">
                    <button type="submit" name="bed2" class="add">Add to cart</button> 
                </div>
                <div class="img7 img">
                    <button type="submit" name="bed3" class="add">Add to cart</button> 
                </div>
                <div class="img8 img">
                    <button type="submit" name="bed4" class="add">Add to cart</button> 
                </div>
            </div>
            <div class="row1" id="sofa">
                <h2 style="margin-top:90px; color:brown;">SOFA</h1>

                <div class="img9 img" style="margin-left: 105px;">
                    <button type="submit" name="sofa1" class="add">Add to cart</button> 
                </div>
                <div class="img10 img">
                    <button type="submit" name="sofa2" class="add">Add to cart</button> 
                </div>
                <div class="img11 img">
                    <button type="submit" name="sofa3" class="add">Add to cart</button> 
                </div>
                <div class="img12 img">
                    <button type="submit" name="sofa4" class="add">Add to cart</button> 
                </div>
            </div>
            <div class="row1" id="dinningTable">
                <h2 style="margin-top:90px; color:brown;">DINNING TABLE</h1>

                <div class="img13 img" style="margin-left: 70px;">
                    <button type="submit" name="tabel1" class="add">Add to cart</button> 
                </div>
                <div class="img14 img">
                    <button type="submit" name="tabel2" class="add">Add to cart</button> 
                </div>
                <div class="img15 img">
                    <button type="submit" name="tabel3" class="add">Add to cart</button> 
                </div>
                <div class="img16 img" cla>
                    <button type="submit" name="tabel4" class="add">Add to cart</button> 
                </div>
            </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="contact">
            <p>Contact us:</p>
            <p>Email: Gadadefurniture@gmail.com</p>
            <p>Phone: 9623XXXXXX</p>
        </div>
          
        <div class="address">
            <h4 style="color: #fff;">Address:</h4>
            <p>Elgle Cloth Centre, Shop No 1, Mani Road, <br>Sangli Miraj Kupwad, Maharashtra 416416</p>
        </div>

        <div class ="Social_media">
            <h4 style="color: #fff;">Social Media:</h4>
            <div class ="Whatsapp" style="margin: 5px;"></div>
            <div class="Instagram" style="margin: 5px;"></div>
            <div class="Facebook" style="margin: 5px;"></div>
        </div>
          
    </footer>

    <script>
        window.smoothScroll = function(target) {
            var scrollContainer = target;
            do { 
                scrollContainer = scrollContainer.parentNode;
                if (!scrollContainer) return;
                scrollContainer.scrollTop += 1;
            } while (scrollContainer.scrollTop == 0);

            var targetY = 0;
            do { 
                if (target == scrollContainer) break;
                targetY += target.offsetTop;
            } while (target = target.offsetParent);

            scroll = function(c, a, b, i) {
                i++; if (i > 30) return;
                c.scrollTop = a + (b - a) / 30 * i;
                setTimeout(function(){ scroll(c, a, b, i); }, 20);
            }
            
            scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
        }
    </script>
</body>
</html>
