<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Red Proud | Search Donor</title>
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

    <!-- Header start -->
	    <?php include('includes/header.php');?>
    <!-- Header end -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Search Donor</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Search Donor</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">Give Blood Save Lifes</h1>
                        <p class="text-white mb-0">Over the years, blood banking has helped save countless lives. Today, about 13.6 million units of blood are donated per year. About 36,000 units of blood are needed each day. Thanks to advances in medical technology, blood banks can safely store blood donations, and process and screen blood to ensure safety for all.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Search a Donor</h1>
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="bloodgroup" style="height: 55px;" required>
                                        <option selected>Blood Group</option>
                                        <?php $sql = "SELECT * from  tblbloodgroup ";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {               ?>  
                                            <option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="location" placeholder="Location" style="height: 55px;">         
                               </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" name="search" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- result Donors start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                    <?php
                        if(isset($_POST['search']))
                        {
                            $status=1;
                            $bloodgroup=$_POST['bloodgroup'];
                            $location=$_POST['location']; 
                            $sql = "SELECT * from tblblooddonars where (status=:status and BloodGroup=:bloodgroup) ||  (Address=:location)";
                            $query = $dbh -> prepare($sql);
                            $query->bindParam(':status',$status,PDO::PARAM_STR);
                            $query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
                            $query->bindParam(':location',$location,PDO::PARAM_STR);
                            $query->execute();
                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0){
                    ?>
                    <div class="w3ls-titles text-center mb-5">
                        <h3 class="display-5 text-black mb-4"> Available Blood Donors</h3>
                        <span><i class="fas fa-user-md"></i></span>
                    </div>
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <?php	foreach($results as $result){ ?>
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
                                <div class="price-bottom p-4">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td><?php echo htmlentities($result->FullName);?></td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td><?php echo htmlentities($result->Gender);?></td>
                                            </tr>
                                            <tr>
                                                <td>Blood Group</td>
                                                <td><?php echo htmlentities($result->BloodGroup);?></td>
                                            </tr>
                                            <tr>
                                                <td>Age</td>
                                                <td><?php echo htmlentities($result->Age);?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><?php echo htmlentities($result->Address);?></td>
                                            </tr>
                                            <tr>
                                                <td>Message</td>
                                                <td><?php echo htmlentities($result->Message);?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a class="btn btn-primary py-3 px-5" href="contact-blood.php?cid=<?php echo htmlentities($result->id);?>">Request</a>                     
                                </div>
                            </div>
                        </div>
                </div><?php }} else{echo htmlentities("No Record Found");}}?>
            </div>
        </div>
    </div>        
    <!-- result Donors end -->
    

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
</body>

</html>