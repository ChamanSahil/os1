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
            $servername = "mysql-service";
            $username = "myuser";
            $password = "mypassword";
            $database = "mydb";
            
            // Create a connection
            $connect = mysqli_connect($servername, $username, $password, $database);
            print_r($connect);

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
