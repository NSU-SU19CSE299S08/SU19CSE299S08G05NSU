function loginValidation() {
  var uemail = document.getElementById('uemail').value;

  var regx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+)\.([a-z]{2-8})(\.[a-z]{2-8})?$/;

  if (regx.test(uemail)) {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').innerHTML = 'valid';

    console.log('was submitted');
  } else {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').innerHTML = 'invalid';

    console.log('Was not submitted');
  }
}
