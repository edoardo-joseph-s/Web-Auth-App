<?php
session_start();
$registerSuccess = $_SESSION['register_success'] ?? '';
$loginError = $_SESSION['login_error'] ?? '';
$loginSuccess = $_SESSION['login_success'] ?? '';
$loginOld = $_SESSION['login_old'] ?? [];
unset($_SESSION['register_success'], $_SESSION['login_error'], $_SESSION['login_success'], $_SESSION['login_old']);
$escape = static function ($value) {
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Started Now</title>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <main class="auth-layout">
    <section class="auth-form-section">
      <div class="auth-content">
        <header class="auth-header">
          <h1>Get Started Now</h1>
        </header>
        <form action="../process/login.php" method="POST">
          <div class="form-grup">
             <label>Username or Email</label>
             <input type="email"
               name="email"
               placeholder="Enter your username or email"
               value="<?php echo $escape($loginOld['email'] ?? ''); ?>"
               required>
           </div>
           <div class="form-grup">
             <label for="password">Password</label>
             <div class="password-input-wrapper">
               <input type="password"
                 id="password"
                 name="password"
                 placeholder="Enter your password"
                 required>
               <button type="button" class="toggle-password-btn">
                 <svg class="eye-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                   <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                   <circle cx="12" cy="12" r="3"></circle>
                 </svg>
               </button>
             </div>
           </div>

           <div class="auth-options">
             <label class="terms-option">
               <input type="checkbox" name="remember">
               <span>Remember me</span>
             </label>
             <a href="#" class="forgot-password">Forgot password?</a>
           </div>

           <button class="submit-btn" type="submit">Log In</button>
        </form>

        <div class="auth-divider">
          <span>OR</span>
        </div>

        <div class="auth-footer">
          <p>Don't have an account? <a href="registere.php">Sign Up</a></p>
        </div>
      </div>
    </section>

    <section class="auth-banner">
      <img src="../assets/images/auth-banner.png" alt="auth banner">
    </section>
  </main>

  <div class="modal-overlay">
    <div class="modal">
      <div class="modal-icon">
        <svg></svg>
      </div>
      <h2 class="modal-title"></h2>
      <p class="modal-message"></p>
      <button class="modal-button">OK</button>
    </div>
  </div>

  <script src="../assets/js/auth.js"></script>
  <?php if ($registerSuccess !== '') : ?>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        AuthModule.showModal('Pendaftaran Berhasil', '<?php echo $escape($registerSuccess); ?>', 'success');
      });
    </script>
  <?php endif; ?>
  <?php if ($loginSuccess !== '') : ?>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        AuthModule.showModal('Login Berhasil', '<?php echo $escape($loginSuccess); ?>', 'success');
        setTimeout(() => {
          window.location.href = '../dashboard.php';
        }, 2000);
      });
    </script>
  <?php endif; ?>
  <?php if ($loginError !== '') : ?>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        AuthModule.showModal('Login Gagal', '<?php echo $escape($loginError); ?>', 'error');
      });
    </script>
  <?php endif; ?>
</body>

</html>