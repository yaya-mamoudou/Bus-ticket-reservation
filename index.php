<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/index.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="loader()">
    
    <div class="navbar">
        <a href="#down"><i class="fa fa-caret-down down"></i></a>
        <a href="#up"><i class="fa fa-caret-up up"></i></a>
        <div class="logo" style = "height: 90px; width: 90px; position: relative; top: 9px;">
            <img src="./photo/logo.jpg" style = "border-radius: 48%" width="100%" height="100%" alt="LOGO">
        </div>
        <ul class="nav_items">
            <span style = "font-size: inherit" class = "username">
                <?php if(isset($_SESSION["username"])){
                    echo $_SESSION["username"];
                }
                ?>
            </span>
            <i onclick="toggleMenu()" id="icon" class="fa fa-bars menu" aria-hidden="true"></i>
            
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
                <a href="./php/logout.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>

    <div id="up" class="background_picture">
        <div class="Bgd_opacity">
            <div class="landing_text">
                <h1>Welcome to Royale Voyages</h1>
                <h2>Where you find comfort in your travel</h2>
                <a href="#reservation">
                    <button title="Click to start reservation" class="reserve_button_link">
                        Reserve
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div id="reservation">
        <div  class="reservation_block">
            <div class="side_picture">
                <div class="blur">
                    
                </div>
            </div>
            <div class="form_area">
                <form name = "reserve_form" class="reserve_form" action="./php/reservationForm.php" method="POST">
                    <div class="form_body form_position">
                        <div class="form_block_style" >
                            <span>Name:</span>
                            <input autocomplete="off" required type="text" name="name" placeholder=". . .">
                        </div>
        
                        <!-- <div class="form_block_style">
                            <span>Phone:</span>
                            <input type="number" name="number" placeholder=". . .">
                        </div> -->
        
                        <div class="form_block_style" >
                            <span style="display: flex;" >
                                Classic:
                            <input type="radio" name="mode" value="classic">
                            VIP:
                            <input type="radio" name="mode" value="VIP">
                            </span>
                        </div>
        
                        <div class="form_block_style">
                            <span>Departure:</span>
                            <select placeholder="Select" name="departure">
                                <option value="Limbe">Limbe</option>
                                <option value="Buea">Buea</option>
                                <option value="Douala">Douala</option>
                                <option value="Yaounde">Yaounde</option>
                                <option value="Bamenda">Bamenda</option>
                                <option value="Baffoussam">Baffoussam</option>
                            </select>
                        </div>
        
                        <div class="form_block_style">
                            <span>Destination:</span>
                            <select name="destination" >
                                <option value="Limbe">Limbe</option>
                                <option value="Buea">Buea</option>
                                <option value="Douala">Douala</option>
                                <option value="Yaounde">Yaounde</option>
                                <option value="Bamenda">Bamenda</option>
                                <option value="Baffoussam">Baffoussam</option>
                            </select>
                        </div>
        
                        <div class="form_block_style">
                            <span>Time:</span>
                            <select name="time">
                                <option value="7am">7am</option>
                                <option value="9am">9am</option>
                                <option value="12am">12am</option>
                                <option value="3pm">3pm</option>
                                <option value="7pm">7pm</option>
                                <option value="11pm">11pm</option>
                            </select>
                        </div>
        
                        <div class="form_block_style">
                            <span>Date:</span>
                            <input type="date" style="width: 30%;" name="date">
                        </div>
        
                        <div class="form_block_style">
                            <span>num of places:</span>
                            <input type="number" required style="width: 15%;" name="number_of_places">
                        </div>

                        <button onclick="Reserve()" type="button" class="reserve">
                           confirm reservation
                        </button>
                    </div>

                    <div id="second_form_filds">
                        <div id="payment" class="payment">
                            <h1>Choose a payment Method</h1>
                            <p><em>This will cost you</em>: 
                                <input name="total_price" readonly="readonly" class="price_place" id="price_place"><em>FCFA</em>
                            </p>
                            <div class="payment_methods">
                                <div class="MTN">
                                    <img width="100%" height="100%" src="./photo/MoMo.jpg" alt="Mobile Money">
                                </div>
                                <div class="Orange">
                                    <img width="100%" height="100%" src="./photo/OM.jpg" alt="Orange Money">
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column;">
                                <h4 style = "margin: 0.4rem">input number</h4>
                                    <input required style="width: 60%; margin: 0 auto;" name="payment_number" type="number">
                                    <button id="loading_button" type="button" onclick="make_payment()" >Click here to make Payment</button>
                            </div>
                        </div>
                
                        <div id="confirm" class="ticket_confirm">
                            <h1>Thank you for trusting us</h1>
                            <h3>Click down to Confirm</h3>
                            <button onclick="Close_pop_up()" >Confirm</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <div id="down" class="footer">
        <div class="blur_footer">
            <div id = "about" class="about">
                <h3 id="about_header" style="text-align: center;margin-bottom: 1rem;">About</h3>
                <hr style="margin-bottom: 1rem;">
                <p class="about_text">
                    Royal Voyage is a travelling agency willing to offer the best of services to Clients. We take you from your <strong>current Location</strong> to your <strong><em>dream Destination </em></strong> with safety, security, and serenity without altering your African Travelling Experience
                </p>
            </div>

            <div class="info">
                <h3 id="info_header" style="text-align: center;margin-bottom: 1rem;">News Block</h3>
                <hr style="margin-bottom: 1rem;">
                <div class="info_content">
                    
                    <div id="pic_place" class="pic_place">
                        
                        <div class="Pic_block">
                            <img src="./photo/meeting.jpg" alt="">
                            <div class="news_buletin">
                                <p>Company held a meeting today on the importance of making the user more comfortable while taking our bus services</p>
                            </div>
                        </div>

                        <div class="Pic_block">
                            <img src="./photo/contract_sign.jpg" alt="">
                            <div class="news_buletin">
                                <p>New partnership with the National Oil company which will be providing all our passengers with a bottle of water.</p>
                            </div>
                        </div>

                        <div class="Pic_block">
                            <img src="./photo/DG.jpg" alt="">
                            <div class="news_buletin">
                                <p>Our Young and Vibrant General Manager. The great mind behind this big Success</p>
                            </div>
                        </div>

                        <div class="Pic_block">
                            <img src="./photo/all_drivers.png" alt="">
                            <div class="news_buletin">
                                <p>Familly time with all members of staff. We have this moment of communion every Semester </p>
                            </div>
                        </div>

                    </div>
                    
                    <i onclick="picFront()" class="fa fa-long-arrow-right right-arrow"></i>
                    <i onclick="picBack()" class="fa fa-long-arrow-left left-arrow"></i>
                </div>
            </div>
        </div>
    </div>

    <div id="close_pop" class="pop_up">
        <i onclick="Close_pop_up()" class="fa fa-times-circle close_btn"></i>
        
        
        
    </div>

    <!-- Blur Screen when sidenav is active -->

    <div class="blur_sideNav"></div>
</body>
</html>