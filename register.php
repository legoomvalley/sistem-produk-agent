<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style_r.css">
</head>
<body>

<form action="display.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h2>Agent Register Form</h2>
    <p>Please fill in this form to create an account.</p>
    <form class="form-inline"></form>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Your Name" name="name" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="phone"><b>No Phone</b></label>
    <input type="text" placeholder="011-1111xxxx" name="phone" required>

    <label for="gender">Gender</label>
    <select name="gender" id="gender">
	    <option value="">--- Choose a gender ---</option>
	    <option value="male">Male</option>
	    <option value="female">Female</option>
    </select>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>