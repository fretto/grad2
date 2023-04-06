function view_password() {
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('input[name="password"]');
  
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
  
    // toggle the eye slash icon
    togglePassword.classList.toggle('bi-eye-slash');
    togglePassword.classList.toggle('bi-eye');
  }
  
  document.querySelector('#togglePassword').addEventListener('click', view_password)