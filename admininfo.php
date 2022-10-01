<?php

require "assets/vendor/phpemailform/conn.php";
SessionActive();
$conn = GetConnection();

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users where id = ?";

$hasil = $conn->prepare($sql);
$hasil->execute([$user_id]);
$row = $hasil->fetch();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>NGOMBE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Favicons -->
    <link href="assets/img/1.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Additional styling -->
    <style>
        .sendMsg {
            background: #4B898F;
            border: 0;
            padding: 10px 35px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
        }

        .sendMsg:hover {
            background: #175150;
        }

        .contact .info i {
            font-size: 20px;
            float: left;
            width: 44px;
            height: 44px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
            background: #175150;
            color: #fff;
        }
    </style>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" style="background-color: #175150" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a class="navbar-brand" href="index.php">
                <img src="assets/img/LOGO.png" alt="" width="190" height="54">
            </a>

            <nav id="navbar" class="navbar order-last order-lg-0 ms-auto">
                <ul>
                  <li><a href="adminpage.php">Home</a></li>
                  <li><a class="active" href="admininfo.php">Info</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" style="background-color: #4B898F;">
            <div class="container" style="padding-top:50px; padding-bottom:50px">
                <h2><b>Admin Profile</b></h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <div class="card" style="margin: 2em 35rem;">
            <form class="form">
                <div class="form-group">
                    <label for="email">Full Name:</label>
                    <br>
                    <div class="relative">
                        <h3 style="font-size:medium;" disabled="disabled" class="form-control" id="name" type="text"> <?php echo $row['username'] ?>
                            <i class="fa fa-user"></i>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <br>
                    <div class="relative">
                        <h3 style="font-size:medium;" class="form-control" type="email" required=""> <?php echo $row['email'] ?>
                            <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">Contact Number:</label>
                    <br>
                    <div class="relative">
                        <h3 style="font-size:medium;" class="form-control" type="text"><?php echo $row['no_telp'] ?>
                            <i class="fa fa-phone"></i>
                    </div>
                </div>

                <br>
                <br>
                <div class="text-center">
                    <!--
                    <button class="movebtn movebtnblack" type="Submit"><a href="formedituser.php" style="text-decoration: none; color: black;"> Edit Info <i class="fa fa-edit"></a></i></button> -->

                </div>

            </form>
            <br>

            <br>
            <div class="tright">
                <a href="assets/vendor/phpemailform/logout.php"><button class="btn btn-lg btn-primary" type="Submit" style="background-color: #4B898F;"> Log Out <i class="fa fa-power-off" aria-hidden="true"></i></button></a>
            </div>
        </div>

          <div class="container" data-aos="fade-up">
        </section><!-- End Contact Section -->
        <!-- ======= Contact Section ======= -->
        <!-- <section id="contact" class="contact">
            <div data-aos="fade-up">
                <iframe style="border:0; margin-top:-1rem; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.052998073008!2d106.61636781402811!3d-6.256748995471196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc7ade82481b%3A0xefffacbc6a27d65d!2sSkystar%20Ventures%20Coworking%20Space!5e0!3m2!1sen!2sid!4v1619243815029!5m2!1sen!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Universitas Multimedia Nusantara, New Media Tower Lv.11 & 12, Jl. Boulevard Raya
                                    Gading Serpong, Curug Sangereng, Kec. Klp. Dua, Tangerang, Banten 15811</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>ngombe@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>021 - 938398</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="https://formsubmit.co/4112cb1332bbc2bdd175281683c18f77" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="name" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <input type="hidden" name="_next" value="contact.php">
                                <input type="hidden" name="_template" value="table">
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <br>
                            <div class="text-center" style="color: #175150;"><button type="submit"
                                    class="button sendMsg" data-bs-toggle="modal" data-bs-target="#myModal">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><! End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3><strong><span>NGOMBE</span></strong></h3>
                        <p>
                            Universitas Multimedia Nusantara,<br>
                            New Media Tower Lv.11 & 12,<br>
                            Gading Serpong, Tangerang,<br>
                            Banten 15811<br><br>
                            <strong>Phone:</strong> 021 - 938398<br>
                            <strong>Email:</strong> ngombe@gmail.com<br>
                        </p>
                        <br>


                        <div class="copyright">
                            &copy; Copyright <strong><span>Ngombe</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            Designed by Ngombe Web Development Team</a>
                        </div>

                    </div>

                    <div class="segitiga col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right" style="color: #4B898F;"></i> <a href="index.php">Home</a>
                            </li>
                            <li><i class="bx bx-chevron-right" style="color: #4B898F;"></i> <a
                                    href="features.html">Features</a></li>
                            <li><i class="bx bx-chevron-right" style="color: #4B898F;"></i> <a
                                    href="product.html">Products</a></li>
                            <li><i class="bx bx-chevron-right" style="color: #4B898F;"></i> <a
                                    href="about.html">About</a></li>
                            <li><i class="bx bx-chevron-right" style="color: #4B898F;"></i> <a
                                    href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="social-links col-lg-2 col-md-6 text-center text-md-right pt-3 pt-md-0">
                        <h4>Follow Us</h4>
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js">
        function submitForm() {
            var frm = document.getElementsByName('')[0];
            frm.submit();
            frm.reset();
            return false;
        }
    </script>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>Message Sent</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button sendMsg" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
