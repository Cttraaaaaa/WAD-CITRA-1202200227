<?php

@include 'connector.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinkygames</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Pinky<span>Games</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#service">services</a>
        <a href="#locate">location</a>
        <a href="#contact">contact</a>
        <a href="List-admin.php">List Transaksi</a>
    </nav>

    <div class="icons">
        <a href="Pro_admin.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Welcome to PinkyGames !</h3>
        <span>  </span>
        <p>butuh akun? ingin top up? butuh membership? PinkyGames solusinya!</p>
        <a href="#products" class="btn">shop now</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/Valorant.mp4" loop autoplay muted></video>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Merupakan Sebuah Website untuk para Gamers. Website ini menyediakan Top up, Jual beli akun dan Membeship untuk berbagai game seperti Mobile Legend, PUBG Mobile dan Valorant.</p>
            <p>dan kami juga menyediakan beberapa Service tambahan seperti Akun ter Banned, dan Akun ter Hack.</p>
            <a href="#service" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container" id="service">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free tax</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/m1.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp. 120.000 <span>Rp. 135.000</span> </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/m2.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>
            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp. 80.000 <span>Rp. 100.000</span> </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/l3.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Mobile Legend</h3>
                <div class="price"> Rp. 1.200.000 <span>Rp. 1.500.000</span> </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/m2.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>
            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp. 50.000 <span>Rp. 100.000</span> </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/m1.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp. 100.000 <span>Rp. 135.000</span> </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/m6.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>
            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp. 90.000 <span>Rp. 100.000</span> </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="images/m1.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>

            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp. 800.000 <span>Rp. 870.000</span> </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/m3.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>
            <div class="content">
                <h3>Valorant</h3>
                <div class="price"> Rp.250.000 <span>Rp. 280.000</span> </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/l1.jpg" alt="">
                <div class="icons">
                    <a href="Buy.php" class="cart-btn">Buy Now</a>
                </div>
            </div>
            <div class="content">
                <h3>Mobile Legend</h3>
                <div class="price"> Rp.500.000 <span>Rp. 650.000</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- prodcuts section ends -->

<!-- location starts  -->

<section class="locate" id="locate">

<h1 class="heading"> Our <span>Location</span> </h1>

<div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.8540733742851!2d107.82379134173532!3d-6.9553583361901286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c50f5a999681%3A0x57b11ae3f5d7b879!2zNsKwNTcnMTkuNCJTIDEwN8KwNDknMjQuNSJF!5e0!3m2!1sen!2sid!4v1665921578165!5m2!1sen!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>      

</section>

<!-- ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/contact.jpg" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#service">services</a>
            <a href="#locate">location</a>
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+6287708899262</a>
            <a href="#">citra@gmail.com</a>
            <a href="#">sumedang, indonesia - 45364</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Citra Alivia </span> | all rights reserved </div>

</section>

<!-- footer section ends -->   
</body>
</html>