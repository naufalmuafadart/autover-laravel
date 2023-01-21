const form = document.getElementById("form");
const inputPhoneNumber = document.getElementById('inputPhoneNumber');
const inputEmail = document.getElementById('inputEmail');
const inputPassword = document.getElementById('inputPassword');
const inputRetypePassword = document.getElementById('inputRetypePassword');
const smallPhoneNumber = document.getElementById('smallPhoneNumber');
const smallEmail = document.getElementById('smallEmail');
const smallRetypePassword = document.getElementById('smallRetypePassword');
const inputCSRF = document.getElementsByName('_token')[0];

const CSRFToken = inputCSRF.value;

inputPhoneNumber.addEventListener('input', () => {
  smallPhoneNumber.style.display = 'none';
});

inputEmail.addEventListener('input', () => {
  smallEmail.style.display = 'none';
});

inputPassword.addEventListener('input', () => {
  smallPassword.style.display = 'none';
});

inputRetypePassword.addEventListener('input', (event) => {
  console.log('test');
  if (event.target.value !== inputPassword.value) {
    smallRetypePassword.style.display = 'inherit';
  } else {
    smallRetypePassword.style.display = 'none';
  }
});

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const full_name = document.getElementById('inputFullName').value;
  const phone_number = document.getElementById('inputPhoneNumber').value;
  const email = document.getElementById('inputEmail').value;
  const password = inputPassword.value;
  const retypePassword = inputRetypePassword.value;

  if (password !== retypePassword) {
    alert('Password tidak cocok');
    smallRetypePassword.style.display = 'inherit';
  } else {
    hideAllSmall();
    let formData = new FormData();
    formData.append("full_name", full_name);
    formData.append("phone_number", phone_number);
    formData.append("email", email);
    formData.append("password", password);
    formData.append('_token', CSRFToken);

    let response = await fetch('/api/users', {
      method: 'POST',
      body: formData,
      redirect: 'follow',
    });
    let result = await response.json();

    if (response.status === 200) {
      window.location.href = '/login';
    } else {
      if (result.message.toLowerCase().includes('email')) {
        smallEmail.style.display = 'inherit';
      } else if (result.message.toLowerCase().includes('password')) {
        smallPassword.style.display = 'inherit';
      } else if (result.message.toLowerCase().includes('phone')) {
        smallPhoneNumber.style.display = 'inherit';
      } else {
        alert(result.message);
      }
    }
  }
});

const init = () => {
  hideAllSmall();
};

init();
