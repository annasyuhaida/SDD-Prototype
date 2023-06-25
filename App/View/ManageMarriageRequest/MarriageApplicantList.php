<?php
class MarriageApplicantList{
    public function render($all){

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

                    <!--<div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-2 offset-md-2">
                                                <label class="m-t-20">APPLICATION ID NUMBER:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <label class="m-t-20">APPLICATION ID NAME:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="m-t-20">RECEIVED ACCOUNT NUMBER:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <label class="m-t-20">RECEIVED DATE:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-2 offset-md-3">
                                                <label class="m-t-20">STATUS:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-2 ">
                                                <label class="m-t-20">MONTH:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <label class="m-t-20">YEAR:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary mt-4">Search</button>
                                                <button type="submit" class="btn btn-primary mt-4">Back</button>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="button-right-box col-md-2"><a href="index.php?action=onlineVerify" class="btn btn-primary btn-block">Online Approval</a></div>
                            <div class="button-right-box col-md-2"><a href="index.php?action=requestMarriageListStaff&Lid&appID=1234" class="btn btn-primary btn-block">+Register New</a></div>

                                <div class="card-title">
                                    <h4>Applicant List</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>APPLICANT</th>
                                                <th>APPLY DATE</th>
                                                <th>RECEIVED DATE</th>
                                                <th>RECEIVED ACCOUNT NUMBER</th>
                                                <th>MARRIAGE DATE</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (is_array($all)) { ?>
                                            <?php foreach ($all as $all_Item) { ?>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <div class="m-t-20">
                                                        <?php echo $all_Item['applicantIC']; ?>
                                                    </div>
                                                    <div class="m-t-20">
                                                        <?php echo $all_Item['applicantName']; ?>
                                                    </div>
                                                </td>
                                                <td><?php echo $all_Item['rm_req_date']; ?></td>
                                                <td>22/12/2022</td>
                                                <td>RMPN<?php echo $all_Item['applicantID']; ?></td>
                                                <td><?php echo $all_Item['rm_Date']; ?></td>
                                                <td><?php if($all_Item['rm_req_approval'] == NULL){
                                                    ?>PENDING<?php
                                                }else{
                                                     echo $all_Item['partnerIC']; 
                                                } ?></td>
                                                <td>
                                                    <span>
                                                        <a href="index.php?action=viewRequestMarriageStaff&appID=123" title="Print"><i class="fa fa-print color-muted m-r-5"></i></a>
                                                        <a href="index.php?action=editRequestMarriageStaff&Lid=0&reqID=<?php echo $all_Item['req_marriage_ID']; ?>&appID=123" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit color-muted m-r-5"></i></a>
                                                        <a href="./PreMarriageCourseRegForm.php" title="Approve"><i class="fa fa-check-square-o color-muted m-r-5"></i></a>
                                                        <a href="index.php?action=deleteRequestMarriageStaff&appID=123" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash color-muted m-r-5"></i></a>

                                                    </span>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <?php } else {
                                                // Handle the case when $users is not an array
                                                echo "No users found.";
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
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
    <script src="../plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>
</html>

<?php
    }
}
?>