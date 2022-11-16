<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak - Book Trip</title>
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
    <h2>Book A Trip</h2>
    <hr>
    <p>Just Some Quick Details
    <form action="thank-you.php" method="GET">
        <label>Email
            <input type="email" name="email" required>
            <br>
        </label>
        <label>Location
            <select name="location" required>
                <option value="" selected disabled>Select</option>
                <option value="Halifax">Halifax</option>
                <option value="Sydney">Sydney</option>
            </select>
            <br>
        </label>
        <label>Trip Date
            <input type="date" name="tripDate" required>
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