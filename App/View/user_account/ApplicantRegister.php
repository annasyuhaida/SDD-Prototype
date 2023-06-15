<?php

class ApplicantRegister
{
    public function render()
    {
        // Contents of ApplicantRegister.php
?>

        <html>

        <head>
            <title>Register</title>
        </head>

        <body>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Register</title>

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

                    .container .registration {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 800px;
                        height: 700px;
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

                    .form input.gender {
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

                    .form input.password {
                        height: 40px;
                        width: 65%;
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
                        width: 65%;
                        padding: 0 15px;
                        font-size: 17px;
                        margin-bottom: 1.0rem;
                        border: 1px solid #ddd;
                        border-radius: 0px;
                        outline: none;
                        margin: auto;
                        background-color: #959799;
                        display: inline-block;
                        vertical-align: middle;
                    }

                    .form input.buttonrgt {
                        color: #fff;
                        background: #346089;
                        font-size: 1.0rem;
                        font-weight: 500;
                        letter-spacing: 1px;
                        margin-top: 1.0rem;
                        cursor: pointer;
                        transition: 0.4s;
                        height: 40px;
                        width: 30%;
                        margin-right: 40px;
                        border-radius: 20px;
                        bottom: 0;
                        right: 0;
                        position: absolute;
                        margin-bottom: 30px;
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

                    .form button.buttonrgt {
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

                    .form button.buttonrgt:hover {
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

                    .form label.gender {

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

                    .form label.password {

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

                    .registration form {
                        margin-right: 10px;
                    }

                    .buttonrgt {
                        color: #fff;
                        background: #346089;
                        font-size: 1.0rem;
                        width: 27%;
                        position: absolute;
                        margin-top: 30px;
                        margin-bottom: 30px;
                        font-weight: 500;
                        letter-spacing: 1px;
                        cursor: pointer;
                        transition: 0.4s;
                        height: 40px;
                        margin-right: 40px;
                        border-radius: 20px;
                        bottom: 0;
                        right: 0;
                    }

                    p{
                        margin-top: 65px;
                    }
                </style>
            </head>

            <body>
                <div class="container">
                    <div class="registration form">
                        <header>REGISTRATION FORM</header>
                        <form action="index.php?action=createAccount" method="POST">
                            <label class="icnumber">IDENTITY CARD NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</label>
                            <input type="text" class="icnumber" name="icnumber" id="icnumber">

                            <label class="name">FULL NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                            <input type="text" class="name" name="name" id="name">

                            <label class="gender">GENDER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                            <input type="text" class="gender" name="gender" id="gender">

                            <label class="phoneno">PHONE NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                            <input type="text" class="phoneno" name="phoneno" id="phoneno">

                            <label class="email">EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                            <input type="email" class="email" name="email" id="email">

                            <label class="password">NEW PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
                            <input type="password" class="password" name="password" id="password">

                            <label class="passconfirm">PASSWORD CONFIRMATION : </label>
                            <input type="password" class="passconfirm" name="passconfirm" id="passconfirm"><br>

                            <p>Already have an account?<a href="index.php?action=createProducts"> Login here.</a></p>
                            <input type="submit" class="buttonrgt" value="SUBMIT REGISTRATION">
                        </form>
                    </div>
                </div>



            </body>

            </html>

    <?php
    }
}
    ?>