<?php 

session_start();


if (!isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="asset/css/magnific-popup.css" />
    <link rel="stylesheet" href="asset/css/style.css">

    <title>Welcome</title>
</head>
<body>
</div>
           <!-- header start -->
       <header>
        <div class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#">
                                    <img src="asset/images/logo.png" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav  mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link " href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">about us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#service">services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#project">gallery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#testimonial">testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">contact</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                        <a class="nav-link" href="logout.php">Logout</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="">

        </div> -->
    </header>
    <!-- header end -->

    <!-- banner start -->
    <div class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6 col-sm-6">
                    <div class="banner-content">
                        <h1>MAKING
                            MEMORABLE
                            <span>EVENT
                                POSSIBLE</span>
                        </h1>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                    <ul id="typed-strings" style="margin-top: 20%;">
                        <h1 class="typed" style="color:springgreen;font-size: 50px; font-style: italic;"></h1>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- about start -->
    <div class="about-area pt-5 pb-5 " id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>WHO
                            WE ARE</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <p>
                        Desi Events story began in 2010 from a dream to create each event uniquely. We started the
                        journey to change the conventional approaches in Malaysia. Our strong roots in culture managed
                        to gain love from our clients spanning from Malaysia and all around the world. Through hard
                        work, dedication towards details we are proud to say Desi Events is one of the leading event
                        planners in the country.

                    </p>
                    <p>Extraordinary events are a blend of artistry, thoughtful planning, gracious hospitality and
                        attention to detail. Together with strong roots in culture, we produce exceptional beauty with a
                        personal touch on events that capture the heart of our clients. Our team are dedicated to
                        listening about you, your vision and go the extra mile. We frequently hear guests complimenting
                        our work saying its the best they've ever attended, and we believe this is why</p>
                    <p>Each event is a different experience that feels effortless and memorable. We produce celebrations
                        of all kinds, from private events to corporate events. Whether by the beachside, garden-themed,
                        a destination wedding, it would be our pleasure in guiding through your life's important
                        celebrations.</p>
                </div>
                <div class="col-sm-4">
                    <div class="about-photo">
                        <img src="asset/images/6.jpg" class="w-100 border" style="border-radius: 10px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->


    <!-- service start -->
    <div class="service-area pt-5 pb-5" id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>CORPORATE EVENT PLANNING</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>WEDDING EVENT PLANNING</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>DECORATIONS</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>DESIGNING</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>AUDIO VISUAL RENTAL</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>TALENT MANAGEMENT</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>VIDEOGRAPHY & PHOTOGRAPHY</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-service">
                        <h6>F&B ARRANGEMENTS</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- project start -->
    <div class="project-area pt-5 pb-5" id="project">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our project</h2>
                    </div>
                </div>
            </div>
            <div class="row gallery">
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/1.jpg"><img src="asset/images/1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/2.jpg"><img src="asset/images/2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/3.jpg"><img src="asset/images/3.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/4.jpg"><img src="asset/images/4.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/5.jpg"><img src="asset/images/5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/6.jpg"><img src="asset/images/6.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/13.jpg"><img src="asset/images/13.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/8.jpg"><img src="asset/images/8.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/9.jpg"><img src="asset/images/9.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/10.jpg"><img src="asset/images/10.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/11.jpg"><img src="asset/images/11.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="single-project">
                        <a href="asset/images/12.jpg"><img src="asset/images/12.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- project end -->

    <!-- client start -->
    <div class="client-area pt-5 pb-5" id="client">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-active owl-carousel">
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                    <div class="single-client">
                        <img src="asset/images/logo.png" class="w-75" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client end -->

    <!-- testimonial start -->
    <div class="testimonial-area pt-5 pb-5" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-white">
                    <div class="section-title">
                        <h2>our testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-active owl-carousel">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="single-testimonial text-center">
                            <img src="asset/images/1.jpg" alt="">
                            <h4>Vishain</h4>
                            <p>I would love to marry again with my wife just to have Judge Paal and team Desi Events to
                                be
                                our
                                choice of creating beautiful memories!!. Every single detail at our event is taken care
                                of.
                                5
                                stars just not enough!.Decoration was top notch!! It was more than we could ask
                                for..thank
                                you
                                so much Desi Events!</p>
                        </div>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <div class="single-testimonial text-center">
                            <img src="asset/images/2.jpg" alt="">
                            <h4>Vishain</h4>
                            <p>I would love to marry again with my wife just to have Judge Paal and team Desi Events to
                                be
                                our
                                choice of creating beautiful memories!!. Every single detail at our event is taken care
                                of.
                                5
                                stars just not enough!.Decoration was top notch!! It was more than we could ask
                                for..thank
                                you
                                so much Desi Events!</p>
                        </div>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <div class="single-testimonial text-center">
                            <img src="asset/images/3.jpg" alt="">
                            <h4>Vishain</h4>
                            <p>I would love to marry again with my wife just to have Judge Paal and team Desi Events to
                                be
                                our
                                choice of creating beautiful memories!!. Every single detail at our event is taken care
                                of.
                                5
                                stars just not enough!.Decoration was top notch!! It was more than we could ask
                                for..thank
                                you
                                so much Desi Events!</p>
                        </div>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <div class="single-testimonial text-center">
                            <img src="asset/images/4.jpg" alt="">
                            <h4>Vishain</h4>
                            <p>I would love to marry again with my wife just to have Judge Paal and team Desi Events to
                                be
                                our
                                choice of creating beautiful memories!!. Every single detail at our event is taken care
                                of.
                                5
                                stars just not enough!.Decoration was top notch!! It was more than we could ask
                                for..thank
                                you
                                so much Desi Events!</p>
                        </div>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <div class="single-testimonial text-center">
                            <img src="asset/images/5.jpg" alt="">
                            <h4>Vishain</h4>
                            <p>I would love to marry again with my wife just to have Judge Paal and team Desi Events to
                                be
                                our
                                choice of creating beautiful memories!!. Every single detail at our event is taken care
                                of.
                                5
                                stars just not enough!.Decoration was top notch!! It was more than we could ask
                                for..thank
                                you
                                so much Desi Events!</p>
                        </div>
                    </div>
                    <div class="col-sm-8 offset-sm-2">
                        <div class="single-testimonial text-center">
                            <img src="asset/images/6.jpg" alt="">
                            <h4>Vishain</h4>
                            <p>I would love to marry again with my wife just to have Judge Paal and team Desi Events to
                                be
                                our
                                choice of creating beautiful memories!!. Every single detail at our event is taken care
                                of.
                                5
                                stars just not enough!.Decoration was top notch!! It was more than we could ask
                                for..thank
                                you
                                so much Desi Events!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial end -->

    <!-- contact start -->
    <div class="contact-area pt-5 pb-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>get in touch</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="contect.php" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingInput"
                                    placeholder="Enter Your Name">
                                <label for="floatingInput">Enter Your Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="phone" id="floatingPassword"
                                    placeholder="Enter Your Phone">
                                <label for="floatingPassword">Enter Your Phone</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="bname" id="floatingInput"
                                    placeholder="Enter Your Name">
                                <label for="floatingInput">Bride's Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="gname" id="floatingInput"
                                    placeholder="Enter Your Name">
                                <label for="floatingInput">Grome's Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <span>Decoration</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="decoration" value="Luxury">
                                            <label class="form-check-label" for="luxury">
                                            Luxury
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="decoration" value="Budget">
                                            <label class="form-check-label" for="budget">
                                                Budget
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="decoration" value="Moderate">
                                            <label class="form-check-label" for="moderate">
                                                Moderate
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <span>Culture</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="culture" value="Malay">
                                            <label class="form-check-label" for="Malay">
                                                Malay
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="culture" value="Indian">
                                            <label class="form-check-label" for="Indian">
                                                Indian
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="culture" value="Chiniese">
                                            <label class="form-check-label" for="Chiniese">
                                                Chiniese
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <span>Event</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="event" value="Atelier">
                                            <label class="form-check-label" for="luxury">
                                                Atelier
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="event" value="Balloons">
                                            <label class="form-check-label" for="budget">
                                                Balloons
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="event" value="Backyard">
                                            <label class="form-check-label" for="moderate">
                                                Backyard
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <span>Accommodation</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="accommodation" value="Room">
                                            <label class="form-check-label" for="luxury">
                                                Room
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="accommodation" value="Villa">
                                            <label class="form-check-label" for="budget">
                                                Villa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="accommodation" value="Suits">
                                            <label class="form-check-label" for="moderate">
                                                Suits
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <span>Dinning</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dinning" value="DJ">
                                            <label class="form-check-label" for="luxury">
                                                DJ
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dinning" value="Corner">
                                            <label class="form-check-label" for="budget">
                                                Live Corner
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dinning" value="Dance">
                                            <label class="form-check-label" for="moderate">
                                                Dance
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dinning" value="Music">
                                            <label class="form-check-label" for="moderate">
                                                DJ Music
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <span>budget</span>
                                        <input type="text" placeholder="Enter Your Budget" name="budget">
                                    </div>
                                    <!-- <div class="col-12">
                                        <div class="form-check">
                                                <span>Stay accommodation</span>   
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="stay" value="Room">
                                                <label class="form-check-label" for="moderate">
                                                    Room
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="stay" value="Suits">
                                                <label class="form-check-label" for="moderate">
                                                    Suits
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="stay" value="villa">
                                                <label class="form-check-label" for="moderate">
                                                    villa
                                                </label>
                                            </div>     
                                        </div>
                                    </div> -->
                                    <div class="col-6 mb-3">
                                        <span>Additional decoration</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="additionDecoration" value="backdrop">
                                            <label class="form-check-label" for="luxury">
                                                Photobooth backdrop
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="additionDecoration" value="walkway">
                                            <label class="form-check-label" for="budget">
                                                walkway decoration
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="additionDecoration" value="Dessert">
                                            <label class="form-check-label" for="moderate">
                                                Dessert corner
                                            </label>
                                        </div>
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dinning" value="setup">
                                            <label class="form-check-label" for="moderate">
                                                Venue setup
                                            </label>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-info">
                                <ul class="contact-info">
                                    <li class="d-flex">
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                        <span>Kajang, Malaysia</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                        <span>7853948349</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><i class="fa-solid fa-envelope"></i></span>
                                        <span>info@gmail.com</span>
                                    </li>
                                </ul>
                                <div class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127502.67703176706!2d101.69526176387696!3d2.9701504238705523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdcbc5df56418f%3A0xb186679d7d069c0f!2zS2FqYW5nLCDgprjgp4fgprLgpr7gppngp43gppfgprAsIOCmruCmvuCmsuCmr-CmvOCnh-CmtuCmv-Cmr-CmvOCmvg!5e0!3m2!1sbn!2sbd!4v1650427630648!5m2!1sbn!2sbd"
                                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form> 

            <!-- <form action="contect.php" method="post">
              <div class="form-group">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline">
                      <input type="radio" name="gender" value="m" id="male"/>Male</label>
                  <label for="female" class="radio-inline">
                      <input type="radio" name="gender" value="f" id="female"/>Female</label>
                  <label for="others" class="radio-inline">
                      <input type="radio" name="gender" value="o" id="others" />Others</label>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input  type="text" class="form-control" id="email" name="email" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" class="form-control" id="number" name="number" />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form> -->
            </div>

        </div>
    </div>
    <!-- contact end -->

    <!-- copyright start -->
    <div class="copyright" style="background-color: aqua;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <span>&copy;2022 Wedding Events. All Rights Reserved</span>
                </div>
                <div class="col-6">
                    <div class="copy-social text-end">
                        <a href="#" title="facebook" style="color: #1877F2;"><i class="fa fa-facebook-f"></i></a>
                        <a href="#" title="twitter" style="color: #1DA1F2;"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="instagram" style="color: #E4405F;"><i class="fa fa-instagram"></i></a>
                        <a href="#" title="linkedin" style="color: #0A66C2;"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright end -->

    <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="asset/js/jquery.magnific-popup.js"></script>
    <script src="asset/js/e79ed42de9.js" crossorigin="anonymous"></script>
    <script>
        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll < 100) {
                $(".header-sticky").removeClass("sticky");
            } else {
                $(".header-sticky").addClass("sticky");
            }
        });
    </script>
    <script type="text/javaScript">

        var typed  =new Typed('.typed',{
            strings:['WEDDING PLANNER','DECORATOR','DESIGNER'],
            typeSpeed:20,
            backSpeed:15,
            startDelay:1000,
            backDelay:1000,
            loop:true
        }) ;



        $('.gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                enabled:true
                }
            });
        });
                    
        
        $('.client-active').owlCarousel({
            loop: true,
            margin: 10,
            autoPlay: true,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
        $('.testimonial-active').owlCarousel({
            loop: true,
            margin: 10,
            items:1,
            autoPlay: true,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        
    </script>

</body>
</html>