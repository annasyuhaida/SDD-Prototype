<?php

class PreMarriageCourseRegForm {
    public function render($course, $app) {
 
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom Stylesheet -->
<link href="../css/style.css" rel="stylesheet"> 
<!-- Custom Stylesheet -->
<link href="../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .image-background {
    background-image: url('path/to/your/image.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100%; /* Adjust the height as needed */
    /* Add any additional styling for the image background */
  }

  .box {
            width: 400px;
            height: 200px;
            border: 1px solid black;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border-radius: 10px;
            background-color: lightgrey;
        }

        .regstatus {
            color: darkblue;
        }
</style>


  <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    
    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                        <span ><img class="logo-nav" src="../../images/navheadlogo.png" alt="" style=""></span>
                        </div>
                        <div style="padding-left:25px">
                            <h3>E-MUNAKAHAT</h3>
                            <a href="">HOME</a>
                            <a style="margin-left:10px" href="">LOGOUT</a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                      
                <ul class="metismenu" id="menu">
                    <div id="datepicker-inline"></div>
                    
                    <li>
                        <a class="has-arrow" href="#">
                        <span class="nav-text">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <span class="nav-text">Marriage Preparation Course</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.php?action=getMarriageCourseList">Register Marriage Preparation Course</a></li>
                            <li><a href="index.php?action=PreMarriageList&Lid=2&appID=123&courseID=0">Apply Marriage Preparation Course</a></li>
                            <li><a href="index.php?action=getParticipant">Participant</a></li>
                            <li><a href="index.php?action=getApplicant&Lid=0">Attendance</a></li>
                            <li><a href="index.php?action=getOnlineVerify">Online Verify</a></li>

                        </ul>

                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <span class="nav-text">Marriage Request</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.php?action=requestMarriageList&appID=123">Marriage Application Request</a></li>
                            <li><a href="index.php?action=requestMarriageListStaff">Marriage Application List</a></li>
                            <li><a href="index.php?action=getOnlineVerify">Online Verify</a></li>

                        </ul>   
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#">
                        <span class="nav-text">Marriage Registration</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#">
                        <span class="nav-text">Marriage Certificate and Card</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" >
                        <span class="nav-text">Marriage Consultation</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" >
                        <span class="nav-text">Marriage Special Incentive</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body image-background">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-md-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-muted m-b-15 f-s-12">Organizer : <?php echo $course['pre_m_organiser']; ?></p>
                                <p class="text-muted m-b-15 f-s-12">Location and Date : <?php echo $course['pre_m_venue']; ?> , <?php echo $course['pre_m_date']; ?></p>
                                <h4 class="card-title">Applicant Information</h4>
                                <form action="index.php?action=applyPreMarriage&appID=<?php echo $app['applicantID'] ?>&courseID=<?php echo $course['pre_m_reg_ID']; ?>" method="POST">
                                        <div class="row form-material">
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Name:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. Alex" name="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Identity Card Number:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g.010719-06-0081 " name="IDnum">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Age:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. 26" name="age">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Email:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. Alex26@gmail.com" name="email">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Address:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. No.11 Taman Chempaka" name="address1">
                                                    <input type="text" class="form-control input-rounded mt-2" placeholder="e.g. Lorong IM 15/21"name="address2">
                                                </div>
                                                <div class="col-md-6 "></div>
                                                <div class="col-md-6 ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">State:</label>
                                                            <input type="text" class="form-control input-rounded" placeholder="e.g. Pahang" name="state">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">District:</label>
                                                            <input type="text" class="form-control input-rounded" placeholder="e.g. Gambang" name="district">
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                            <label class="m-t-20">Postcode:</label>
                                                            <input type="text" class="form-control input-rounded" placeholder="e.g. 25150" name="postcode">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Employment:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. Doctor" name="employment">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Education Level:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g.PhD " name="eduLevel">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Gender:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. male" name="gender">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Phone Number:</label>
                                                    <input type="text" class="form-control input-rounded" placeholder="e.g. +60123456789" name="phoneno">
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row justify-content-center">
                                                        <button  type="submit" class="btn btn-dark mt-3"><a  href="index.php?action=approveParticipant&appID=<?php echo $app['applicantID']; ?>&courseID=<?php echo $course['pre_m_reg_ID']; ?>"  >Submit</a></button>
                                                    </div> 
                                                </div>

                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


      </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


     <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <script src="../plugins/moment/moment.js"></script>
    <script src="../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="../plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="../plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="../js/plugins-init/form-pickers-init.js"></script>


</body>
</html>

<?php
    }
}
        ?>