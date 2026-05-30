<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Started Now</title>
</head>

<body>
  <main class="auth-layout">
    <section class="auth-form-section">
      <header class="auth-content">
        <h1>Get Started Now</h1>
      </header>
      <form action="../process/login.php" method="POST">
        <div class="form-grup">
          <label>Username or Emal</label>
          <input type="email"
            name="email"
            placeholder="Enter username or password"
            required>
          <label>Password</label>
          <input type="password"
            name="password"
            placeholder="Enter password"
            required>
        </div>
        <div class="auth-options">
          <input type="checkbox" name="terms">
          <label>
            <a href="#">Terms & policy</a>
          </label>
          <label>
            <a href="#">Forgot Password</a>
          </label>
        </div>

        <button type="submit">Sign Up</button>
      </form>
      <div class="auth-footer">
        <p>Don't have an account? <a href="#">Sign Up</a></p>
      </div>
    </section>

    <section>
      <img src="../assets/images/auth-banner.png"
        alt="auth banner">
    </section>
  </main>
</body>

</html>