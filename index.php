<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RED PROUD | Home Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header starts -->
    <?php include('includes/header.php');?>
    <!-- Header Ends -->
  

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">ONE BLOOD DONATION</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Save three Lives every day</h1>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/About1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Blood bank services that</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">you can trust</h1>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Banner Start --> 
    <div class="container-fluid banner mb-5"> 
        <div class="container"> 
            <div class="row gx-0"> 
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s"> 
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;"> 
                        <h3 class="text-white mb-3">Popular Blood Banks</h3> 
                        <div class="d-flex justify-content-between text-white mb-3"> 
                            <h6 class="text-white mb-0">N.R.S. Medical College & Hospital, Sealdah</h6></a>
                            <!-- <p class="mb-0"> 8:00am - 9:00pm</p>  -->
                        </div> 
                        <div class="d-flex justify-content-between text-white mb-3"> 
                            <h6 class="text-white mb-0">ESI Hospital, Maniktala</h6> 
                            <!-- <p class="mb-0"> 9932116714</p>  -->
                        </div> 
                        <div class="d-flex justify-content-between text-white mb-3"> 
                            <h6 class="text-white mb-0">R.G. Kar Medical College & Hospital, Belgachia</h6> 
                            <!-- <p class="mb-0"> 6291661411</p>  -->
                        </div> 
                        <div class="d-flex justify-content-between text-white mb-3"> 
                            <h6 class="text-white mb-0">SSKM Hospital, Bhowanipore</h6> 
                            <!-- <p class="mb-0"> 6291661411</p>  -->
                        </div> 
                        <div class="d-flex justify-content-between text-white mb-3"> 
                            <!-- <h6 class="text-white mb-0">Calcutta Medical College & Hospital</h6>  -->
                            <!-- <p class="mb-0"> 6291661411</p>  -->
                        </div> 
                    </div> 
                </div> 
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s"> 
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;"> 
                        <h3 class="text-white mb-3">Search A Donor</h3> 
                        <p class="text-white">Humans can't live without blood. Without blood, the body's organs couldn't get the oxygen and nutrients. Without enough blood, we'd weaken and die.</p> 
                        <a class="btn btn-light" href="searchdonor.php">Search Donor</a> 
                    </div> 
                </div> 
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s"> 
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;"> 
                        <h3 class="text-white mb-3">World Blood Donor Day 14 June</h3> 
                        <p class="text-white">National Voluntary Blood Donation Day is getting celebrated in India at 1st of October every year to share the need and importance of the blood in the life of an individual.</p> 
                        <h2 class="text-white mb-0"></h2> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    <!-- Banner Start -->

    <!-- About Start --> 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"> 
        <div class="container"> 
            <div class="row g-5"> 
                <div class="col-lg-7"> 
                    <div class="section-title mb-4"> 
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5> 
                        <h1 class="display-5 mb-0">A single drop of blood can make a huge difference.</h1> 
                    </div> 
                    <h4 class="text-body fst-italic mb-4">Blood is the main reason we all are alive; the blood (RBC) carries oxygen from the lungs to all the parts of our body. The moment this process is hampered, a person’s life is in danger. That’s why during many accident cases, the victim dies due to excessive blood loss or brain haemorrhage.</h4> 
                    <p class="mb-4">That’s why sometimes you’ll notice that the hospital is asking the family of the patient to collect blood. If the proper amount of blood isn’t given to the patient’s body, then they might die. So people who donate blood not only do noble work but also save a person’s life when it’s needed.</p> 
                    <a href="about.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Read More</a> 
                </div> 
                <div class="col-lg-5" style="min-height: 500px;"> 
                    <div class="position-relative h-100"> 
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about1.jpg" style="object-fit: cover;"> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    <!-- About End -->

 <!-- Appointment Start -->
 <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">The only gift is a portion of thyself</h1>
                    <p class="text-white mb-0">Our blood is responsible for 7% of our body's weight. Red cells, platelets, plasma and cryoprecipitate are the four types of transferable products which are derived from the blood. Every pint of blood donated can save up to three lives..</p>
                </div>
            </div>
            <?php 
$sql1 ="SELECT id from tblblooddonars ";
$query1 = $dbh -> prepare($sql1);;
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$regbd=$query1->rowCount();
?>
<script type="text/javascript">
    var a = <?php echo json_encode($regbd); ?>;
    const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
    const target = document.querySelector(qSelector);
    let startTimestamp = null;
    const step = (timestamp) => {
     if (!startTimestamp) startTimestamp = timestamp;
     const progress = Math.min((timestamp - startTimestamp) / duration, 1);
     target.innerText = Math.floor(progress * (end - start) + start);
     if (progress < 1) {
      window.requestAnimationFrame(step);
     }
    };
    window.requestAnimationFrame(step);
   };
   //#endregion - end of - number counter animation
   
   document.addEventListener("DOMContentLoaded", () => {
    counterAnim("#count1", 100000, a, 1000);
   });
</script>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.01s">
                    <span class="text-white mb-4" id="count1" style="font-size: 120px;"></span>
                    <h1 class="text-white mb-4"> Donors have already joined us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

<!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                    <?php 
                        $status=1;
                        $sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 50";
                        $query = $dbh -> prepare($sql);
                        $query->bindParam(':status',$status,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $result)
                    { ?>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="img/message.png" alt="">
                            <p class="fs-5"><?php echo htmlentities($result->Message);?>.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0"><?php echo htmlentities($result->FullName);?></h4>
                        </div><?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


 <!-- Team Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Donors</h5>
                    <h1 class="display-6 mb-4">Meet Our Donors</h1>
                    <a href="DonorList.php" class="btn btn-primary py-3 px-5">Meet Us</a>
                </div>
            </div>
            <?php 
                $status=1;
                $sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 5";
                $query = $dbh -> prepare($sql);
                $query->bindParam(':status',$status,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
            { ?>

            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="img/blood-donor.jpg" alt="profile">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="https://twitter.com/"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="https://www.facebook.com/"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="https://in.linkedin.com/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="https://www.instagram.com/"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2"><?php echo htmlentities($result->FullName);?></h4>
                        <p class="text-primary mb-0">Blood Group-> <?php echo htmlentities($result->BloodGroup);?></p>
                            <!-- <a class="btn btn-primary py-3 px-5" href="contact-blood.php?cid=<?php echo htmlentities($result->id);?>">Request</a>  -->
                    </div>
                </div>
            </div><?php }} ?>
        </div>
    </div>
</div>
<!-- Team End -->

    

<!-- Footer Start -->    
	<?php include('includes/footer.php');?>
<!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <!-- <script src="js/number.php"></script> -->
</body>

</html>