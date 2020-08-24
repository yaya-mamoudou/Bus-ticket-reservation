<?php
    session_start();
    require 'connection.php' ;

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['mode'])) {
        $mode = $_POST['mode'];
    }

    if(empty($mode)){
        $mode = "classic";
    }
    
    $payment_number = $_POST["payment_number"];
    $departure = $_POST["departure"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $number_of_places = $_POST["number_of_places"];
    $total_bill = $_POST["total_price"];

    if($number_of_places == ""){
        $number_of_places = 1;
    }


    $all_info = array('name' => $name, 'mode' => $mode, 'departure' => $departure, 'destination' => $destination, 'date' => $date, 'time' => $time, 'number_of_places' => $number_of_places, 'total_bill' => $total_bill, 'transaction_number' => 0 );

    $_SESSION["all_info"] = $all_info;



    $query = "INSERT INTO transactions (`personID`,`ticketOwnerName`,`mode`,`departure`,`arrival`,`travelDate`,`travelTime`,`numberOfPlaces`,`ticket_billing`,`paymentNumber`) VALUES ('$_SESSION[userID]','$name','$mode','$departure','$destination','$date','$time','$number_of_places','$total_bill','$payment_number')";

     if($conn->query($query) != TRUE){
        echo "Error: " . $query . "<br>" . $conn->error;
     }
     else{
         header('location: ../index.php');
     }


    
?>
