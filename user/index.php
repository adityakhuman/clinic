<?php 
   include("connn.php");
   $stt = 1;
   if(isset($_POST['submit']) && isset($_FILES['image'])){
        $name = $_POST['name'];
        $Profession = $_POST['Profession'];
        $disp = $_POST['disp'];

        $name_file = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        if(move_uploaded_file($tmp_name,"img/".$name_file)){
            $ins = "insert into feedback(image,Profession,disp,name) value('$name_file','$Profession','$disp','$name')";
            $res = mysqli_query($conn,$ins);
            if($res){
                header("location:index.php");
            }
        }
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Klinik - Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php include('navbar.php');?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Good Health Is The Root Of All Heppiness</h1>
                <div class="row g-4">
                    <?php 
                    include("connn.php");
                        $s = "SELECT COUNT(*) AS count FROM doctor";
                        $r= mysqli_query($conn,$s);
                        while($row = mysqli_fetch_assoc($r)){
                            $c = $row['count'];
                        }
                        $y = "SELECT COUNT(*) AS count FROM appointment";
                        $t= mysqli_query($conn,$y);
                        while($row = mysqli_fetch_assoc($t)){
                            $r = $row['count'];
                        }
                    ?>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php 
                                echo $c;
                            ?></h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up"><?php 
                                echo $r;
                            ?></h2>
                            <p class="text-light mb-0">Total Appointment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Cardiology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Neurology</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">Pulmonary</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                    <p>Simply enter your symptoms and we will get back to you with details shortly</p>
                    <p class="mb-4">We aspire to become the ultimate destination for medical and health care services in Syria, by focusing on a comprehensive approach to deliver them. In order to carry out this vision, we:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->

    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Why Choose Us</h1>
                        <p class="text-white mb-4 pb-2">We aspire to become the ultimate destination for medical and health care services in Syria, by focusing on a comprehensive approach to deliver them. In order to carry out this vision, we:</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Experience</p>
                                        <h5 class="text-white mb-0">Doctors</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Quality</p>
                                        <h5 class="text-white mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Positive</p>
                                        <h5 class="text-white mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <?php include("Doctor.php") ?>
    <!-- Team End -->


    <!-- Appointment Start -->
   <?php include("apoi.php") ?>
    <!-- Appointment End -->
    <div class="container-xxl py-5">
        <h1 class="text-center mb-2 wow fadeInUp" data-wow-delay="0.5s">Send Feedback</h1>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5 justify-content-center">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row  g-3">
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control border-0" name="Profession" placeholder="Your Profession" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" name="disp" placeholder="Describe your Feedback"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="file" name="image" placeholder="Upload Your Photo">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name ="submit"type="submit">Send Feedback</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Testimonial</p>
                <h1>What Say Our Patients!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php
                    $select = "select * from feedback";
                    $result = mysqli_query($conn,$select);
                    if($result){
                            while($row = mysqli_fetch_assoc($result)){
                                    $name  = $row['name'];
                                    $Profession	= $row['Profession'];
                                    $disp  = $row['disp'];
                                    $image  = $row['image'];
                                    ?>
                                    <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/<?php echo $image ?>" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p><?php echo $disp ?></p>
                        <h5 class="mb-1"><?php echo $name ?></h5>
                        <span class="fst-italic"><?php echo $Profession ?></span>
                    </div>
                </div>

                            <?php }
                    }
                ?>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include("footer.php") ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>