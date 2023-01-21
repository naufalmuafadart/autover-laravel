const form = document.getElementById('form');
const inputCSRF = document.getElementsByName('_token')[0];
const inputEmail = document.getElementById('inputEmail');
const inputPassword = document.getElementById('inputPassword');
const smallEmail = document.getElementById('smallEmail');
const smallPassword = document.getElementById('smallPassword');

const CSRFToken = inputCSRF.value;

inputEmail.addEventListener('input', () => {
  smallEmail.style.display = 'none';
});

inputPassword.addEventListener('input', () => {
  smallPassword.style.display = 'none';
});

form.addEventListener('submit', async (e) => {
  e.preventDefault();
  hideAllSmall();

  const email = document.getElementById('inputEmail').value;
  const password = document.getElementById('inputPassword').value;

  let formData = new FormData();
  formData.append('email', email);
  formData.append('password', password);
  formData.append('_token', CSRFToken);

  const response = await fetch('api/login', {
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json",
      "X-Requested-With": "XMLHttpRequest",
      "X-CSRF-Token": `${CSRFToken}`
    },
    method: "post",
    credentials: "same-origin",
    body: JSON.stringify({
      email, password,
    })
  });
  let result = await response.json();

  if (response.status === 200) {
    window.location.href = '/';
  } else {
    if (result.message.toLowerCase().includes('email')) {
      smallEmail.style.display = 'inherit';
    } else if (result.message.toLowerCase().includes('password')) {
      smallPassword.style.display = 'inherit';
    } else {
      alert(result.message);
    }
  }
});

const init = () => {
  hideAllSmall();
}

init();
