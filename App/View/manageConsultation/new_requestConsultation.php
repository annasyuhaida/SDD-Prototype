<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom Stylesheet -->
<link href="../../css/style.css" rel="stylesheet"> 
<!-- Custom Stylesheet -->
<link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
<!-- Date picker plugins css -->
<link href="../../plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

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
                        <span ><img class="logo-nav" src="../../images/navheadlogo.png" alt="" style""></span>
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
    <body>
         <!--**********************************
            Mainpage start
        ***********************************-->
        <div class="container-fluid">
        <div class="grey-box">
        
        <div class="center-form">
        <form action="/test.php" method= "post" >
        <fieldset>
        <p style="border: 1px solid black">Applicant Information</p>
            <label for="fname">NO IC : </label>
            <input type="text" id="noIC" name="noIC" value=""><br>
            <label for="lname">Applicant name :</label>
            <input type="text" id="applicantName" name="applicantName" value=""><br>
            <label for="fname">Birth date : </label>
            <input type="text" id="birthDate" name="birthDate" value=""><br>
            <label for="lname">Race :</label>
            <input type="text" id="race" name="race" value=""><br>
            <label for="fname">Address : </label>
            <input type="text" id="address" name="address" value=""><br>
            <label for="lname">Phone No :</label>
            <input type="text" id="phonenum" name="phonenum" value=""><br>
            <label for="fname">Enployment sector : </label>
            <input type="text" id="enploymentSec" name="enploymentSec" value=""><br>
            <label for="lname">Job Position :</label>
            <input type="text" id="job" name="job" value=""><br>
            <label for="fname">Income : </label>
            <input type="text" id="income" name="income" value=""><br>
            <label for="lname">Educational Level :</label>
            <input type="text" id="eduLevel" name="eduLevel" value=""><br>
            <label for="cars">No. of marriage :</label>
            <select id="noOfmarriage" name="noOfmarriage">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        <p style="border: 1px solid black">Partner Information</p>
            <label for="fname">NO IC : </label>
            <input type="text" id="noIC" name="noIC" value=""><br>
            <label for="lname">Applicant name :</label>
            <input type="text" id="applicantName" name="applicantName" value=""><br>
            <label for="fname">Birth date : </label>
            <input type="text" id="birthDate" name="birthDate" value=""><br>
            <label for="lname">Race :</label>
            <input type="text" id="race" name="race" value=""><br>
            <label for="fname">Address : </label>
            <input type="text" id="address" name="address" value=""><br>
            <label for="lname">Phone No :</label>
            <input type="text" id="phonenum" name="phonenum" value=""><br>
            <label for="fname">Enployment sector : </label>
            <input type="text" id="enploymentSec" name="enploymentSec" value=""><br>
            <label for="lname">Job Position :</label>
            <input type="text" id="job" name="job" value=""><br>
            <label for="fname">Income : </label>
            <input type="text" id="income" name="income" value=""><br>
            <label for="lname">Educational Level :</label>
            <input type="text" id="eduLevel" name="eduLevel" value=""><br>
            <label for="cars">No. of marriage :</label>
            <select id="noOfmarriage" name="noOfmarriage">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        <p style="border: 1px solid black">Consultation Information</p>
            <label for="marriageNO">Marriage No :</label>
            <input type="text" id="marriageDate" name="marriageDate" value=""><br>
            <span>Consultation Date: <span class="required">*</span></span><input type="date" class="" name="consultation_Date" value=""><br><br>
            <span>Consultation TIme: <span class="required">*</span></span><input type="time" class="" name="consultation_Time" value=""><br><br>
            <label for="consultation_Purpose">Consultation Purpose :</label>
            <textarea name="consultationPurpose" rows="10"></textarea><br>

            <input type="submit" value="Submit" onclick="alert('FORM SUBMITTED SUCCESFULLY')">
            <input type="submit" value="Back">
        </form> 
    </body>