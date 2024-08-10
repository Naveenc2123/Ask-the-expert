
<?php
session_start();
$id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: aquamarine;
            padding-top: 5px;
        }

        header {
            top: 0;
            position: fixed;
            width: 100%;
            z-index: 1030;
        }

        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
        }

        .form-inline {
            padding-left: 100px;
        }

        .sidebar {
            height: 100vh;
            position: relative;
            background-color: #343a40;

            padding-top: 20px;
        }

        .ghg {
            text-decoration: none;
            color: white;
            background-color: red;
            padding: 20px 34px;
            text-align: center;
            font-size: 20px;
            display: inline-block;

        }

        .button {
            text-decoration: none;
            color: white;
            background-color: green;


            padding: 20px 34px;
            text-align: center;

            display: inline-block;
            font-size: 20px;
        }
    </style>
</head>

<body>

   

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                User Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                specialist Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                           
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-lg-10">
                <table class="table" border="2">
                    <tr>
                        <th>id</th>
                        
                        <th>name</th>
                        <th>date of birth</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>user_id</th>
                        <th>password</th>
                        <th>gender</th>
                        <th>
                            status
                        </th>


                    </tr>

                    <?php
                    $servername = "localhost";
                    $user = "root";
                    $password = "";
                    $db = "registeration";
                    $con = mysqli_connect($servername, $user, $password, $db);
                    if ($con) {
                        $q = "select * from user_register where status='New'";
                        $sq = mysqli_query($con, $q);
                        while ($ro = mysqli_fetch_row($sq))

                            print("
                            <form action='' method='post'>
    <input type='text' name='id' value='$ro[0]'>

                            

    <tr>
    <td>$ro[0]</td>
    <td>$ro[1]</td>
    <td>$ro[2]</td>
    <td>$ro[3]</td>
    <td>$ro[4]</td>
    <td>$ro[5]</td>
    <td>$ro[6]</td> 
    <td>$ro[7]</td> 
    <td>$ro[8]</td>
    <td>$ro[9]</td> 
   <td><input type='submit' name='submit' value='accept' class='btn btn-success'>
   <input type='submit' name='submit1' value='cancel' class='btn btn-danger'>
   </td></form>
                   
    ");
                    }
                    ?>
                </table>
                <?php

                if (isset($_POST["submit"])) {
                    $id = $_POST["id"];
                    $ql = "select * from user_register where id=$id";
                    $sql = mysqli_query($con, $ql);
                    while ($ro = mysqli_fetch_row($sql))
{
                       
                        session_start();
                        $_SESSION["id"] = $id;
                        
                        echo "<script>
    document.location='generareuser.php';
    </script>";
                    }
                }


                ?>




            </div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 ASK THE EXPERTS</p>
    </footer>
</body>

</html>
