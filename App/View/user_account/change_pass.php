<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <style>
        /* Import Google font - Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            width: 100%;
            background-image: url("./background.png");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: #D4D3D7;
            border-radius: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }

        .container .change {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 500px;
            background: #D4D3D7;
            border-radius: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }

        .container .form {
            padding: 2rem;
        }

        .form header {
            font-size: 30px;
            font-weight: 500;
            text-align: center;
            color: #346089;
            border-bottom: 3px solid #346089;
        }

        .form input {
            height: 40px;
            width: 50%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
            margin: auto;
            display: block;
            background-color: #959799;
        }

        .form input.icnumber {
            height: 40px;
            width: 45%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
            margin-top: 40px;
        }

        .form input.name {
            height: 40px;
            width: 65%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
            margin-top: 20px;
        }

        .form input.phoneno {
            height: 40px;
            width: 65%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
            margin-top: 20px;
        }

        .form input.email {
            height: 40px;
            width: 65%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
            margin-top: 20px;
        }

        .form input.passcurrent {
            height: 40px;
            width: 45%;
            padding: 0 15px;
            font-size: 17px;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
            margin-top: 20px;
        }

        .form input.passnew {
            height: 40px;
            width: 45%;
            padding: 0 15px;
            font-size: 17px;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
            margin-top: 20px;
        }

        .form input.passconfirm {
            height: 40px;
            width: 45%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 0px;
            outline: none;
            margin: auto;
            background-color: #959799;
            display: inline-block;
            vertical-align: middle;
        }

        .form input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        }

        .form a {
            font-size: 16px;
            color: #009579;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .form input.button {
            color: #fff;
            background: #346089;
            font-size: 1.0rem;
            font-weight: 500;
            letter-spacing: 1px;
            margin-top: 1.7rem;
            cursor: pointer;
            transition: 0.4s;
            height: 40px;
            width: 30%;
        }

        .form input.button:hover {
            background: #006653;
        }

        .form select {
            height: 40px;
            width: 50%;
            text-align: center;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
            margin: auto;
            display: block;
            text-align: center;
            color: black;
            background-color: #959799;

        }

        .form label {
            display: block;
            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 30px;
            color: #346089;
        }

        .form label.icnumber {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 50px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .form label.name {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 30px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .form label.phoneno {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 30px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .form label.email {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 30px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .form label.currentpass {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 30px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .form label.passnew {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 10px;
            margin-top: 30px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .form label.passconfirm {

            text-align: center;
            line-height: 50%;
            font-size: 17px;
            margin-bottom: 70px;
            margin-top: 40px;
            color: black;
            display: inline-block;
            vertical-align: middle;
            text-align: right;
        }

        .signup {
            font-size: 17px;
            text-align: center;
        }

        .signup label {
            color: #009579;
            cursor: pointer;
        }

        .signup label:hover {
            text-decoration: underline;
        }

        .change pass form {
            margin-right: 10px;
        }

        .form input.buttonrgt {
            color: #fff;
            background: #346089;
            font-size: 1.0rem;
            width: 27%;
            position: absolute;
            margin-top: 30px;
            margin-bottom: 100px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.4s;
            height: 40px;
            right:0;
            margin-right: 30px;
        }

        
        a.button {
            color: #fff;
        background: #346089;
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 25px;

    }

    a.buttonsubmit {
        color: #fff;
        background: #346089;
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left: 290px;
  border-radius: 25px;

    }
    </style>
</head>

<body>
    <div class="container">
        <div class="change pass form">
        <header>CHANGE PASSWORD</header>
            <form name="change" action="#">

                <label class="icnumber">IDENTITY CARD NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</label>
                <input type="text" class="icnumber"><br>

                <label class="email">CURRENT PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                <input type="password" class="passcurrent"><br>

                <label class="passnew">NEW PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                <input type="password" class="passnew"><br>

                <label class="passconfirm">PASSWORD CONFIRMATION : </label>
                <input type="password" class="passconfirm"><br>


                <a href="../user_account/userLogin.php" class="button">BACK</a>
                <a href="../user_account/userLogin.php" class="buttonsubmit">SUBMIT</a>
            </form>
        </div>
    </div>
</body>

</html>