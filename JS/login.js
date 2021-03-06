const email = document.getElementById('email');
const password = document.getElementById('password');


function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = 'form-control error';
  const small = formControl.querySelector('small');
  small.innerText = message;
}


function showSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = 'form-control success';
}


function checkEmail(input) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'L\'email est non valid');
  }
}


function checkRequired(inputArr) {
  inputArr.forEach(function(input) {
    if (input.value.trim() === '') {
      showError(input, `${getFieldName(input)} est vide`);
    } else {
      showSuccess(input);
    }
  });
}


function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} doit etre a superieur ${min} carcteres`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)}  doit etre inferieur a ${max} carcteres`
    );
  } else {
    showSuccess(input);
  }
}


function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}


form.addEventListener('submit', function(e) {
  e.preventDefault();

  checkRequired([email, password]);
  checkLength(username, 3, 15);
  checkLength(password, 6, 25);
  checkEmail(email);
});
