<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../media.css">
    <title>travel agency</title>
</head>
<body>
<?php
            include('../page-components/header.php');
        ?>
<div class="top-image">
    <img src="../images/m3.jpg" alt="">
    <div class="overlay-text">
        <p class="img-text">Mustang</p>
    </div>
</div>
<div class="container">
<div class="dest-body">
    <div class="dest-info">
        <p>Mustang is one of the districts of Nepal, and the entire district is within the Annapurna Conservation Area, which happens to be the largest protected area of Nepal. Jomsom is the headquarter of Mustang, and it is spread in the area of 3,573 km square. <br> Mustang is bordered by Tibetan plateau, and the tallest mountains like Annapurna and Dhaulagiri, including several other peaks above 7,000 meters are also situated here. The elevation of Mustang rises from 1,372 to 8,167 meters.</p>
        <div class="gallery-wrap">
            <img src="../images/back.png" style="object-position: 0px -330px;" id="backBtn">
            <div class="gallery">
                <div>
                    <span><img src="../images/m1.jpg" alt=""></span>
                    <span><img src="../images/m2.jpg" alt=""></span>
                    <span><img src="../images/m3.jpg" alt=""></span>
                </div>
                <div>
                    <span><img src="../images/m4.jpg" alt=""></span>
                    <span><img src="../images/m4.jpg" alt=""></span>
                    <span><img src="../images/m4.jpg" alt=""></span>
                </div>
            </div>
            <img src="../images/next.png" id="nextBtn">
        </div>  
    </div>   
</div>
<div class="dest-bot">
    <div class="pack-inc">
        <h2>Details:</h2>
        <p>5 days and 4 nights</p>
        <p>Package Includes : </p>
        <ul>
            <li>Breakfast and Dinner</li>
            <li>Accomodation</li>
            <li>Travel guide</li>
            <li>All transportation in destination location</li>
        </ul>
        <p>Price: Rs.8000 per person(All tax included)</p>
    </div>
    <div class="book-form">
    <h2>Travel Booking Form</h2>
            <form action="book.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
 
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
           
                <label for="destination">Destination:</label>
                <input type="text" name="destination" id="destination" required>
           
                <label for="departure-date">Departure Date:</label>
                <input type="date" name="departure-date" id="departure-date" required>
               
                <label for="return-date">Return Date:</label>
                <input type="date" name="return-date" id="return-date" required>

                <button type="submit">Book Now</button>
            </form>
    </div>
</div>
</div>


        <?php
            include('../page-components/footer.php');
        ?>
<script>
        let scrollContainer = document.querySelector(".gallery");
        let backBtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
            scrollContainer.style.scrolgehavior = "auto";
        });

        nextBtn.addEventListener("click",()=>{
            scrollContainer.style.scrolgehavior = "smooth";
            scrollContainer.scrollLeft += 900;
        });
        backBtn.addEventListener("click",()=>{
            scrollContainer.style.scrolgehavior = "smooth";
            scrollContainer.scrollLeft -= 900;
        })
</script>

    
</body>
</html>