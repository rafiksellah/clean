<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECO NET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cleaning Company Website Template" name="keywords">
    <meta content="Cleaning Company Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Header Start -->
        <?php include('header.php') ?>
        <!-- Header End -->

        <!-- Contact Start -->
        <section id="contact" class="contact">
            <div class="container " data-aos="fade-up ">

                <div class="row mt-4" data-aos="fade-up " data-aos-delay="100 ">
                    <div class="col-lg-6 ">
                        <div class="info-box mb-4 ">
                            <i class="fas fa-map-marker-alt fa-2x "></i>
                            <h3>Our Address</h3>
                            <p>2 Rue de la Station, 93700 Drancy, France</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="info-box mb-4 ">
                            <i class="fas fa-envelope fa-2x"></i>
                            <h3>Email Us</h3>
                                <p>Eco.net.190@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="info-box mb-4 ">
                            <i class="fas fa-phone-square-alt fa-2x"></i>
                            <h3>Call Us</h3>
                            <p>09 87 38 48 85 </p>
                            <p>+33 7 66 62 60 89 </p>
                        </div>
                    </div>

                </div>

                <div class="row " data-aos="fade-up " data-aos-delay="100 ">
                    <div class="col-md-6">
                        <iframe style="width:100%; height: 500px;" id="gmap_canvas" src="https://maps.google.com/maps?q=2%20rue%20de%20la%20station%2093700%20Drancy&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" required="required" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Message" required="required"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Footer Start -->
            <?php include('footer.php') ?>

        <!-- Footer End -->
</body>

</html>