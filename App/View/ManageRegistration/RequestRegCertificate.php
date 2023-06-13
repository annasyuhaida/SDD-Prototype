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
    .regstatus {
     color: darkblue;
  }

  .cert-interface-header {
     color: white;
     background-color: darkblue;
     padding: 2px;
     border: 1px solid black;
     margin: 10px;
  }

  td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
  background-color: lightblue;
  color: black;
}

.container {
            text-align: center;
            margin-top: 200px;
        }
        
        .button {
            padding: 10px 20px;
            background-color: yellow;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            display: none;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .upload-btn {
            display: none;
        }
        
        .upload-label {
            padding: 10px 20px;
            background-color: yellow;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn {
            padding: 10px 20px;
            background-color: green;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .delete-btn {
            padding: 10px 20px;
            background-color: red;
            color: black;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .file-name {
            margin-top: 10px;
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
                        <a class="has-arrow" href="ViewRegApprovalStatus.php">
                        <span class="nav-text">Marriage Registration</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="RequestRegCertificate.php">
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

                <h4 class="cert-interface-header">MARRIAGE CERTIFICATE AND CARD REQUEST</h4>
                <br>
                <table>
  <thead>
    <tr>
      <th>No.</th>
      <th>Applicant IC number and name</th>
      <th>Spouse IC number and name</th>
      <th>Registration date of approval</th>
      <th>Certificate</th>
      <th>Card</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>021101-06-0671<br>RIZAL BIN ROMZI</td>
      <td>021102-06-0614<br>NUREEN BINTI JEFRI</td>
      <td>21/2/2023</td>
      <td>
      <div class="container">
        <button class="button" onclick="showPopup()">Request</button>
        <div id="popup" class="popup">
            <span class="close" onclick="hidePopup()">&times;</span>
            <p>Your marriage certificate request has been sent!</p>
        </div>
    </div>
      </td>
      <td>
      <input type="file" id="file-upload" class="upload-btn" onchange="displayFileName()" accept=".pdf,.doc,.docx">
            <label for="file-upload" class="upload-label">Upload proof of payment</label>
            <div id="file-name" class="file-name"></div><button class="submit-btn" onclick="submitRequest()">Submit</button>
            <br>
            <button class="delete-btn" onclick="deleteFile()">Delete</button>
      </td>
    </tr>
  </tbody>
</table>

<script>
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
        }
        
        function hidePopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";
        }

        function displayFileName() {
            var fileInput = document.getElementById("file-upload");
            var fileNameContainer = document.getElementById("file-name");
            fileNameContainer.textContent = "Selected file: " + fileInput.files[0].name;
        }

        function submitRequest() {
            var fileName = document.getElementById("file-upload").files[0].name;
            alert("Your marriage certificate request with supporting document '" + fileName + "' has been submitted!");
            hidePopup();
        }

        function deleteFile() {
            var fileInput = document.getElementById("file-upload");
            fileInput.value = ""; // Clear the selected file
            var fileNameContainer = document.getElementById("file-name");
            fileNameContainer.textContent = ""; // Clear the displayed file name
        }
    </script>
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
