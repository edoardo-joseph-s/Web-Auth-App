<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Started Now</title>

  <!--link-->
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <main class="auth-layout">
    <section class="auth-form-section">
      <header class="auth-content">
        <h1>Get Started Now</h1>
      </header>
      <!--form login-->
      <form action="../process/login.php" method="POST">
        <div class="form-grup">
          <label>Username or Email</label>
          <input type="email"
            name="email"
            placeholder="Enter username or email"
            required>
        </div>
        <div class="form-grup">
          <label for="password">Password</label>
          <input type="password"
            name="password"
            placeholder="Enter password"
            required>
        </div>
        <!--auth options-->
        <div class="auth-options">
          <!--terms-->
          <label class="terms-option">
            <input type="checkbox" name"terms">
            I agree to the
            <a href="#">terms & polcy</a>
          </label>
          <!--forgot passwors-->
          <a href="#" class="forgot-password">
            Forgot Pssword
          </a>
        </div>

        <button class="submit-btn" type="submit">Sign Up</button>
      </form>
      <!--create account-->
      <div class="auth-footer">
        <p>Don't have an account? <a href="#">Sign Up</a></p>
      </div>
    </section>

    <section class="auth-banner">
      <img src="../assets/images/auth-banner.png"
        alt="auth banner">
    </section>
  </main>
</body>

</html>