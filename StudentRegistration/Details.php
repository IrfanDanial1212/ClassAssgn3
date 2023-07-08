
<!DOCTYPE html>
<html>
<head>
	<title>Details Form</title>
	<link rel="stylesheet" type="text/css" href="StyleDetails.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form id="studentForm" method=post action= StudentDatabase.php onsubmit="return validateForm()">
					<label> Student Form</label>
					<input type="text" id="name" name="name" placeholder="User name" required="">
					<input type="text" id="matricNumber" pattern="[0-9]{7}" title="Enter 7 digit of your Matric Number" name="matricNumber" placeholder="Matric Number" required="">
					<input type="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title=" Please include '@' and your email" name="email" placeholder="Email" required="">
					<input type="text" id="" name="currentAddress" placeholder="Current Address" required="">
					<input type="text" id="" name="homeAddress" placeholder="Home Address" required="">
					<input type="tel" id="mobilePhoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Please include format: 123-456-7890" name="mobilePhoneNumber" placeholder="Mobile Phone Number" required="">
                    <input type="tel" id="homeNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Please include format: 123-456-7890" name="homeNumber" placeholder="Home/Emergency Number" required="">
                    <button>Submit</button>
				</form>
			</div>
	</div>

	<script src="Script.js"></script>
</body>
</html>