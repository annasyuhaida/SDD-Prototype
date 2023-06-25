<?php
class RequestMarriageForm{
    public function render($app,$partner,$Lid,$appID){
        //if (is_array($app)){
            //foreach($app as $appItem){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Custom Stylesheet -->
    <link href="../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">

</head>

<body>

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
                       <div id="step-form-horizontal" class="card-body step-form-horizontal" style="height:85.85rem;">
                        

                            <div>
                                <?php if($Lid == 0){
                                    ?>
                                <h4>Applicant Information</h4>
                                <section class="overflow-auto">
                                    <form id="step1" action="index.php?action=requestMarriage&Lid=1&appID=<?php echo $appID ?>" method="POST" >

                                            <div class="row form-material" >
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">ID Number:</label>
                                                        <p class="form-control-static" value="<?php echo $app['applicantIC']; ?>"><?php echo $app['applicantIC']; ?> </p>                                       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g.+60123456789 " name="applicantPhoneNo">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Applicant Name:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. Alex" name="applicantName" value="<?php echo $app['applicantName']?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Academic Status:</label>
                                                        <select name="applicantEducationLevel" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="Undergraduate">Undergraduate</option>
                                                            <option value="Postgraduate">Postgraduate</option>
                                                            <option value="High School">High School</option>                                                       
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Old ID Number/ Soldier/ Officer:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. 010719-06-0081" name="oldID" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Job Sector:</label>
                                                        <input type="text" class="form-control input-rounded"  name="applicantEmploymentSector">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Birth Date:</label>
                                                        <input type="date" id="mdate" class="form-control input-rounded" placeholder="2017-06-04" name="applicantDOB" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Occupation:</label>
                                                        <input type="text" class="form-control input-rounded" name="applicantJob">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Age:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="applicantAge">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Income:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="applicantIncome">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Gender:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="applicantGender">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Office Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="office">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Race:</label>
                                                        <select name="applicantRace" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="Malay">Malay</option>
                                                            <option value="Chinese">Chinese</option>
                                                            <option value="Indian">Indian</option>                                                        
                                                            <option value="Iban">Iban</option>                                                        
                                                            <option value="Khadazhan">Khadazhan</option>                                                        
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(Office):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="officePhone">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Nationality:</label>
                                                        <select class="form-control input-rounded"  name="nationality" placeholder="-- Please Select --">
                                                            <option value="Citizenship">Citizenship</option>
                                                            <option value="Non-Citizenship">Non Citizenship</option>
                                                        </select>                                                      </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Status:</label>
                                                        <select class="form-control input-rounded"  name="stat" placeholder="-- Please Select --">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Widowed">Widowed</option>                                                        
                                                            <option value="Separate">Separate</option>                                                        
                                                            <option value="Divorced">Divorced</option>                                                        
                                                        </select>                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Pre Marriage Course Certificate Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="series">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Current Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="applicantAddress">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Convert Status:</label>
                                                        <select name="aconvertstatus" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>                                                    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(Home):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="homePhone">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="button-right-box btn btn-primary btn-block col-md-2 mt-5" type="submit">Save</button>
                                                    </div>
                                            </div>
                                    </form>
                                </section>
                                
                                <?php
                                } else if($Lid == 1){
                                ?>
                                <h4>Partner Details</h4>
                        
                                <section>
                                    <form action="index.php?action=requestMarriage&Lid=2&appID=<?php echo $appID?>" method="POST" >

                                            <div class="row form-material" >
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Applicant Name:</label>
                                                        <p class="form-control-static" value="<?php echo $app['applicantName']; ?>"><?php echo $app['applicantName']; ?> </p>                                       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Academic Status:</label>
                                                        <select name="partnerEducationalLevel" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="Undergraduate">Undergraduate</option>
                                                            <option value="Postgraduate">Postgraduate</option>
                                                            <option value="High School">High School</option>                                                       
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">New ID Number/Partner Passport :</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g.010719-06-0081 " name="partnerIC">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Job Sector:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerEmploymentSector">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Old ID Number/ Soldier/ Police:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. 010719-06-0081"  name="oldID2">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Occupation/Position:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerJob">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Partner Name:</label>
                                                        <input type="text" class="form-control input-rounded mt-2" placeholder="" name="partnerName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Income:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerIncome">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Birth Date:</label>
                                                        <input type="date" id="mdate" class="form-control input-rounded" placeholder="2017-06-04" name="partnerDOB">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Age:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerAge">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerPhoneNo">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Gender:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerGender">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Email:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerEmail">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Races:</label>
                                                        <select name="partnerRace" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="Malay">Malay</option>
                                                            <option value="Chinese">Chinese</option>
                                                            <option value="Indian">Indian</option>                                                        
                                                            <option value="Iban">Iban</option>                                                        
                                                            <option value="Khadazhan">Khadazhan</option>                                                        
                                                        </select>   
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Status:</label>
                                                        <select name="pconvertstatus" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Widowed">Widowed</option>                                                        
                                                            <option value="Separate">Separate</option>                                                        
                                                            <option value="Divorced">Divorced</option>                                                        
                                                        </select>                                                   
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Nationality:</label>
                                                        <select name="partnerCitizenship" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="Citizenship">Citizenship</option>
                                                            <option value="Non-Citizenship">Non Citizenship</option>
                                                        </select>                                                    
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Pre Marriage Course Certificate Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="series2">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Workplace Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerWorkplaceAddress">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Convert Status:</label>
                                                        <select name="pconvertstatus" class="form-control input-rounded" placeholder="-- Please Select --">
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>                                                        
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Current Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="partnerAddress">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(Home):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="homePhone">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="button-right-box btn btn-primary btn-block col-md-2 mt-5" type="submit">Save</button>
                                                    </div>

                                            </div>
                                    </form>
                                </section>
                                <?php
                                } else if($Lid == 2){
                                ?>
                                <h4>Marriage Details</h4>

                                <section>
                                    <form action="index.php?action=requestMarriage&Lid=3&appID=<?php echo $appID?>" method="POST" >
                                            <div class="row form-material" >
                                                    <div class="col-md-12 ">
                                                        <h4>Marriage Plan Details</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Apply Date:</label>
                                                        <p class="form-control-static" value="15-06-2023">15-06-2023 </p>                                       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Venue:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="venue">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Applicant Name:</label>
                                                        <p class="form-control-static" value="<?php echo $app['applicantName']; ?>"><?php echo $app['applicantName']; ?>(<?php echo $app['applicantIC']; ?>) </p>                                       
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Country:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Country">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Partner Name:</label>
                                                        <p class="form-control-static" value="<?php echo $partner['partnerName']; ?>"><?php echo $partner['partnerName']; ?>(<?php echo $partner['partnerIC']; ?>) </p>                                       
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <h4>Marriage Plan Details</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Date:</label>
                                                        <input type="date" class="form-control input-rounded" placeholder="" name="rm_Date">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Mahr Amount:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Mahr_Amount">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Address Marriage Venue:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Address">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Type of Mahr:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Mahr_Type">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Another:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=""  name="another">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <h4>Witness Details</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Name(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Name(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_name2" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness ID Number(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=" " name="rm_Witness_IC">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness ID Number(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_IC2">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Address(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_Address">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Address(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_Address2">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Phone Number(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_Phone_No">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Phone Number(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Witness_Phone_No2">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Type:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="" name="rm_Marriage_Category">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button class="button-right-box btn btn-primary btn-block col-md-2 mt-5" type="submit">Save</button>
                                                    </div>
                                            </div>
                                    </form>
                                </section>
                                <?php
                                }
                                ?>
                            </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
       
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
    <script src="../plugins/common/common.min.js"></script>


    <script src="../plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../js/plugins-init/jquery-steps-init.js"></script>


</body>

</html>

<?php
               // }
           // }
    }
}
?>