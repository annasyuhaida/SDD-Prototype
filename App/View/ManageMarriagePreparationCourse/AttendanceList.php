<?php
class AttendanceList{
    public function render($participant,$course,$apps){
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
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="index.php?action=getApplicant&Lid=1" method="POST">
                                        <div class="row form-material justify-content-center">
                                            <div class="col-md-3">
                                                <label class="m-t-20">Organizer:</label>
                                                <select class="form-control" name="sel1">
                                                    <?php
                                                        foreach($participant as $participantItem){
                                                    ?>
                                                    <option value="<?php echo $participantItem['pre_m_organiser'];?>"><?php echo $participantItem['pre_m_organiser'];?></option>
                                                    <?php
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                          
                                            <div class="col-md-3">
                                                <label class="m-t-20">Briefing Series:</label>
                                                <select class="form-control" name="sel2">
                                                <?php
                                                        foreach($participant as $participantItem){
                                                    ?>
                                                    <option value="<?php echo $participantItem['pre_m_series'];?>"><?php echo $participantItem['pre_m_series'];?></option>
                                                    <?php
                                                        }
                                                        ?>
                                                </select>                                           
                                            </div>
                                            <div class="col-md-3 mt-5">
                                                <label class="m-t-20"></label>
                                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                                            </div>
                                            <div class="col-md-6">
                                            <?php if (is_array($course)) { ?>

                                                <div class="row">
                                                    <?php foreach($course as $course_Item){?>
                                                    <div class="col-md-8">
                                                        <label class="m-t-20"  >Organizer: <?php echo $course_Item['pre_m_organiser'];?></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="m-t-20">Briefing Series: <?php echo $course_Item['pre_m_series'];?></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="m-t-20">Date: <?php echo $course_Item['pre_m_date'];?></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="m-t-20">Venue: <?php echo $course_Item['pre_m_venue'];?></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <?php } else {
                                                // Handle the case when $users is not an array
                                                echo "No users found.";
                                            } ?>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Participant List</h4>
                                </div>
                              <form action="index.php?action=updateAttendance" method="POST">
                              <button type="submit" class="button-right-box col-md-2 btn btn-primary btn-block">Save</button>

                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>PARTICIPANT NAME</th>
                                                <th>ID NUMBER</th>
                                                <th>GENDER</th>
                                                <th>ATTENDANCE</th>
                                                <th>NOTES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (is_array($apps)) { ?>
                                            <?php foreach ($apps as $apps) { ?>
                                            <tr>
                                                <th>1</th>
                                                <td><?php echo $apps['applicantName']; ?></td>
                                                <td><?php echo $apps['applicantIC']; ?></</td>
                                                <td><?php echo $apps['applicantGender']; ?></td>
                                                <td>
                                                    <select class="form-control" name="attendance[<?php echo $apps['applicantID']; ?>]">
                                                        <option value="0">absent</option>
                                                        <option value="1">present</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="text" name="note[<?php echo $apps['applicantID']; ?>]" class="form-control mb-2" >
                                                    </div>
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
    <script src="../plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>
</html>
<?php
    }
}
?>
