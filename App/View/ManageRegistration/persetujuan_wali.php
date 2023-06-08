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
    <form id="agreementForm">
      <label class="form-label">
        Saya
        <input type="text" name="wali_name" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan/Pasport:
        <input type="text" name="wali_ic" required>
      </label>
      <label class="form-label">
        adalah
        <input type="text" name="relationship" required>
      </label>
      <label class="form-label">
        kepada
        <input type="text" name="bride" required>
      </label>
      <label class="form-label">
        dengan ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan di antara
        <input type="text" name="bride" required>
        dengan
        <input type="text" name="groom" required>
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
