<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f2f2f2;
    }

    .container {
      border: 2px solid #004080;
      background-color: #004080;
      color: #fff;
      padding: 20px;
      width: 400px;
      text-align: center;
      box-sizing: border-box;
    }

    .option {
      display: block;
      margin: 10px auto;
    }

    .button {
      background-color: #ffd700;
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      margin-top: 20px;
    }
  </style>
  <script>
    function continueClicked() {
      var marriageType = document.querySelector('input[name="marriageType"]:checked');
      if (marriageType) {
        if (marriageType.value === "withinCountry") {
          location.href = "marriage_within_country.html";
        } else if (marriageType.value === "voluntary") {
          location.href = "voluntary_marriage.html";
        }
      } else {
        alert("Please select type of marriage");
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>Select Type of Marriage</h2>
    <label class="option">
      <input type="radio" name="marriageType" value="withinCountry"> Marriage Within Country
    </label>
    <label class="option">
      <input type="radio" name="marriageType" value="voluntary"> Voluntary Marriage
    </label>
    <button class="button" onclick="continueClicked()">Continue</button>
  </div>
</body>
</html>


