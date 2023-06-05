<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Profile</title>

    <style>
		/* Import Google font - Poppins */
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body
		{
			background-image: url("bgheader.png");
			background-size: cover;
			background-repeat: no-repeat;
		}

		ul 
		{
			list-style-type: none;
			margin: 0;
			padding: 60px;
			overflow: hidden;
			background-color: transparent;
			margin-left: 50px;
		}

		li 
		{
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}

		.box-container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 700px;
			background: #C7D1D3;
			border-radius: 20px;
			box-shadow: 0 5px 10px rgba(0,0,0,0.3);
			height: 550px;
			margin-top: 50px;
		}

		.box-container header{
			font-size: 30px;
			font-weight: 500;
			text-align: center;
			color: black;
			margin-top: 20px;
		}

		.box-container input.icnumber{
			height: 30px;
			width: 57%;
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

		.box-container input.name{
			height: 30px;
			width: 57%;
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

		.box-container input.phoneno{
			height: 30px;
			width: 57%;
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

		.box-container input.email{
			height: 30px;
			width: 57%;
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

		.box-container form label.icnumber{
			text-align: center;
			line-height: 50%;
			font-size: 17px;
			margin-bottom: 10px;
			margin-top: 50px;
			color: black;
			display: inline-block;
			vertical-align: middle;
			text-align: right;
			margin-left: 30px;
		}

		.box-container form label.name{
			text-align: center;
			line-height: 50%;
			font-size: 17px;
			margin-bottom: 10px;
			margin-top: 50px;
			color: black;
			display: inline-block;
			vertical-align: middle;
			text-align: right;
			margin-left: 30px;
		}

		.box-container form label.phoneno{
			text-align: center;
			line-height: 50%;
			font-size: 17px;
			margin-bottom: 10px;
			margin-top: 50px;
			color: black;
			display: inline-block;
			vertical-align: middle;
			text-align: right;
			margin-left: 30px;
		}

		.box-container form label.email{
			text-align: center;
			line-height: 50%;
			font-size: 17px;
			margin-bottom: 10px;
			margin-top: 50px;
			color: black;
			display: inline-block;
			vertical-align: middle;
			text-align: right;
			margin-left: 30px;
		}

		.box-container form input.button{
			color: #fff;
			background: #346089;
			font-size: 1.0rem;
			font-weight: 500;
			letter-spacing: 1px;
			cursor: pointer;
			transition: 0.4s;
			height: 40px;
			width: 27%;
			position: absolute;
			margin-top: 30px;
			margin-bottom: 30px;
			margin-right: 40px;
			bottom: 0;
			right: 0;
			border-radius: 10px;
		}

		footer{
			color: red;
			text-align: right;
			margin-top: 550px;
			margin-right: 10px;
			color: white;
			}
		
    </style>
</head>
<body>
    <nav class="navbar background">
        <!-- we have used list tag that is ul 
             to list the items-->
        <ul class="nav-list">
            <li><a href="#home">HOME</a></li>
            <li><a href="#logout">LOGOUT</a></li>
        </ul>
    </nav>
	<div class="box-container">
		<!-- Content goes here -->
		<header>PROFILE</header>
		<form name="profile" action="#">
			<label class="icnumber">IDENTITY CARD NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp: </label>
			<input type="text" class="icnumber"><br>

			<label class="name">FULL NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
			<input type="text" class="name" ><br>

			<label class="name">GENDER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
			<input type="text" class="name" ><br>

			<label class="phoneno">PHONE NUMBER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
			<input type="number" class="phoneno" ><br>

			<label class="email">EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: </label>
			<input type="email" class="email" ><br>

			<input type="button" class="button" value="EDIT PROFILE">
		</form>
	</div>
	<footer>
		<p>JAIP, ONLINE  MARRIAGE  REGISTRATION  MANAGEMENT  SYSTEM</p>
	</footer>
</body>
</html>