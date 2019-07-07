function regValidation() {
  var userEmail = document.getElementById('uemail').value;

  var emailRegx = /^([a-zA-Z\.\-_0-9]+)@([a-zA-Z]+).([a-zA-Z\.]{2,})$/;

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
  input.addEventListener('#uemail', function() {
    if (userEmail == '') {
      document.getElementById('uemail').style.border = '1px solid black';
    }
  });
}
