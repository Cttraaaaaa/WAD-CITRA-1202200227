<?php

@include 'connector.php';

session_start();

if(!isset($_SESSION['user_name'])){
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
        <a href="user_page.php">home</a>
        <a href="user_page.php">about</a>
        <a href="user_page.php">products</a>
        <a href="user_page.php">services</a>
        <a href="user_page.php">location</a>
        <a href="user_page.php">contact</a>
    </nav>

    <div class="icons">
        <a href="Pro_user.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- user -->

<div class="container">
    <div class="content">
    <h3>hi, <span>user</span></h3>
    <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
    <br>
    <a href="user_page.php" class="btn">Home</a>
    <a href="logout.php" class="btn">logout</a>
    </div>
</div>

<!-- user -->  
</body>
</html>