<!DOCTYPE html>
<html>
<head>
    <h3>Voluntary Marriage Checklist</h3>
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

    .button {
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: left;
    }

    .upload-button {
      background-color: #ffd700;
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
    function confirmSubmission() {
  // Handle submission confirmation logic here
  alert("Submission confirmed!");
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
        <td>
          <button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Salinan Kad Pengenalan Suami</td>
        <td>
          <button class="upload-button"><label>
            Upload File
            <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
          </label></button>
          <button class="delete-button">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Salinan Kad Pengenalan Isteri</td>
        <td>
          <button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Pengesahan Memeluk Agama Islam ( Bagi Pasangan Yang Memeluk Agama Islam)</td>
        <td>
          <button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Surat Perakuan Nikah ( Dikeluarkan Oleh Jabatan Pendaftaran Negara Bagi Pasangan Yang Memeluk Agama Islam)</td>
        <td>
          <button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Surat Akuan Pemastautin</td>
        <td>
          <button class="upload-button"><label>
          Upload File
          <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
        </label></button>
        <button class="delete-button">Delete</button>
      </td>
      </tr>
      <tr>
        <td>Gambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Lelaki Bersongkok</td>
        <td>
          <button class="upload-button"><label>
            Upload File
            <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
          </label></button>
          <button class="delete-button">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Gambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Perempuan Bertudung Gelap</td>
        <td>
          <button class="upload-button"><label>
            Upload File
            <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
          </label></button>
          <button class="delete-button">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Bayaran Kad Perakuan Nikah RM 30.00 Sepasang</td>
        <td>
          <button class="upload-button"><label>
            Upload File
            <input type="file" name="fileInput" accept=".pdf, .doc, .docx" style="display: none;" onchange="handleFileUpload()">
          </label></button>
          <button class="delete-button">Delete</button>
        </td>
      </tr>
      <tr>
        <td>Bayaran Kad Perakuan Nikah RM 15.00 Sepasang</td>
        <td>
          <button class="upload-button"><label>
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