<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - sign-up / sign-in form</title>
  <link rel="stylesheet" href="<?= BASE_URL . "assets/auth/style.css"; ?>">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">
    <div class="container">
      <div class="sign-up-container">
        <form method="post">
          <h1>Create Account</h1>
          <div class="social-links">
            <div>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <div>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
            <div>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
          <span>or use your email for registration</span>
          <input type="text" name="name" placeholder="Name">

          <input type="email" name="email" placeholder="Email">
          <input type="password" name="pass" placeholder="Password">
   
          <input type="submit" class="form_btn" name="submit" value="sign-up">
        </form>
      </div>
      <div class="sign-in-container">
        <form method="post">
          <h1>Sign In</h1>
          <div class="social-links">
            <div>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <div>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
            <div>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
          <span>or use your account</span>
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="pass" placeholder="Password">
          <input type="submit" class="form_btn" name="submit" value="sign-in">
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay-left">
          <h1>Welcome Back</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button id="signIn" class="overlay_btn">Sign In</button>
        </div>
        <div class="overlay-right">
          <h1>Hello, Friend</h1>
          <p>Enter your personal details and start journey with us</p>
          <button id="signUp" class="overlay_btn">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src="<?= BASE_URL . "assets/auth/script.js"; ?>"></script>

</body>

</html>