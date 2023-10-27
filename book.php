<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book now</title>

    <!---------swiper css link-------------->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!--------font awesome cdn link--------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!---------custom css file link--------->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- header section starts -->

    <section class="header">

        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-bun"><i class="fa fa-bars" aria-hidden="true"></i></div>

    </section>

    <!-- header section ends -->

    <div class="heading" style="background: url(image/road-5.jpg) no-repeat;">
        <h1>book</h1>
    </div>

    <!-- book section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>
        
        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your phone" name="phone">
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- book section ends -->

    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fa fa-angle-right" aria-hidden="true"></i>home</a>
                <a href="about.php"><i class="fa fa-angle-right" aria-hidden="true"></i>about</a>
                <a href="package.php"><i class="fa fa-angle-right" aria-hidden="true"></i>package</a>
                <a href="book.php"><i class="fa fa-angle-right" aria-hidden="true"></i>book</a>

            </div>

            <div class="box">

                <h3>extra links</h3>
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>ask question</a>
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>about us</a>
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>privacy policy</a>
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>terms of use</a>
            </div>

            <div class="box">

                <h3>contact info</h3>
                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+123-456-7890</a>
                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+111-425-7290</a>
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>loikuymwm@gmail.com</a>
                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Berlin, Germany - 440012</a>

            </div>

            <div class="box">

                <h3>follow us</h3>
                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i>facebook</a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i>instagram</a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i>twitter</a>
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i>linkedin</a>
                
            </div>

        </div>

        <div class="credit">created by <span>mr.web designer</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->




    <!---------swiper js link---------------->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-------custom js file link------------->
    
    <script src="js/script.js"></script>
</body>
</html>