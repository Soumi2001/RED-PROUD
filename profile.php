<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['bbdmsdid']==0)) {
  header('location:logout.php');
  } else{

 if(isset($_POST['update']))
  {
    $uid=$_SESSION['bbdmsdid'];
    $name=$_POST['fullname'];
    $mno=$_POST['mobileno']; 
    $emailid=$_POST['emailid'];
    $age=$_POST['age']; 
    $gender=$_POST['gender'];
    $bloodgroup=$_POST['bloodgroup']; 
    $address=$_POST['address'];
    $message=$_POST['message']; 
  $sql="update tblblooddonars set FullName=:name,MobileNumber=:mno, Age=:age,Gender=:gender,BloodGroup=:bloodgroup,Address=:address,Message=:message  where id=:uid";
     $query = $dbh->prepare($sql);
     $query->bindParam(':name',$name,PDO::PARAM_STR);
     $query->bindParam(':mno',$mno,PDO::PARAM_STR);
     $query->bindParam(':age',$age,PDO::PARAM_STR);
     $query->bindParam(':gender',$gender,PDO::PARAM_STR);
     $query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
     $query->bindParam(':address',$address,PDO::PARAM_STR);
     $query->bindParam(':message',$message,PDO::PARAM_STR);
     $query->bindParam(':uid',$uid,PDO::PARAM_STR);
     $query->execute();
        echo '<script>alert("Profile has been updated")</script>';
  }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Red Proud | Profile Page</title>
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
                <h1 class="display-3 text-white animated zoomIn">Profile</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Profile</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="post">
                    <?php
                        $uid=$_SESSION['bbdmsdid'];
                        $sql="SELECT * from  tblblooddonars where id=:uid";
                        $query = $dbh -> prepare($sql);
                        $query->bindParam(':uid',$uid,PDO::PARAM_STR);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount() > 0)
                        {
                        foreach($results as $row)
                    {?>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" name="fullname" class="form-control border-0 bg-light px-4" value="<?php  echo $row->FullName;?>" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="emailid" class="form-control border-0 bg-light px-4" value="<?php  echo $row->EmailId;?>" style="height: 55px;" readonly>
                                </div>
                                <div class="col-12 ">
                                    <select class="form-select bg-light border-0" style="height: 55px;" name="bloodgroup" required> 
                                        <option value="<?php  echo $row->BloodGroup;?>"><?php  echo $row->BloodGroup;?></option>
                                        <?php $sql = "SELECT * from  tblbloodgroup ";
                                            $query = $dbh -> prepare($sql);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                            foreach($results as $result)
                                            {               
                                        ?>  
                                        <option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
                                        <?php }} ?>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="tel" name="mobileno" class="form-control border-0 bg-light px-4" maxlength="10" pattern="[0-9]+" value="<?php  echo $row->MobileNumber;?>" style="height: 55px;" required>  
                                </div>
                                <div class="col-12">
                                    <input type="text" name="address" class="form-control border-0 bg-light px-4" value="<?php  echo $row->Address;?>" style="height: 55px;" required>
                                </div>
                                <div class="col-12">    
                                    <select class="form-select bg-light border-0" style="height: 55px;"name="gender" required> 
                                        <option value="<?php  echo $row->Gender;?>"><?php  echo $row->Gender;?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Female">Others</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="number" name="age" class="form-control border-0 bg-light px-4" value="<?php  echo $row->Age;?>" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" name="message" required><?php  echo $row->Message;?></textarea>
                                </div>
                                
						<?php $cnt=$cnt+1;}} ?>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="update">Update Profile</button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <img class="position-absolute" data-wow-delay="0.9s" src="img/reg1.webp" style="object-fit: cover; width: 60%; height: 90%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    <!-- Footer Start -->

    <?php include('includes/footer.php');?>

    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
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
<?php } ?>