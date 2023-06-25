<?php
class ViewRequestedMarriage{
    public function render($request){
        if (is_array($request)){
            foreach($request as $request){
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
                                
                                <h4>Applicant Information</h4>
                                <section class="overflow-auto">
                                  <div class="row form-material">
                                    <div class="col-md-6">
                                      <label class="m-t-20 font-weight-bold">ID Number:</label>
                                      <p class="form-control-static"><?php echo $request['applicantIC']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Phone Number:</label>
                                      <p class="form-control-static"><?php echo $request['applicantPhoneNo']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Applicant Name:</label>
                                      <p class="form-control-static"><?php echo $request['applicantName']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Academic Status:</label>
                                      <p class="form-control-static"><?php echo $request['applicantEducationalLevel']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Old ID Number/ Soldier/ Officer:</label>
                                      <p class="form-control-static">09301293123</p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Job Sector:</label>
                                      <p class="form-control-static"><?php echo $request['applicantEmploymentSector']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Birth Date:</label>
                                      <p class="form-control-static"><?php echo $request['applicantDOB']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Occupation:</label>
                                      <p class="form-control-static"><?php echo $request['applicantJob']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Age:</label>
                                      <p class="form-control-static"><?php echo $request['applicantAge']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Income:</label>
                                      <p class="form-control-static"><?php echo $request['applicantIncome']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Gender:</label>
                                      <p class="form-control-static"><?php echo $request['applicantGender']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Office Address:</label>
                                      <p class="form-control-static">no.11 Lorong Phuket</p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Race:</label>
                                      <p class="form-control-static"><?php echo $request['applicantRace']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Phone Number(Office):</label>
                                      <p class="form-control-static">01312434324</p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Nationality:</label>
                                      <p class="form-control-static">Citizenship</p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20">Marriage Status:</label>
                                      <p class="form-control-static"><?php echo $request['marriageStatus']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Pre Marriage Course Certificate Number:</label>
                                      <p class="form-control-static">BTG/001/2023</p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Current Address:</label>
                                      <p class="form-control-static"><?php echo $request['applicantAddress']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Convert Status:</label>
                                      <p class="form-control-static"><?php echo $request['aconvertstatus']; ?></p>
                                    </div>
                                    <div class="col-md-6 ">
                                      <label class="m-t-20 font-weight-bold">Phone Number(Home):</label>
                                      <p class="form-control-static">0195510071</p>
                                    </div>
                                  </div>
                                </section>

                          
                                <h4>Partner Details</h4>
                        
                                <section>
                                  <div class="row form-material">
                                    <div class="col-md-6">
                                      <label class="m-t-20">Applicant Name:</label>
                                      <p class="form-control-static"><?php echo $request['applicantName']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Academic Status:</label>
                                      <p class="form-control-static"><?php echo $request['partnerEducationalLevel']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">New ID Number/Partner Passport :</label>
                                      <p class="form-control-static"><?php echo $request['partnerIC']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Job Sector:</label>
                                      <p class="form-control-static"><?php echo $request['partnerEmploymentSector']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Old ID Number/ Soldier/ Police:</label>
                                      <p class="form-control-static"><?php echo $request['oldID2']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Occupation/Position:</label>
                                      <p class="form-control-static"><?php echo $request['partnerJob']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Partner Name:</label>
                                      <p class="form-control-static"><?php echo $request['partnerName']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Income:</label>
                                      <p class="form-control-static"><?php echo $request['partnerIncome']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Birth Date:</label>
                                      <p class="form-control-static"><?php echo $request['partnerDOB']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Age:</label>
                                      <p class="form-control-static"><?php echo $request['partnerAge']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Phone Number:</label>
                                      <p class="form-control-static"><?php echo $request['partnerPhoneNo']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Gender:</label>
                                      <p class="form-control-static"><?php echo $request['partnerGender']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Email:</label>
                                      <p class="form-control-static"><?php echo $request['partnerEmail']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Races:</label>
                                      <p class="form-control-static"><?php echo $request['partnerRace']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Marriage Status:</label>
                                      <p class="form-control-static">Single</p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Nationality:</label>
                                      <p class="form-control-static"><?php echo $request['partnerCitizenship']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Pre Marriage Course Certificate Number:</label>
                                      <p class="form-control-static">SGL/200/2022</p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Workplace Address:</label>
                                      <p class="form-control-static">no.1123 Lorong Penjara</p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Convert Status:</label>
                                      <p class="form-control-static">No</p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Current Address:</label>
                                      <p class="form-control-static"><?php echo $request['partnerAddress']; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                      <label class="m-t-20">Phone Number (Home):</label>
                                      <p class="form-control-static">0195510071</p>
                                    </div>
                                    <div class="col-md-12">
                                      <button class="button-right-box btn btn-primary btn-block col-md-2 mt-5" type="submit">Save</button>
                                    </div>
                                  </div>
                                </section>

                         
                                <h4>Marriage Details</h4>

                                    <section>
                                      <div class="row form-material">
                                        <div class="col-md-12">
                                          <h4>Marriage Plan Details</h4>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Apply Date:</label>
                                          <p class="form-control-static"><?php echo $request['rm_req_date']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Marriage Venue:</label>
                                          <p class="form-control-static"><?php echo $request['venue']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Applicant Name:</label>
                                          <p class="form-control-static"><?php echo $request['applicantName']; ?>(<?php echo $request['applicantIC']; ?>)</p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Country:</label>
                                          <p class="form-control-static"><?php echo $request['rm_Country']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Partner Name:</label>
                                          <p class="form-control-static"><?php echo $request['partnerName']; ?>(<?php echo $request['partnerIC']; ?>)</p>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                          <h4>Marriage Plan Details</h4>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Marriage Date:</label>
                                          <p class="form-control-static"><?php echo $request['rm_Date']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Mahr Amount:</label>
                                          <p class="form-control-static"><?php echo $request['rm_Mahr_Amount']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Address Marriage Venue:</label>
                                          <p class="form-control-static"><?php echo $request['rm_Address']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Type of Mahr:</label>
                                          <p class="form-control-static"><?php echo $request['rm_Mahr_Type']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Another:</label>
                                          <p class="form-control-static"><?php echo $request['another']; ?></p>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                          <h4>Witness Details</h4>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness Name(1):</label>
                                          <p class="form-control-static"><?php echo $request['rm_Witness_Name']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness Name(2):</label>
                                          <p class="form-control-static">AQMAL FARIQ BIN IQBHAL</p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness ID Number(1):</label>
                                          <p class="form-control-static"><?php echo $request['rm_Witness_IC']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness ID Number(2):</label>
                                          <p class="form-control-static">09032832323</p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness Address(1):</label>
                                          <p class="form-control-static"><?php echo $request['rm_Witness_Address']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness Address(2):</label>
                                          <p class="form-control-static">No.11 Lorong Tun Perak kembur 9/2, Pekan, Pahang</p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness Phone Number(1):</label>
                                          <p class="form-control-static"><?php echo $request['rm_Witness_Phone_No']; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Witness Phone Number(2):</label>
                                          <p class="form-control-static">+60195510071</p>
                                        </div>
                                        <div class="col-md-6">
                                          <label class="m-t-20">Marriage Type:</label>
                                          <p class="form-control-static"><?php echo $request['rm_Marriage_Category']; ?></p>
                                        </div>
                                        <div class="col-md-12">
                                          <button class="button-right-box btn btn-primary btn-block col-md-2 mt-5" type="submit">Save</button>
                                        </div>
                                      </div>
                                    </section>

                              
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
                }
            }
    }
}
?>