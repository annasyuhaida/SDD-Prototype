<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  .image-background {
    background-image: url('path/to/your/image.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 300px; /* Adjust the height as needed */
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

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-blue w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item "></h3>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Profile</a>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Marriage Preparation Course</a>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Marriage Request</a>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Marriage Registration</a>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Marriage Certificate and Card</a>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Marriage Consultation</a>
  <a href="#" class="w3-bar-item w3-button w3-border-bottom">Marriage Special Incentive</a>
</div>

<!-- Page Content -->
<div style="margin-left:41%">
  <div class="image-background">
    <!-- Content within the div with image background -->
    <h1 class="w3-container w3-text-white">My Page</h1>
  </div>

  <div class="box">
        MARRIAGE REGISTRATION STATUS OF APPROVAL<br><br><span class="regstatus">NEWLY SUBMITTED</span>
    </div>
</div>
      
</body>
</html>

