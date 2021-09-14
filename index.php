<style>
    body {
        background-color: #F8EEE7 !important;
        overflow-x: hidden !important;
    }

    .sub-header {
        color: #49274A;
        font-size: 34px;
        font-family: 'OpenSans-regular';
        line Spacing: 44;
        character Spacing: 0;
    }

    .sub {
        letter-spacing: var(--unnamed-character-spacing-0);
        text-align: left;
        letter-spacing: 0px;
        color: #49274A;
        opacity: 1;
        font-size: 16px;
    }

    .la {
        font-size: 14px;
        color: #49274A
    }

    button {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .mySlides_text2 h4 {
        color: #94618E;
        position: absolute;
        font-weight: bold;
        top: 150px;
        left: 110px;
    }

    .mySlides_text2 h1 {
        color: #49274A;
        position: absolute;
        font-weight: bold;
        left: 110px;
        top: 175px;
    }

    .mySlides_text2 p {
        color: #94618E;
        position: absolute;
        top: 246px;
        left: 110;
    }

    .mySlides_text2 button {
        position: absolute;
        top: 300px;
        left: 110;
        cursor: pointer;
        background-color: #49274A;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-size: 16px;
        border-radius: 50px;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: bold;
    }

    .mySlides_text3 h4 {
        color: #94618E;
        position: absolute;
        font-weight: bold;
        top: 150px;
        left: 110px;
    }

    .mySlides_text3 h1 {
        color: #49274A;
        position: absolute;
        font-weight: bold;
        left: 110px;
        top: 175px;
    }

    .mySlides_text3 p {
        color: #94618E;
        position: absolute;
        top: 246px;
        left: 110;
    }

    .mySlides_text3 button {
        position: absolute;
        top: 300px;
        left: 110;
        cursor: pointer;
        background-color: #49274A;
        border: none;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-size: 16px;
        border-radius: 50px;
        padding-left: 20px;
        padding-right: 20px;
        font-weight: bold;
    }

    @media (max-width: 998px) {
        html {
            font-size: 55%;
        }

        .mySlides_text2 p {
            display: none;
        }

        .mySlides_text2 button {
            display: none;
        }

        .mySlides_text2 h1 {
            display: none;
        }

        .mySlides_text2 h4 {
            display: none;
        }
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php include 'includes/links.php'?>
    <link href="css/slider.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/nav.php'?>
    <?php include 'includes/preloader.php' ?>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/b1.png" style="width:100%">

            <div class="mySlides_text1" style="">
                <img src="img/b1_2.png" class="mySlidesInner"> &nbsp;&nbsp;&nbsp;&nbsp;
                <p style="color:#49274A;"> Every soul deserves a place in this universe.<br>
                    Beautiful Souls provides a place to tell our loved ones,</p>
                <h2 style="color:#49274A;">‘ You have a place in my heart ’</h2>
                <button class="button">See More</button>
            </div>
        </div>
        <div class="mySlides fade">
            <img src="img/b2.jpg" style="width:100%">
            <div class="mySlides_text2">
                <h4 style="">Welcome to Beautiful Souls </h4>
                <h1 style="">Create your own tribute </h1>
                <p style="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    <br> suscipit? Voluptas voluptatibus minima cum ad eos
                    .</p>
                <button class="button_2" style="">Create a tribute</button>
            </div>
        </div>
        <div class="mySlides fade">
            <img src="img/b3.png" style="width:100%">
            <div class="mySlides_text3">
                <h4 style="">Welcome to Beautiful Souls </h4>
                <h1 style="">Create your own tribute </h1>
                <p style="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    <br> suscipit? Voluptas voluptatibus minima cum ad eos
                    .</p>
                <button class="button_2" style="">Create a tribute</button>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <!-- Slider End -->

    <div class="container" style="background-color:#F8EEE7;">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:#49274A;">Remembering....</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12" style="text-align:center;">
                <div class="thumbnail" style="background-color:#F8EEE7;border: none;">
                    <a href="#" target="_blank">
                        <img src="img/5.jpg" style="border-radius:50%" height="214px" width=214px;>
                    </a>
                </div>
                <div class="caption">
                    <p class="para">周梓樂<br>1997-2019</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-12" style="text-align:center;">
                <div class="thumbnail" style="background-color:#F8EEE7;border: none;">
                    <a href="#" target="_blank">
                        <img src="img/3.jpg" style="border-radius:50%" height="214px" width=214px;>
                    </a>
                </div>
                <div class="caption">
                    <p>EMMA RED<br>1997-2019</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-12" style="text-align:center;">
                <div class="thumbnail" style="background-color:#F8EEE7;border: none;">
                    <a href="#" target="_blank">
                        <img src="img/4.jpg" style="border-radius:50%" height="214px" width=214px;>
                    </a>
                </div>
                <div class="caption">
                    <p>EDWARD WATERS<br>1997-2019</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-12" style="text-align:center;">
                <div class="thumbnail" style="background-color:#F8EEE7;border: none;">
                    <a href="#" target="_blank">
                        <img src="img/2.jpg" style="border-radius:50%" height="214px" width=214px;>
                    </a>
                </div>
                <div class="caption">
                    <p>KENNETH MARS<br>1997-2019</p>
                </div>
            </div>
        </div>
    </div>

    <br>



    <div class="row nopadding">
        <div class="col-md-6 col-sm-12 nopadding" style="padding-right:0px !important; padding-left:0px !important;">
            <img src="img/o1.jpg" class="img-fluid" alt="" height="400px" width="100%">
        </div>
        <div class="col-md-6 col-sm-12 nopadding"
            style="background-color:#94618E; height:400px; padding-right:0px !important; padding-left:0px !important;">
            <div class="box" style="padding:20px; color:white; height:auto">
                <h1>Our Missions</h1><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris laoreet metus ac tellus vehicula
                    aliquet. Ut at
                    dolor nec sapien condimentum efficitur. Praesent placerat, enim eu viverra pretium, diam sapien
                    dapibus lectus,
                    sed varius nisi nisi aliquet dui. Ut imperdiet risus quis magna pulvinar ultrices.Lorem ipsum dolor
                    sit amet,
                    consectetur adipiscing elit. Mauris laoreet metus ac tellus vehicula aliquet. Ut at dolor nec sapien
                    nisi aliquet
                    dui. r ultrices.piscing elit diam sapien dapibus lectus, sed varius nisi nisi aliquet dui. Ut
                    imperdiet
                    risus quis
                </p>

                <button class="button" style="margin-top:10px">Read More</button>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:#94618e;">Features</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="" style="background-color:#F8EEE7;border: none; padding:5px">

                    <img src="img/f1.png" style="">
                    <div class="caption" style="">
                        <h3 style="">Photos</h3>
                        <p style="">Integer et ullamcorper risus, sit amet congue metus.
                            Suspendisse ut
                            elit a orci scelerisque dignissim. Pellentesque sed pharetra eros, non ullamcorper</p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="" style="background-color:#F8EEE7;border: none; padding:5px">

                    <img src="img/f2.png" style="">
                    <div class="caption" style="">
                        <h3 style="">Beautiful Layout</h3>
                        <p style="">Integer et ullamcorper risus, sit amet congue metus.
                            Suspendisse ut
                            elit a orci scelerisque dignissim. Pellentesque sed pharetra eros, non ullamcorper </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="" style="background-color:#F8EEE7;border: none; padding:5px">

                    <img src="img/f3.png" style="">
                    <div class="caption" style="">
                        <h3 style="">Full Control</h3>
                        <p style="">Integer et ullamcorper risus, sit amet congue metus.
                            Suspendisse ut
                            elit a orci scelerisque dignissim. Pellentesque sed pharetra eros, non ullamcorper</p>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="" style="background-color:#F8EEE7;border: none; padding:5px">

                    <img src="img/f4.png" style="">
                    <div class="caption" style="">
                        <h3 style="">Share</h3>
                        <p style="">Integer et ullamcorper risus, sit amet congue metus.
                            Suspendisse ut
                            elit a orci scelerisque dignissim. Pellentesque sed pharetra eros, non ullamcorper</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="clear:both"></div>

    
    <div class="container" style="background-color: #94618e; ">
        <div class="row">
            <div class="col-md-12">
                <h3 style="color:white;">Life Stories</h3>
            </div>
        </div>

        <div class="row" style="text-align:center;">
            <div class="col-md-1"></div>
            <div class="col-md-3 ">
                <div class="card" style="width: 100%; margin-bottom:40px">
                    <img src="img/l1.png" class="card-img-top" alt="..." height="200px" width="293px">
                    <div class="card-body" style="background:#49274A;color:white; padding:15px">
                        <p>Donec quis mauris ultrices by Kathy Chan | 20 May, 2020</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 80%; margin-left:10%;  margin-bottom:40px">
                    <img src="img/l2.png" class="card-img-top" alt="..." height="200px" width="293px">
                    <div class="card-body" style="background:#49274A;color:white; padding:15px">
                        <p>Donec quis mauris ultrices by Kathy Chan | 20 May, 2020</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 100%;  margin-bottom:40px">
                    <img src="img/l3.png" class="card-img-top" alt="..." height="200px" width="293px">
                    <div class="card-body" style="background:#49274A;color:white; padding:15px">
                        <p>Donec quis mauris ultrices by Kathy Chan | 20 May, 2020</p>
                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>

        </div>
    </div>

    <br>
    <div class="clear:both"></div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3 style="color:#94618e;">Life Experience Hall</h3>
            </div>
        </div>
    </div>





    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <h3>Hall 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eum ipsam ut neque dolor
                    asperiores in
                    cumque. Delectus quidem nihil odit alias expedita perspiciatis dolores ab beatae. Facere, quos
                    doloribus.</p>

            </div>
            <div class="col-md-3">
                <h3>Hall 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eum ipsam ut neque dolor
                    asperiores in
                    cumque. Delectus quidem nihil odit alias expedita perspiciatis dolores ab beatae. Facere, quos
                    doloribus.</p>
            </div>
            <div class="col-md-3">
                <h3>Hall 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eum ipsam ut neque dolor
                    asperiores in
                    cumque. Delectus quidem nihil odit alias expedita perspiciatis dolores ab beatae. Facere, quos
                    doloribus.</p>
            </div>
            <div class="col-md-3">
                <h3>Hall 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eum ipsam ut neque dolor
                    asperiores in
                    cumque. Delectus quidem nihil odit alias expedita perspiciatis dolores ab beatae. Facere, quos
                    doloribus.</p>
            </div>
        </div>
    </div>



    <br>

    <?php include 'includes/footer.php'?>

    <?php include 'includes/scripts.php'?>

</body>

</html>