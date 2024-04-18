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
<?php
            include('../page-components/header.php');
        ?>

        <div class="offer">
        <h1>Package offer</h1>
        <p>Choose your destination</p>
        <div class="cardas">
            <div class="carda">
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
                    <div class="days">5 Days <br>Nepal</div>
                </div>
            </div>
            <div class="carda">
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
                            <h4>Rs.4000</h4>
                        </div>
                    </div>
                    <div class="days">7 Days <br>Nepal</div>
                </div>
            </div>
            <div class="carda">
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
            <div class="carda">
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
                    <div class="days">10 Days <br>Nepal</div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
            include('../page-components/footer.php');
        ?>
        <script src="app.js"></script>

    
</body>
</html>