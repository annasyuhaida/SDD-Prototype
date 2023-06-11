<!DOCTYPE html>
<html>
<head>
    <h3>Marriage Within Country Checklist</h3>
  <style>
    body {
      padding: 20px;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th {
      background-color: #004080;
      color: #fff;
      padding: 10px;
      text-align: left;
    }

    td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    .upload-button {
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .fill-form-button {
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .button {
      background-color: #ffd700; /* Updated color */
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: left;
    }

    .delete-button {
      background-color: red;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }

  .confirm-button {
  background-color: green;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
  </style>

<script>
    function redirectToForm() {
      location.href = "persetujuan_wali.php";
    }
    
    function handleFileUpload() {
      // Handle file upload logic here
      console.log("File selected:", document.querySelector('input[name=fileInput]').files[0]);
    }

    function confirmSubmission() {
     location.href = "ViewRegApprovalStatus.php";
}
  </script>

</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Compulsory List of Documents</th>
        <th>Task</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Slip Permohonan Online (Pendaftaran Perkahwinan) [P4-01-01]</td>
        <td><button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Borang 3A/3B (Kebenaran Berkahwin)/ Borang 4 (Persetujuan Dan Wakalah Wali) Asal</td>
        <td>
            <button class="fill-form-button" onclick="redirectToForm()">Fill Up Form</button>
            <button class="upload-button"><label>
              Upload File
              <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
            </label></button>
            <button class="delete-button">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Borang 5 (Catatan Akad Nikah) Asal</td>
        <td><button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Gambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Lelaki Bersongkok</td>
        <td><button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Gambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Perempuan Bertudung Gelap</td>
        <td><button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Salinan Kad Pengenalan Saksi-Saksi Perkahwinan</td>
        <td><button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Bayaran Pendaftaran RM 45.00</td>
        <td><button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      
    </tbody>
  </table>
  <button class="button" onclick="location.href='selectmarriage.php'">Back</button>
  <button class="confirm-button" onclick="confirmSubmission()">Confirm Submission</button>
</body>
</html>




