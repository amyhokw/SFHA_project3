<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak - All Adventures</title>
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

    <div class="container">
        <img class="mainimg" src="images/canoe.jpg" alt="Canoe">
        <div class="maintxt">Come Experience<br> Canada</div>
    </div>

    <main class="mainbody">

        <h2 class="mainbodytxt">Upcoming Adventures</h2>  

        <br>

        <?php
        $sql = "SELECT * FROM canoe_kayak ORDER BY tripDate";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

                echo "<h2 class=\"location\">" . $row['heading'] . "</h2>";
                echo "<h3>"  ."Date: ". $row['tripDate'] . "<br>";
                echo "Duration: " . $row['duration'] . " days</h3><br>";
                echo "<h4>" . "Summary </h4>";
                echo "<p>" . $row['summary'] . "</p>";
            }
        } else {
            echo "Sorry, no upcoming adventures at this moment.";
        }
    
        mysqli_close($conn);
        ?>  
    
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