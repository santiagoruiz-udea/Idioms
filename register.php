<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name: </label>
  	  <input type="text" name="name">
  	</div>
  	<div class="input-group">
  	  <label>Last name: </label>
  	  <input type="text" name="lastname">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <label>Insert your region: </label>
  	  <input type="text" name="region">
  	</div>
  	<div class="input-group">
  	  <label>Insert your native language: </label>
      <select id="natlang" name="natlang">
        <option value="esp">Spanish</option>
        <option value="eng">English</option>
        <option value="ger">German</option>
        <option value="ita">Italian</option>
        <option value="por">Portuguese</option>
        <option value="fre">French</option>
        <option value="chi">Chinese</option>
        <option value="jap">Japanese</option>
        <option value="ara">Arabic</option>
      </select>
  	</div>
  	<div class="input-group">
  	  <label>Insert your target language: </label>
      <select id="targlang" name="targlang">
        <option value="esp">Spanish</option>
        <option value="eng">English</option>
        <option value="ger">German</option>
        <option value="ita">Italian</option>
        <option value="por">Portuguese</option>
        <option value="fre">French</option>
        <option value="chi">Chinese</option>
        <option value="jap">Japanese</option>
        <option value="ara">Arabic</option>
      </select>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>