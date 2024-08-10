<html>
    <head>
        <title>
            database
        </title>
    </head>
    <body>    
    <?php
    $servername="localhost";
    $user="root";
    $con=new mysqli($servername,$user);
    $sql= "create database registeration";
    if($con->query($sql)===true){
        echo"database created";
    } 
    ?>
    </body>
</html>