<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../media.css">
    <title>travel agency</title>
</head>
<body>
    


    
    <div class="travel">
        <?php
            include('../page-components/header.php')
        ?>
        <div class="content">
            <div class="cont_bx">
                <h1>Tour all over the world with your loved ones.</h1>
                <p>This is the best guide website for you to choose your dream destination so that you can have best vacation of your life.</p>
                <button>Start browsing</button>
            </div>
            <div class="trip_bx">
                <div class="search_bx">
                    <div class="cardi">
                        <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="text" placeholder="Enter your destination">
                    </div>
                    <div class="cardi">
                        <h4>Date <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="date">
                    </div>
                    <div class="cardi">
                        <h4>People <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="number" placeholder="How many people?">
                    </div>
                    <input type="button" value="Explore Now">
                </div>
                <div class="travel_bx">
                    <h4>Countries to travel</h4>
                    <div class="cardis">
                        <div class="cardi">
                            <h3>Nepal <img src="./../images/Flag_of_Nepal.png" alt=""></h3>
                            <img src="./../images/nepal.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read More</a>
                                <h5>Himalayas <br><span>Rs.40000</span></h5>
                            </div>
                        </div>
                        <div class="cardi">
                            <h3>Japan <img src="./../images/japan flag.png" alt=""></h3>
                            <img src="./../images/japan.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read More</a>
                                <h5>Mt.Fuji <br><span>Rs. 80000</span></h5>
                            </div>
                        </div>
                        <div class="cardi">
                            <h3>Canada <img src="./../images/canada flag.png" alt=""></h3>
                            <img src="./../images/canada.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read More</a>
                                <h5>Niagara Falls <br><span>Rs. 90000</span></h5>
                            </div>
                        </div>
                        <div class="cardi">
                            <h3>Italy <img src="./../images/Flag_of_Italy.svg.png" alt=""></h3>
                            <img src="./../images/italy-ezgif.com-webp-to-jpg-converter.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read More</a>
                                <h5>Tower of Pisa <br><span>Rs. 90000</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    <div class="offers">
        <h1>Package offers</h1>
        <p>Choose your destination</p>
        <div class="cardis">
            <div class="cardi">
                <h3>Pokhara-Nepal</h3>
                <div class="img_text">
                    <img src="../images/pokhara.jpg" alt="">
                    <h4>This package includes: Bus ticket, Hotel charges, Breakfast and Dinner</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>23817</span></i>
                            <i class="bi bi-chat-fill"><span>17813</span></i>
                        </div>
                        <div class="info_price">
                            <a href="../package-pages/pokhara.php">Book Now</a>
                            <h4>Rs. 5000</h4>
                        </div>
                    </div>
                    <div class="days">3 Days <br>Nepal</div>
                </div>
            </div>
            <div class="cardi">
                <h3>Lumbini-Nepal</h3>
                <div class="img_text">
                    <img src="../images/lumbini.jpg" alt="">
                    <h4>This package includes: Bus ticket, Hotel charges, Breakfast and Dinner</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>75983</span></i>
                            <i class="bi bi-chat-fill"><span>39853</span></i>
                        </div>
                        <div class="info_price">
                            <a href="../package-pages/lumbini.php">Book Now</a>
                            <h4>Rs. 4000</h4>
                        </div>
                    </div>
                    <div class="days">3 Days <br>Nepal</div>
                </div>
            </div>
            <div class="cardi">
                <h3>Ghandruk-Nepal</h3>
                <div class="img_text">
                    <img src="../images/ghandrukl.jpg" alt="">
                    <h4>This package includes: Bus ticket, Hotel charges, Breakfast and Dinner</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>42361</span></i>
                            <i class="bi bi-chat-fill"><span>24567</span></i>
                        </div>
                        <div class="info_price">
                            <a href="../package-pages/ghandruk.php">Book Now</a>
                            <h4>Rs. 6999</h4>
                        </div>
                    </div>
                    <div class="days">7 Days <br>Nepal</div>
                </div>
            </div>
            <div class="cardi">
                <h3>Mustang-Nepal</h3>
                <div class="img_text">
                    <img src="../images/Mustang-Nepal-.jpg" alt="">
                    <h4>This package includes: Bus ticket, Hotel charges, Breakfast and Dinner</h4>
                </div>
                <div class="cont_bx">
                    <div class="price">
                        <div class="heart_chat">
                            <i class="bi bi-heart-fill"><span>36789</span></i>
                            <i class="bi bi-chat-fill"><span>48972</span></i>
                        </div>
                        <div class="info_price">
                            <a href="../package-pages/mustang.php">Book Now</a>
                            <h4>Rs. 8000</h4>
                        </div>
                    </div>
                    <div class="days">5 Days <br>Nepal</div>
                </div>
            </div>
        </div>
    </div>
    <div class="destination">
        <div class="des-bx">
            <h2>Our Destinations</h2>
            <p>Choose your next destination</p>
            <li>Japan</li>
            <li>Korea</li>
            <li>Australia</li>
            <li>USA</li>
            <li>Singapore</li>
            <li>Malaysia</li>
            <h5>Included: Air ticket, Hotel, Breakfast, Tours, Airport transport</h5>
            <button>MORE INFO</button>
        </div>
        <div class="img-bx">
            <img src="../images/nepal.jpg" alt="">
            <div class="msg">
                <img src="../images/canada flag.png" alt="">
                <div class="cont">
                    <h4>Canada</h4>
                    <div class="icon">
                    <i class="bi bi-heart-fill"><span>42361</span></i>
                    <i class="bi bi-chat-fill"><span>24567</span></i>
                    </div>
                </div>
            </div>
            <div class="msg">
                <img src="../images/japan flag.png" alt="">
                <div class="cont">
                    <h4>Japan</h4>
                    <div class="icon">
                    <i class="bi bi-heart-fill"><span>42361</span></i>
                    <i class="bi bi-chat-fill"><span>24567</span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('../page-components/footer.php')
    ?>
<script src="app.js"></script>

    
</body>
</html>