<?php session_start(); ?>
<!-- Topbar Start -->
<?php 
$pagetype="contactus";
$sql = "SELECT * from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
 <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="fas fa-map-marker-alt mr-2"></i><?php  echo $result->Address; ?> </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><?php  echo $result->EmailId; ?></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+<?php  echo $result->ContactNo; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } } ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0" style="color:#dc3545 !important"><i class="fa fa-tint"></i>RED PROUD</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About Us</a>
            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            <a href="DonorList.php" class="nav-item nav-link">Donor List</a>
            <a href="searchdonor.php" class="nav-item nav-link">Search Donor</a>
        </div>
        
        <?php if (strlen($_SESSION['bbdmsdid']!=0)) {?>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-book-medical"></i></button>
        
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Account</a>
                <div class="dropdown-menu m-0">
                    <a href="profile.php" class="dropdown-item">Profile</a>
                    <a href="change-password.php" class="dropdown-item">Change Password</a>
                    <a href="request-received.php" class="dropdown-item">Request Received</a>
                    <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
        </div> <?php } ?>
        <?php if (strlen($_SESSION['bbdmsdid']==0)) {?>
            <a href="admin/index.php" class="nav-item nav-link">Admin</a>
            <a href="registration.php" class="btn btn-primary py-2 px-4 ms-3">LogIn / Register</a><?php } ?>
    </div>
</nav>
<!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 900px;">
                        <!-- <input type="text" class="form-control bg-transparent border-primary p-3" placeholder= "Search Blood Group">
                        <button class="btn btn-primary px-4"><i class="fa-solid fa-bell"></i></button> -->

                        <h2>Details of Requests of Blood Requirer.</h2>
    <div class="table-wrapper">
        <table class="fl-table bg-transparent" style="border: 5px solid;">
            <thead>
                <tr>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">S.No</th>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">Name</th>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">Mobile Number</th>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">Email</th>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">Blood Require For</th>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">Message</th>
                    <th style="border: 5px solid; background-color: #0d6efd; padding:10px; color: #ffffff;">Apply Date</th>
                </tr>
            </thead>
            <tbody>
            <tr style="border: 5px solid; color: #ffffff">
                <?php
                    $uid=$_SESSION['bbdmsdid'];
                    $sql="SELECT tblbloodrequirer.BloodDonarID,tblbloodrequirer.name,tblbloodrequirer.EmailId,tblbloodrequirer.ContactNumber,tblbloodrequirer.BloodRequirefor,tblbloodrequirer.Message,tblbloodrequirer.ApplyDate,tblblooddonars.id as donid from  tblbloodrequirer join tblblooddonars on tblblooddonars.id=tblbloodrequirer.BloodDonarID where tblbloodrequirer.BloodDonarID=:uid";
                    $query = $dbh -> prepare($sql);
                    $query->bindParam(':uid',$uid,PDO::PARAM_STR);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                    foreach($results as $row)
                {?>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php echo htmlentities($cnt);?></td>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php  echo htmlentities($row->name);?></td>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php  echo htmlentities($row->ContactNumber);?></td>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php  echo htmlentities($row->EmailId);?></td>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php  echo htmlentities($row->BloodRequirefor);?></td>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php  echo htmlentities($row->Message);?> </td>
                    <td style="border: 5px solid; color: #ffffff; padding:10px;"><?php  echo htmlentities($row->ApplyDate);?> </td>
            </tr>
            <?php $cnt=$cnt+1;}} else {?>
            <tr>
                <center><th colspan="8" style="color:red;"> No Record found</th></center>
            </tr>
            <?php } ?>
            <!-- <tr>
                <td>Content 10</td>
                <td>Content 10</td>
                <td>Content 10</td>
                <td>Content 10</td>
                <td>Content 10</td>
                <td>Content 10</td>
                <td>Content 10</td>
            </tr> -->
            <tbody>
        </table>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


   