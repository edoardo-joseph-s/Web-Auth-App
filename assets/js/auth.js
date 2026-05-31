const SVG_SUCCESS = '<svg fill="currentColor" viewBox="0 0 24 24" style="color: #067647;"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"></path></svg>';
const SVG_ERROR = '<svg fill="currentColor" viewBox="0 0 24 24" style="color: #b42318;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>';

const AuthModule = (() => {
  const togglePassword = () => {
    const input = document.getElementById('password');
    input && (input.type = input.type === 'password' ? 'text' : 'password');
  };

  const showModal = (title, message, type = 'success') => {
    const overlay = document.querySelector('.modal-overlay');
    if (!overlay) return;
    
    const titleEl = document.querySelector('.modal-title');
    const messageEl = document.querySelector('.modal-message');
    const icon = document.querySelector('.modal-icon');
    
    titleEl.textContent = title;
    titleEl.className = `modal-title ${type}`;
    messageEl.textContent = message;
    icon.innerHTML = type === 'success' ? SVG_SUCCESS : SVG_ERROR;
    icon.className = `modal-icon ${type}`;
    overlay.classList.add('active');
  };

  const closeModal = () => document.querySelector('.modal-overlay')?.classList.remove('active');

  const init = () => {
    document.querySelectorAll('.toggle-password-btn').forEach(btn => btn.addEventListener('click', togglePassword));
    document.querySelector('.modal-button')?.addEventListener('click', closeModal);
    const overlay = document.querySelector('.modal-overlay');
    overlay?.addEventListener('click', (e) => e.target === overlay && closeModal());
  };

  return { init, togglePassword, showModal, closeModal };
})();

document.addEventListener('DOMContentLoaded', AuthModule.init);
