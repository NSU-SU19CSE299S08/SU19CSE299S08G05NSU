function regValidation() {
  var uFullName = document.getElementById('fullName').value;
  var uUserName = document.getElementById('uname').value;
  var userEmail = document.getElementById('uemail').value;
  var userPhoneNumber = document.getElementById('uphone').value;

  var fullNameRegx = /^[a-zA-Z \.]{3,}$/;
  var userNameRegx = /^[a-z0-9_]{4,}$/;
  var emailRegx = /^([a-zA-Z\.\-_0-9]+)@([a-zA-Z]+).([a-zA-Z\.]{2,})$/;
  var phoneNumRegx = /^[0-9]{6,}$/;
  // full name validation

  if (fullNameRegx.test(uFullName)) {
    document.getElementById('fullName__label1').style.visibility = 'hidden';
    document.getElementById('fullName').style.border = '1px solid green';
  } else {
    document.getElementById('fullName__label1').style.visibility = 'visible';
    document.getElementById('fullName__label1').style.color = 'red';
    document.getElementById('fullName').style.border = '1px solid red';
    document.getElementById('fullName__label1').innerHTML =
      'Name can contain characters, space and dot(.)';
  }
  // username validation
  if (userNameRegx.test(uUserName)) {
    document.getElementById('userName__label1').style.visibility = 'hidden';
    document.getElementById('uname').style.border = '1px solid green';
  } else {
    document.getElementById('userName__label1').style.visibility = 'visible';
    document.getElementById('userName__label1').style.color = 'red';
    document.getElementById('uname').style.border = '1px solid red';
    document.getElementById('userName__label1').innerHTML =
      'User Name can contain characters,number and underscore(_)';
  }

  // email validation
  if (emailRegx.test(userEmail)) {
    document.getElementById('email__label1').style.visibility = 'hidden';
    document.getElementById('email__label1').style.color = 'green';
    document.getElementById('uemail').style.border = '1px solid green';
    document.getElementById('email__label1').innerHTML = 'valid';
    return false;
    console.log('was submitted');
  } else {
    document.getElementById('email__label1').style.visibility = 'visible';
    document.getElementById('email__label1').style.color = 'red';
    document.getElementById('uemail').style.border = '1px solid red';
    document.getElementById('email__label1').innerHTML = 'invalid';
    return false;
    console.log('was not submitted');
  }

  //Phone number Validation
  if (phoneNumRegx.test(userPhoneNumber)) {
    document.getElementById('uphone__label1').style.visibility = 'hidden';
    document.getElementById('uphone__label1').style.color = 'green';
    document.getElementById('uphone').style.border = '1px solid green';
    document.getElementById('uphone__label1').innerHTML = 'valid';
    return false;
    console.log('was submitted');
  } else {
    document.getElementById('uphone__label1').style.visibility = 'visible';
    document.getElementById('uphone__label1').style.color = 'red';
    document.getElementById('uphone').style.border = '1px solid red';
    document.getElementById('uphone__label1').innerHTML =
      'Enter a valid phone number. Phone number can contain only NUMBERS(0-9)';
    return false;
    console.log('was not submitted');
  }
}
