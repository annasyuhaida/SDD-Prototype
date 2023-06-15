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
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-image: url('./background.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 60px;
        overflow: hidden;
        background-color: transparent;
        margin-left: 50px;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }

    .box-container {
        position: absolute;
        top: 50%;
        left: 60%;
        transform: translate(-50%, -50%);
        width: 800px;
        background: #C7D1D3;
        border-radius: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        height: 550px;
        margin-top: 50px;
    }

    .box-container header {
        font-size: 30px;
        font-weight: 500;
        text-align: center;
        color: black;
        margin-top: 20px;
    }

     .box-container input.icnumber {
        height: 30px;
        width: 57%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 0px;
        outline: none;
        margin: auto;
        background-color: #959799;
        display: inline-block;
        vertical-align: middle;
        margin-top: 40px;
    }

    .box-container input.name {
        height: 30px;
        width: 57%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 0px;
        outline: none;
        margin: auto;
        background-color: #959799;
        display: inline-block;
        vertical-align: middle;
        margin-top: 40px;
    }

    .box-container input.phoneno {
        height: 30px;
        width: 57%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 0px;
        outline: none;
        margin: auto;
        background-color: #959799;
        display: inline-block;
        vertical-align: middle;
        margin-top: 40px;
    }

    .box-container input.email {
        height: 30px;
        width: 57%;
        padding: 0 15px;
        font-size: 17px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 0px;
        outline: none;
        margin: auto;
        background-color: #959799;
        display: inline-block;
        vertical-align: middle;
        margin-top: 40px;
    } 

    .box-container form label.icnumber {
        text-align: center;
        line-height: 50%;
        font-size: 17px;
        margin-bottom: 10px;
        margin-top: 50px;
        color: black;
        display: inline-block;
        vertical-align: middle;
        text-align: right;
        margin-left: 30px;
    }

    .box-container form label.name {
        text-align: center;
        line-height: 50%;
        font-size: 17px;
        margin-bottom: 10px;
        margin-top: 30px;
        color: black;
        display: inline-block;
        vertical-align: middle;
        text-align: right;
        margin-left: 30px;
    }

    .box-container form label.phoneno {
        text-align: center;
        line-height: 50%;
        font-size: 17px;
        margin-bottom: 10px;
        margin-top: 30px;
        color: black;
        display: inline-block;
        vertical-align: middle;
        text-align: right;
        margin-left: 30px;
    }

    .box-container form label.email {
        text-align: center;
        line-height: 50%;
        font-size: 17px;
        margin-bottom: 10px;
        margin-top: 30px;
        color: black;
        display: inline-block;
        vertical-align: middle;
        text-align: right;
        margin-left: 30px;
    }

    .box-container form input.button {
        color: #fff;
        background: #346089;
        font-size: 1.0rem;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: 0.4s;
        height: 40px;
        width: 27%;
        position: absolute;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-right: 40px;
        bottom: 0;
        right: 0;
        border-radius: 10px;
    }

    footer {
        color: red;
        text-align: right;
        margin-top: 550px;
        margin-right: 10px;
        color: white;
    }

    .image-background {
        background-image: url('path/to/your/image.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100%;
        /* Adjust the height as needed */
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

    a.button {
        color: #fff;
        background: #346089;
        font-size: 1.0rem;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: 0.4s;
        height: 45px;
        width: 25%;
        position: absolute;
        margin-bottom: 50px;
        margin-right: 50px;
        bottom: 0;
        right: 0;
        border-radius: 10px;
        border: none;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;

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
                        <span><img class="logo-nav" src="../../images/navheadlogo.png" alt="" style=""></span>
                    </div>
                    <div style="padding-left:25px">
                        <h3>E-MUNAKAHAT</h3>
                        <a href="">HOME</a>
                        <a style="margin-left:10px" href="logout.php">LOGOUT</a>
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
                        <li><a href="./PreMarriageCourseRegForm.php">Register Marriage Preparation Course</a></li>
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
                    <a class="has-arrow" href="#">
                        <span class="nav-text">Marriage Consultation</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="#">
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
        <div class="box-container">
            <!-- Content goes here -->
            <header>APPLICANT PROFILE</header>
            <form name="profile" action="#">
                <label class="icnumber">IDENTITY CARD NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp: 010106-01-0055 </label><br>

                <label class="name">FULL NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                <input type="text" class="name" value="KHOLID BIN WAFI"><br>

                <label class="name">GENDER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: MALE</label><br>

                <label class="phoneno">PHONE NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                <input type="number" class="phoneno" value="01498554370"><br>

                <label class="email">EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                <input type="email" class="email" value="kholid@gmail.com"><br>

                <a href="ApplicantProfileList.php" class="button">SUBMIT</a>
            </form>
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