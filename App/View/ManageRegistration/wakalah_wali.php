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
    <h2>Wakalah Wali</h2>
  </div>

  <div class="dark-blue-box">
    <form id="wakalahForm">
      <label class="form-label">
        Saya
        <input type="text" name="name" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan/Pasport:
        <input type="text" name="icPassport" required>
      </label>
      <label class="form-label">
        adalah
        <input type="text" name="relationship" required>
      </label>
      <label class="form-label">
        kepada
        <input type="text" name="guardian" required>
      </label>
      <label class="form-label">
        dengan ini mewakilkan kepada
        <input type="text" name="wakil" required>
      </label>
      <label class="form-label">
        No. Kad Pengenalan/Pasport:
        <input type="text" name="wakilICPassport" required>
      </label>
      <label class="form-label">
        sebagai
        <input type="text" name="wakilRole" required>
      </label>
      <label class="form-label">
        untuk mengakad nikahkan
        <input type="text" name="bride" required>
        dengan
        <input type="text" name="groom" required>
        dengan mas kahwinnya RM
        <input type="text" name="dowry" required>
        *tunai/hutang.
      </label>
      <label class="form-label">
        Tarikh:
        <input type="text" name="date" required>
      </label>
      <label class="form-label">
        Saya dengan ini menerima Wakalah Wali di atas.
      </label>
      <label class="form-label">
        (Tandatangan wali)
        <input type="text" name="waliSignature" required>
      </label>
      <label class="form-label">
        (Tandatangan Penerima Wakalah)
        <input type="text" name="wakilSignature" required>
      </label>
    </form>
  </div>

  <button class="button" onclick="saveData()">Save</button>
  <button class="button" onclick="editData()">Edit</button>
  <button class="button" onclick="location.href='persetujuan_wali.php'">Back</button>
  <button class="button" onclick="location.href='saksi_wakalah_wali.php'">Continue</button>
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
