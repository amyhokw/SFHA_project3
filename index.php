<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak</title>
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

    <div class="container">
        <img class="mainimg" src="images/canoe.jpg" alt="Canoe">
        <div class="maintxt">Come Experience<br> Canada</div>
    </div>

    <main class="mainbody">

        <h2 class="mainbodytxt">Upcoming Adventures</h2>  

        <br>

        <h2 class="location">Halifax</h2>

        <h3>
            Date: 2022-04-12
            <br>
            Duration: 4 days
        </h3>

        <br>
        <h4>Summary</h4>
    
            <p>Lorem ipsum dolor sit amet. Et fugiat quos aut fuga 
            rerum et neque similique id quis delectus. Aut cumque
            voluptas sed animi nihil non quis Quis est corrupti 
            cumque ut doloribus laboriosam et vero ipsam! Et mollitia 
            facere qui incidunt voluptas est temporibus magni. 
            Sed laudantium soluta sit voluptas placeat qui unde 
            qui excepturi molestiae.</p>
    
             <br>
    
        <h2 class="location">Sydney</h2>
         
        <h3>
            Date: 2022-05-10
            <br>
            Duration: 2 days
        </h3>

        <br>
        <h4>Summary</h4>                 
    
            <p>Lorem ipsum dolor sit amet. Et fugiat quos aut fuga 
            rerum et neque similique id quis delectus. Aut cumque
            voluptas sed animi nihil non quis Quis est corrupti 
            cumque ut doloribus laboriosam et vero ipsam! Et mollitia 
            facere qui incidunt voluptas est temporibus magni. 
            Sed laudantium soluta sit voluptas placeat qui unde 
            qui excepturi molestiae.</p>
            
    
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