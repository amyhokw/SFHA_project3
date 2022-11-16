<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak - Admin Add Adventure</title>
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

    <main>
    <h2>Admin - Add Adventure</h2>
    <hr>
    <p>Input details about the trip
    <form action="admin-confirm.php" method="POST">

    <label>Heading    
            <input type ="text" name = "heading" required>
            <br>
        </label>
        <label>Trip Date    
            <input type = "date" name= "tripDate" required>
            <br>
        </label>
        <label>Duration 
            <input type = "text" name = "duration" required>
            <br>
        </label>
        <label>Summary  
            <input type = "text" name = "summary" required> 
            <br>
        </label>
        
        <br>
        <input type="submit" value="Submit">
    </form>
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