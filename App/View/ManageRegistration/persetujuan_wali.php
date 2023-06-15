<!-- php

class persetujuan_wali {
    public function render() {
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <style>
    body {
      padding: 20px;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .heading {
      background-color: #004080;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
    }

    .dark-blue-box {
      border: 2px solid #004080;
      background-color: #004080;
      color: #fff;
      padding: 20px;
      width: 400px;
      margin: 0 auto;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      margin-bottom: 10px;
    }

    .button {
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="heading">
    <h2>Persetujuan Wali</h2>
  </div>

  <div class="dark-blue-box">
    <form action="index.php?action=createDoc" method="POST" id="agreementForm">
      <label class="form-label">
        Saya
        <input type="text" name="waliname" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan/Pasport:
        <input type="text" name="waliIc" required>
      </label>
      <label class="form-label">
        adalah
        <input type="text" name="relationship" required>
      </label>
      <label class="form-label">
        kepada
        <input type="text" name="bridename" required>
      </label>
      <label class="form-label">
        dengan ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan di antara
        <input type="text" name="bridename" required>
        dengan
        <input type="text" name="groomname" required>
        dengan mas kahwinnya RM
        <input type="number" name="dowry" required>
        *tunai/hutang. Saya akan mengakad nikahkan sendiri perkahwinan ini. Tarikh
        <input type="text" name="date" required>
        .
      </label>
    </form>
  </div>

  
  <button class="button" onclick="saveData()">Save</button>
  <button class="button" onclick="editData()">Edit</button>
  <button class="button" onclick="location.href='marriage_within_country.php'">Back</button>
  <button class="button" onclick="location.href='wakalah_wali.php'">Continue</button>
  <script>
    function saveData() {
      var form = document.getElementById("agreementForm");
      var formData = new FormData(form);
      
      console.log("Form data:", formData);
      alert("Data saved successfully!");
    }

    function editData() {
      var form = document.getElementById("agreementForm");
      // Enable form inputs for editing
      var inputs = form.querySelectorAll("input");
      inputs.forEach(function(input) {
        input.removeAttribute("readonly");
      });
    }
  </script>
</body>
</html>

-->

<?php

class persetujuan_wali {
    public function render() {
 
?>
<!DOCTYPE html>
<html lang="en">

</html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <style>
    body {
      padding: 20px;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .heading {
      background-color: #004080;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
    }

    .dark-blue-box {
      border: 2px solid #004080;
      background-color: #004080;
      color: #fff;
      padding: 20px;
      width: 400px;
      margin: 0 auto;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      margin-bottom: 10px;
    }

    .button {
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="heading">
    <h2>Persetujuan Wali</h2>
  </div>

  <div class="dark-blue-box">
  <form action="index.php?action=createDoc" method="POST">
  <label class="form-label">
        Saya
        <input type="text" name="waliname" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan/Pasport:
        <input type="text" name="waliIc" required>
      </label>
      <label class="form-label">
        adalah
        <input type="text" name="relationship" required>
      </label>
      <label class="form-label">
        kepada
        <input type="text" name="bridename" required>
      </label>
      <label class="form-label">
        dengan ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan di antara
        <input type="text" name="bridename" required>
        dengan
        <input type="text" name="groomname" required>
        dengan mas kahwinnya RM
        <input type="number" name="dowry" required>
        *tunai/hutang. Saya akan mengakad nikahkan sendiri perkahwinan ini. Tarikh
        <input type="text" name="date" required>
        .
      </label>

                            
                            <input type="button" class="save" value="save">
                        </form>
                    </div>
                </div>



            </body>

            </html>

    <?php
    }
}
    ?>