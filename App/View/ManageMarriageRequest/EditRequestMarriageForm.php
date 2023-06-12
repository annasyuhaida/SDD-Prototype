<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Custom Stylesheet -->
    <link href="../../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="../../../plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="../../../plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <!-- Daterange picker plugins css -->
    <link href="../../../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../../../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="../../../css/style.css" rel="stylesheet">

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
                            <li><a href="./PreMarriageCourseList.php">Register Marriage Preparation Course</a></li>
                        </ul>

                    </li>
                    <li>
                        <a class="has-arrow" href="#">
                        <span class="nav-text">Marriage Request</span>
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
                       <div class="card-body" style="height: 70.85rem;">
                        <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                            <div>
                                <h4>Applicant Information</h4>
                                <section class="overflow-auto">
                                    <form>
                                            <div class="row form-material" >
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">ID Number:</label>
                                                        <input type="text" class="form-control input-rounded" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g.+60123456789 ">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Applicant Name:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. Alex">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Academic Status:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Choose --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Old ID Number/ Soldier/ Officer:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. 010719-06-0081">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Job Sector:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Choose --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Birth Date:</label>
                                                        <input type="text" id="mdate" class="form-control input-rounded" placeholder="2017-06-04" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Occupation:</label>
                                                        <input type="text" class="form-control input-rounded" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Age:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Income:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Gender:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Office Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Race:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(Office):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Nationality:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Status:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Pre Marriage Course Certificate Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Current Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Status:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(Home):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                            </div>
                                    </form>
                                </section>
                                <h4>Partner Details</h4>
                                <section>
                                    <form>
                                            <div class="row form-material" >
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Applicant Name:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. Alex">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Academic Status:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Select --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">New ID Number/Partner Passport :</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g.010719-06-0081 ">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Job Sector:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Old ID Number/ Soldier/ Police:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="e.g. 010719-06-0081">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Occupation/Position:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Partner Name:</label>
                                                        <input type="text" class="form-control input-rounded mt-2" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Income:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Birth Date:</label>
                                                        <input type="text" id="mdate" class="form-control input-rounded" placeholder="2017-06-04" >
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Office Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Age:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Gender:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Email:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Races:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Select --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Status:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Select --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Nationality:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Select --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Pre Marriage Course Certificate Number:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Convert Status:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="-- Please Select --">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Current Address:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(Home):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="\">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Phone Number(HP):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>

                                            </div>
                                    </form>
                                </section>
                                <h4>Marriage Details</h4>
                                <section>
                                    <form>
                                            <div class="row form-material" >
                                                    <div class="col-md-12 ">
                                                        <h4>Marriage Plan Details</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Apply Date:</label>
                                                        <input type="text" class="form-control input-rounded">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Venue:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Applicant Name:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Country:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Partner Name:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <h4>Marriage Plan Details</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Date:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Dowry Amount:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Address Marriage Venue:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Type of Dowry:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Another:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <h4>Witness Details</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Name(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Name(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness ID Number(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness ID Number(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Address(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Address(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Phone Number(1):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Witness Phone Number(2):</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Marriage Type:</label>
                                                        <input type="text" class="form-control input-rounded" placeholder="">
                                                    </div>
        
                                            </div>
                                    </form>
                                </section>
                                
                            </div>
                        </form>
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
    <script src="../../../plugins/common/common.min.js"></script>
    <script src="../../../js/custom.min.js"></script>
    <script src="../../../js/settings.js"></script>
    <script src="../../../js/gleek.js"></script>
    <script src="../../../js/styleSwitcher.js"></script>

    <script src="../../../plugins/moment/moment.js"></script>
    <script src="../../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- Clock Plugin JavaScript -->
    <script src="../../../plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="../../../plugins/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../../../plugins/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../../../plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="../../../plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="../../../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="../../../js/plugins-init/form-pickers-init.js"></script>
    <script src="../../../plugins/common/common.min.js"></script>


    <script src="../../../plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../../js/plugins-init/jquery-steps-init.js"></script>


</body>

</html>