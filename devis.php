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
                <div class="row " data-aos="fade-up " data-aos-delay="100 ">
                    <div class="col-md-6">
                        <div class="card">
                        <h5 style="font-weight: 700;" class="card-header">Demandez un devis</h5>
                        <div class="card-body">
                            <form id="myForm" method="post" action="mailer/form.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- end message -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required="required" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenom" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="projet" name="projet" class="form-control" placeholder="Votre Projet" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Message" required="required"></textarea>
                                </div>
                                <div>
                                <input type="submit" id="submit" name="submit" class="btn btn-success" value="Envoyer"></div>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/paquet.jpeg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/vitre3.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/vitre2.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <script type="text/javascript">
            $(document).ready(function() {
            $("#myForm").on('submit', function(event) {
                event.preventDefault(); 
                alert('oll');return false;
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'sendmail.php',
                    dataType: "json",
                    data: formData,
                    success: function(response) { 
                        alert(response.success); 
                    },
                    error: function(xhr, status, error){
                        console.log(xhr); 
                    }
                });
            });
        });
        </script>
        <!-- Footer Start -->
        <?php include('footer.php') ?>

        <!-- Footer End -->
        

</body>

</html>