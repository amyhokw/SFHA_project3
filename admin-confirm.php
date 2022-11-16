<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak - Admin Confirm</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <nav class="navigation">
        <div class="navbar">
            <!-- <img class="icon" src="images/hamburger.png" alt="Hamburger"/> -->
            <button class="iconBtn"><img src="images/hamburger.png" alt="Hamburger"></button>
            <h1 class="title">Halifax Canoe and Kayak</h1>
            <img class="icon" src="images/paddle-white.png" alt="Paddle"/>
        </div>
        <div class="dropdownMenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="book.php">Book Trip</a></li>
                <li><a href="admin-add.php">Admin</a></li>
            </ul>
        </div>
    </nav>

    <?php
    $servername = "localhost";
    $username = ""; // please input username
    $password = ""; // please input password
    $dbName = "skillsdemo";

    $conn = mysqli_connect($servername, $username, $password, $dbName);

    if (!$conn) {
        die("Connection failed: ". mysqli_connect_error());
    }
    ?>

    <main>
        <h2>Admin - Confirm</h2>
        <hr>
        <p>Data has added successfully to DB
            
        <?php 
        $heading = $_REQUEST['heading'];
        $tripDate = strtotime($_REQUEST['tripDate']);
        $tripDate = date('Y-m-d H:i:s', $tripDate);
        $duration= $_REQUEST['duration'];
        $summary = $_REQUEST['summary'];

        $sql = "INSERT INTO canoe_kayak (heading, tripDate, duration, summary)
        VALUES ('$heading', '$tripDate', '$duration', '$summary')";

        if (mysqli_query($conn, $sql)) {
            // echo "<br>";
            // echo "Trip has been added sucessfully.";
        } else {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
        
        <br>
        <div><a href="all-adventures.php">View All Adventures</a></div>
    </main>

    <script>

        $(document).ready(function() {
            $(".dropdownMenu").hide();

        })

        $(document).ready(function() {
            $(".iconBtn").click(function() {
                $(".dropdownMenu").fadeToggle()
            });
        });
    
    
    
    </script>    

</body>
</html>



