<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" /> 
<link rel="stylesheet"  href="../css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
 </head>
 
<body>

<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="../pages/register.php" method="post">
      <h1>Create Account</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      
      <input type="text"  name ="name"  placeholder="Name" />
      <input type="email"  name ="email"  placeholder="Email" />
      <input type="password" name ="password"  placeholder="Password" />
      <button>Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="../pages/login.php" method="post" >
      <h1>Sign in</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>or use your account</span>
      <input type="email" name ="email" placeholder="Email" />
      <input type="password" name ="password" placeholder="Password" />
      <a href="#">Forgot your password?</a>
      <button>Log In</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello!</h1>
        <p>Enter your personal details and start journey with us</p>
        <button class="ghost" id="signUp">Register</button>
      </div>
    </div>
  </div>
</div>
<script src="../script/script.js"></script>
</body>
</html>
