function regValidation() {
  var userEmail = document.getElementById('uemail').value;
  var uFullName = document.getElementById('fullName').value;

  var fullNameRegx = /^[a-zA-Z \.]{3,}$/;
  var emailRegx = /^([a-zA-Z\.\-_0-9]+)@([a-zA-Z]+).([a-zA-Z\.]{2,})$/;
  // full name validation

  if (fullNameRegx.test(uFullName)) {
  }

  if (emailRegx.test(userEmail)) {
    document.getElementById('email__label1').style.visibility = 'hidden';
    document.getElementById('email__label1').style.color = 'green';
    document.getElementById('uemail').style.border = '1.5px solid green';
    document.getElementById('email__label1').innerHTML = 'valid';
    return false;
    console.log('was submitted');
  } else {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').style.color = 'red';
    document.getElementById('uemail').style.border = '1.5px solid red';
    document.getElementById('email__label1').innerHTML = 'invalid';
    return false;
    console.log('was not submitted');
  }
}
