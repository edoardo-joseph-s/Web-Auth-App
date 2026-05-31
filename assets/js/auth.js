/**
 * Authentication Module
 * Handles password visibility toggle and auth form interactions
 */

const AuthModule = (() => {
  /**
   * Toggle password visibility
   */
  const togglePassword = () => {
    const input = document.getElementById('password');
    const btn = document.querySelector('.toggle-password-btn');
    
    if (input.type === 'password') {
      input.type = 'text';
      btn.classList.add('visible');
    } else {
      input.type = 'password';
      btn.classList.remove('visible');
    }
  };

  /**
   * Initialize auth module
   */
  const init = () => {
    const toggleBtn = document.querySelector('.toggle-password-btn');
    if (toggleBtn) {
      toggleBtn.addEventListener('click', togglePassword);
    }
  };

  return {
    init,
    togglePassword
  };
})();

// Initialize module when DOM is ready
document.addEventListener('DOMContentLoaded', AuthModule.init);
