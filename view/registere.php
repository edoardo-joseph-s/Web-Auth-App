<?php
session_start();
$registerErrors = $_SESSION['register_errors'] ?? [];
$registerOld = $_SESSION['register_old'] ?? [];
$registerSuccess = $_SESSION['register_success'] ?? '';
unset($_SESSION['register_errors'], $_SESSION['register_old'], $_SESSION['register_success']);
$escape = static function ($value) {
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>
  <main class="auth-layout">
    <section class="auth-form-section">
      <div class="auth-content">
        <header class="auth-header">
          <h1>Create account</h1>
        </header>
        <form action="../process/register.php" method="POST">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div class="form-grup">
              <label>Full Name</label>
              <input type="text"
                name="fullname"
                placeholder="Enter your full name"
                value="<?php echo $escape($registerOld['fullname'] ?? ''); ?>"
                required>
            </div>
            <div class="form-grup">
              <label>Username</label>
              <input type="text"
                name="username"
                placeholder="Choose a username"
                value="<?php echo $escape($registerOld['username'] ?? ''); ?>"
                required>
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div class="form-grup">
              <label>Email</label>
              <input type="email"
                name="email"
                placeholder="Enter your email"
                value="<?php echo $escape($registerOld['email'] ?? ''); ?>"
                required>
            </div>
            <div class="form-grup">
              <label>Date of Birth</label>
              <input type="date"
                name="dob"
                value="<?php echo $escape($registerOld['dob'] ?? ''); ?>"
                required>
            </div>
          </div>

          <div class="form-grup">
            <label>Password</label>
            <div class="password-input-wrapper">
              <input type="password"
                id="password"
                name="password"
                placeholder="Create a strong password"
                required>
              <button type="button" class="toggle-password-btn">
                <svg class="eye-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </button>
            </div>
          </div>

          <div class="form-grup">
            <label>Confirm Password</label>
            <div class="password-input-wrapper">
              <input type="password"
                id="confirm-password"
                name="confirm_password"
                placeholder="Confirm your password"
                required>
              <button type="button" class="toggle-password-btn">
                <svg class="eye-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </button>
            </div>
          </div>

          <div class="auth-options" style="margin-bottom: 24px; margin-top: 24px;">
            <label class="terms-option">
              <input type="checkbox" name="terms" required <?php echo !empty($registerOld['terms']) ? 'checked' : ''; ?>>
              <span>I agree to the <a href="#">terms & policy</a></span>
            </label>
          </div>

          <button class="submit-btn" type="submit">Sign In</button>
        </form>

        <div class="auth-divider">
          <span>OR</span>
        </div>

        <div class="auth-footer">
          <p>Already have an account? <a href="login.php">Log In</a></p>
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
  <?php if (!empty($registerErrors)) : ?>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        AuthModule.showModal('Pendaftaran Gagal', '<?php echo $escape(implode(' ', $registerErrors)); ?>', 'error');
      });
    </script>
  <?php endif; ?>
</body>

</html>