<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "5";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
        <?php
            $servername = "my-mysql";
            $username = "u195637119_vishalsproject";
            $password = "ZGfgxEaPNJyx@9j";
            $database = "u195637119_wheels4water";
            
            $connect = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                echo "Connected to MySQL successfully";
                $result = mysqli_query($connect, "SELECT * FROM hosiptals") or die(mysqli_error($connect));
                print_r(mysqli_fetch_array($result));

                echo "<br>";
            }
            
            // Close the connection
            mysqli_close($connect);

            if(isset($_GET['india'])) echo "INDIA IS THERE";
            else if(!isset($_GET['india'])) echo "INDIA IS NOT HERE";
            echo "<br>Watch the page reload itself in 5 seconds!";

            echo "<br><br>One can access the environment variables by defining them in the deployment config details..";
        ?>
        <p contentEditable="true">
            I am going to win for sure
        </p>
    </body>
</html>
