<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
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

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <!-- home section start -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(./bg/image1.jpg) no-repeat">
                    <!-- <img src="../image1.jpg" alt=""> -->
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(../image2.jpg) no-repeat">
                    <!-- <img src="../image1.jpg" alt=""> -->
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(../image3.jpg) no-repeat">
                    <!-- <img src="../image1.jpg" alt=""> -->
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>


    </section>

    <!-- home section ends -->

    <!-- servic section starts -->

    <section class="services">

        <h1 class="heading-title">our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="./package_image/png1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="./package_image/pngwing.com(5).png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="./package_image/pngwing.com(6).png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="./package_image/pngwing.com(4).png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="./package_image/pngwing.com(7).png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="./package_image/pngwing.com(3).png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <!-- servic section end -->

    <!-- home about section starts -->

    <section class="home-about">
        <div class="image">
            <img src="./bg/image7.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt sed reprehenderit iste aut aspernatur
                eos animi, suscipit nihil similique, nulla accusamus dolore consequuntur voluptate eius est aperiam
                illum maiores saepe!1

            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <!-- home about section ends -->
    <!-- home package section start-->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>

        <div class="box-contaniner">

            <div class="box">
                <div class="image">
                    <img src="./bg/image8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint similique ipsa necessitatibus
                        laborum aut.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="./bg/image9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint similique ipsa necessitatibus
                        laborum aut.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./bg/image10.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint similique ipsa necessitatibus
                        laborum aut.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>
        <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
    </section>
    <!-- home package secton ends -->

    <!-- home offer secton starts -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, odit saepe! Eius, eaque! Labore velit,
                aspernatur laudantium eius impedit ratione.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends -->

    <!-- footer  section start -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of user</a>
            </div>

            <div class="box">
                <h3>contant info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i> paingzayhtet@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Myanmar,yangon-400410</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fas fa-facebook"></i>facebook</a>
                <a href="#"><i class="fas fa-twitter"></i> twitter</a>
                <a href="#"><i class="fas fa-instagram"></i> instagram</a>
                <a href="#"><i class="fas fa-linkedin"></i>linkedin</a>
            </div>
        </div>

        <div class="credit">creaded by <span>mr.web designer</span> | all rights reserved!</div>

    </section>

    <!-- footer section end -->







    <!-- custom swiper file link -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".home-slider", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>