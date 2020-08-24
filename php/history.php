<?php session_start();
    if(!isset($_SESSION["username"])){
        header("location: ../index.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            backgroung: white;
        }
        table{
            border: solid 1px #ccc;
            margin: 17vh auto 0;
        }

        th{
            padding: 1rem;
            border: 1px solid #ccc;
        }
        

        tr,td{
            padding: 1rem;
            border: 1px solid #ccc;
        }
        .table_body{
            overflow-x: hidden;
            background-color: white;
            display: flex;
            /* width: 100vw;
            height: fit-content;  */
            min-height: -webkit-fill-available;
        }
        .menu{
            font-size: inherit;
        }
        .bg{
            background-image: url("../photo/tissu.jpg");
            background-size: cover;
        }
    </style>
</head>
<body>

    <div class="navbar" style = "background-color:  #46344E; color: white;">
            <a href="#down"><i class="fas fa-caret-square-down down"></i></a>
            <a href="#up"><i class="fas fa-caret-square-up up"></i></a>
            <div class="logo">
                logo
            </div>
            <ul class="nav_items">
                <i onclick="toggleMenu()" id="icon" class="fa fa-bars menu" aria-hidden="true"></i>
                <a href="../index.php" class = "menu">Home</a>
            </ul>
            <div class="sideNav">
                <ul>
                    <a href="#down">
                        <li onclick="linkTo('about')">About</li>
                    </a>
                    <li>Help</li>
                    <a href="#down">
                        <li onclick="linkTo('info')">info</li>
                    </a>
                    <a href="./php/history.php"><li>History</li></a>
                </ul>
            </div>
        </div>
<div class = "table_body">
    
    <?php 
        $count = 1;
        require './connection.php';
    
        $query = mysqli_query($conn, "SELECT * FROM `transactions` WHERE `personID` = '$_SESSION[userID]'" );
        echo "<table >
        <th>N#</th>
        <th>Name</th>
        <th>Mode</th>
        <th>departure</th>
        <th>Arival</th>
        <th>Number Of Ticket</th>
        <th>Bill</th>       
        ";

        while($result = mysqli_fetch_array($query)){
            echo "<tr><td>$count</td><td>$result[ticketOwnerName]</td><td>$result[mode]</td><td>$result[departure]</td><td>$result[arrival]</td><td>$result[numberOfPlaces]</td><td>$result[ticket_billing]</td></tr>";
            $count++;
        }
        echo "</table>"; 
    ?>
</div>
</body>
</html>