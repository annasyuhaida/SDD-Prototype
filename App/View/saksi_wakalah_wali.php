<!DOCTYPE html>
<html>
<head>
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
      width: 600px;
      margin: 0 auto;
      box-sizing: border-box;
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="heading">
    <h2>Saksi Wakalah Wali</h2>
  </div>

  <div class="dark-blue-box">
    <form id="saksiWakalahForm">
      <label class="form-label">
        Nama: 
        <input type="text" name="saksi1Name" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan: 
        <input type="text" name="saksi1IC" required>
      </label>
      <label class="form-label">
        Alamat: 
        <input type="text" name="saksi1Address" required>
      </label>
      <label class="form-label">
        Tarikh: 
        <input type="text" name="saksi1Date" required>
      </label>
      <label class="form-label">
        (Tandatangan Saksi(1))
        <input type="text" name="saksi1Signature" required>
      </label>

      <label class="form-label">
        Nama: 
        <input type="text" name="saksi2Name" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan: 
        <input type="text" name="saksi2IC" required>
      </label>
      <label class="form-label">
        Alamat: 
        <input type="text" name="saksi2Address" required>
      </label>
      <label class="form-label">
        Tarikh: 
        <input type="text" name="saksi2Date" required>
      </label>
      <label class="form-label">
        (Tandatangan Saksi(2))
        <input type="text" name="saksi2Signature" required>
      </label>
    </form>
  </div>

  <button class="button" onclick="saveData()">Save</button>
  <button class="button" onclick="editData()">Edit</button>
  <button class="button" onclick="location.href='wakalah_wali.php'">Back</button>
  <button class="button" onclick="location.href='pengesahan_wakalah_wali.php'">Continue</button>
  <script>
    function saveData() {
      var form = document.getElementById("agreementForm");
      var formData = new FormData(form);
      // Process the form data here (e.g., save it to a database)
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
