const form = document.getElementById("form");
const inputPassword = document.getElementById('inputPassword');
const inputRetypePassword = document.getElementById('inputRetypePassword');
const smallRetypePassword = document.getElementById('smallRetypePassword');

const hideAllSmall = () => {
  const smallElements = document.getElementsByTagName("small");
  for (let i = 0; i < smallElements.length; i++) {
    smallElements[i].style.display = 'none';
    console.log(smallElements[i]);
  }
};

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

    let response = await fetch('/api/users', {
      method: 'POST',
      body: formData,
      redirect: 'follow',
    });
    let result = await response.json();

    if (response.status === 200) {
      window.location.href = '/login';
    } else {
      alert(result.message);
    }
  }
});

const init = () => {
  hideAllSmall();
};

init();
