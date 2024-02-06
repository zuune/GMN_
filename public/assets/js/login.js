const eyeButton = document.querySelector('.eye');
const passwordInput = document.querySelector('#password');

eyeButton.addEventListener('click', () => {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    eyeButton.innerHTML = feather.icons['eye'].toSvg();
  } else {
    passwordInput.type = 'password';
    eyeButton.innerHTML = feather.icons['eye-off'].toSvg();
  }
})