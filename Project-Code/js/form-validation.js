function regValidation() {
  var uemail = document.getElementById('uemail').value;

  var emailRegx = /^([a-zA-Z\.\-_0-9]+)@([a-zA-Z]+).([a-zA-Z\.]{2,})$/;

  if (emailRegx.test(uemail)) {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').innerHTML = 'valid';
    console.log('was submitted');
  } else {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').innerHTML = 'invalid';
  }
}
