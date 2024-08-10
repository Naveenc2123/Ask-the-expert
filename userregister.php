<html>
    <head>
        <title>
            table creation
        </title>
    </head>
    <body>
        <?php
        $servername="localhost";
        $user="root";
        $password="";
        $db="registeration";
        $con=new mysqli($servername,$user,$password,$db);
         $sql="create table specialist_register(id int(3) unsigned auto_increment primary key,
        name varchar(30),DOB date,phone_number bigint(10),email varchar(20),password varchar(10),
        gender varchar(10),experience varchar(20),field varchar(10))";
       
       
        if($con->query($sql)===true){
            echo" created";

        }
        ?>
    </body>
</html>