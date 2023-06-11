<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom Stylesheet -->
<link href="../../../css/style.css" rel="stylesheet"> 
<!-- Custom Stylesheet -->
<link href="../../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../../../plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
     
  .image-background {
    background-image: url('bgheader.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100%; 
  }

  .container {
      border: 2px solid #004080;
      background-color: #004080;
      color: #fff;
      padding: 20px;
      width: 400px;
      text-align: center;
      box-sizing: border-box;
    }

    .button {
      background-color: yellow;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      margin-top: 10px;
    }
</style>

<script>
    function continueClicked() {
      var marriageType = document.querySelector('input[name="marriageType"]:checked');
      if (marriageType) {
        if (marriageType.value === "withinCountry") {
          location.href = "marriage_within_country.php";
        } else if (marriageType.value === "voluntary") {
          location.href = "voluntary_marriage.php";
        }
      } else {
        alert("Please select type of marriage");
      }
    }
  </script>

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
           
        </div>
        <!--**********************************
            Nav header end
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
                        <a class="has-arrow" href="#">
                        <span class="nav-text">Marriage Preparation Course</span>
                        </a>
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
                <h1 class="w3-container w3-text-black">e-MUNAKAHAT</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-6">            
                <div class="container">
    <h2>Select Type of Marriage</h2>
    <label class="option">
      <input type="radio" name="marriageType" value="withinCountry"> Marriage Within Country
    </label>
    <label class="option">
      <input type="radio" name="marriageType" value="voluntary"> Voluntary Marriage
    </label>
    <button class="button" onclick="continueClicked()">Continue</button>
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


</body>
</html>
