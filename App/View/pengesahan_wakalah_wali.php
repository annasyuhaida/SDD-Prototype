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
    <h2>Pengesahan Wakalah Wali</h2>
  </div>

  <div class="dark-blue-box">
    <form id="pengesahanWakalahForm">
      <label class="form-label">
        Saya 
        <input type="text" name="name" required>
        mengesahkan bahawa Wakalah Wali di atas adalah dibuat di hadapan saya di 
        <input type="text" name="location" required>
        dan ia mengikut kehendak Hukum Syarak. Tarikh: 
        <input type="text" name="date" required>
      </label>
      <label class="form-label">
        (Tandatangan Pendaftar dan Cap Rasmi)
        <input type="text" name="signature" required>
      </label>
    </form>
  </div>

  <button class="button" onclick="saveData()">Save</button>
  <button class="button" onclick="editData()">Edit</button>
  <button class="button" onclick="location.href='saksi_wakalah_wali.php'">Back</button>
  <button class="button" onclick="location.href='marriage_within_country.php'">Continue</button>
  <button class="button" onclick="printForm('agreementForm')">Print</button>

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

    function printForm() {
      window.print('agreementForm');
    }
  </script>

</body>
</html>
