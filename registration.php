<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $mobile=$_POST['mobileno'];
    $email=$_POST['emailid'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $blodgroup=$_POST['bloodgroup'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    $status=1;
    $password=md5($_POST['password']);
    $ret="select EmailId from tblblooddonars where EmailId=:email";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,EmailId,Age,Gender,BloodGroup,Address,Message,status,Password) VALUES(:fullname,:mobile,:email,:age,:gender,:blodgroup,:address,:message,:status,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':blodgroup',$blodgroup,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have signup  Successfully'); document.location ='logIn.php';</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('Email-id already exist. Please try again');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Red Proud | Registration Form</title>
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

    <!-- Header Start -->
        
        <?php include('includes/header.php');?>
        
    <!-- Header End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Register Yourself</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">registration</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Registration Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                        <div class="position-relative h-100">
                            <img class="position-absolute" data-wow-delay="0.9s" src="img/reg3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                        <div class="position-relative h-100">
                            <!-- <img class="position-absolute" data-wow-delay="0.9s" src="img/bg6d.jpg" style="object-fit: cover;"> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <form method="post" method="post" name="signup" onsubmit="return checkpass();">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="fullname" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="emailid" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 ">
                                    <select class="form-select bg-light border-0" style="height: 55px;" name="bloodgroup" required> 
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
                                <div class="col-12">
                                    <input type="tel" name="mobileno" class="form-control border-0 bg-light px-4" placeholder="Phone No." style="height: 55px;"pattern="[0-9]+" required>  
                                </div>
                                <div class="col-12">
                                    <input type="text" name="address" class="form-control border-0 bg-light px-4" placeholder="Address" style="height: 55px;" required>
                                </div>
                                <div class="col-12">    
                                    <label class="form-control border-0 bg-light px-4">Gender
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    <input type="radio" name="gender" value="Others"> Others</label>
                                </div>
                                <div class="col-12">
                                    <input type="number" name="age" class="form-control border-0 bg-light px-4" placeholder="Age" min="18" max="100"style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control border-0 bg-light px-4" placeholder="Password" style="height: 55px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 4 or upto 8 characters" minlength="4" maxlength="8" size="8" required>
                                    <!-- <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> -->
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Sign Up</button>
                                </div>
                            </div><br>
                            <p class="account-w3ls text-center pb-4" style="color:#000">Already Registered?<a href="logIn.php" > Sign In now</a></p>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

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