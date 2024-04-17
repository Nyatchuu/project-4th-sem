<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../media.css">
    <link rel="stylesheet" href="../newstyle.css">
    <title>travel agency</title>
</head>
<body>
        <?php
            include('../page-components/header.php');
        ?>
         <div class="contact">
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
                <div class="contact-left-title">
                    <h2>Get in touch</h2>
                    <hr>
                </div>
                <input type="hidden" name="access_key" value="3540d0ea-5f0c-4c55-943c-0b970b0317c9">
                <input type="text" name="name" placeholder ="Enter your name" class="contact-inputs" required>
                <input type="email" name="email" placeholder ="Enter your Email" class="contact-inputs" required>
                <textarea name="message" placeholder="Enter your message" class="contact-inputs" required></textarea>
                <button type="sumbit">Submit <img src="../images/arrow_icon.png" alt=""></button>
            </form>
            <div class="contact-right">
                <img src="../images/right_img.png" alt="">
            </div>
        </div>
        <?php
            include('../page-components/footer.php');
        ?>
        <script src="app.js"></script>

    
</body>
</html>