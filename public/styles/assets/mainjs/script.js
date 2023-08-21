var firstNameError  = document.getElementById('first-name-error');
var lastNameError   = document.getElementById('last-name-error');
var emailError      = document.getElementById('email-error');
var phoneError      = document.getElementById('phone-error');
var genderError     = document.getElementById('gender-error');
var passwordError   = document.getElementById('password-error');



function validateFirstName(){
    var firstName = document.getElementById('signup-first-name').value;

    if (firstName.length == 0) {
        firstNameError.innerHTML = 'First Name Is Required';
        return false;
    }
    if (!firstName.match(/^[A-Za-z]*/)) {
        
        firstNameError.innerHTML = 'Enter Valid Name';
        return false;
        
    }

    firstNameError.innerHTML = '<i class="bx bx-check-circle"> First Name Ok</i>';
    return true;
}

function validateLastName(){

    var lastName = document.getElementById('signup-last-name').value;

    if (lastName.length == 0) {
        lastNameError.innerHTML = 'Last Name Is Required';
        return false;
    }
    if (!lastName.match(/^[A-Za-z]*/)) {
        
        lastNameError.innerHTML = 'Enter Valid Name';
        return false;
        
    }

    lastNameError.innerHTML = '<i class="bx bx-check-circle"> Last Name Ok</i>';
    return true;
}

function validatePhone(){

    var phone = document.getElementById('signup-phone').value;

    if (phone.length == 0) {
        phoneError.innerHTML = 'Phone no is required'
        return false;
    }

    if (phone.length != 11) {
        phoneError.innerHTML = 'Phone no should be 11 digits'
        return false;
    }
    if (!phone.match(/^[0-9]{11}$/)) {
        phoneError.innerHTML = 'Only digits'
        return false;
    }

    phoneError.innerHTML = '<i class="bx bx-check-circle">Phone Number Ok</i>';
    return true;

}

function validateEmail(){

    var email = document.getElementById('signup-email').value;

    if (email.length == 0) {
        emailError.innerHTML = 'Email is required'
        return false;
    }
    if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        emailError.innerHTML = 'Invalid Email'
        return false;
    }

    emailError.innerHTML = '<i class="bx bx-check-circle">Email Ok</i>';
    return true;
}

function validateGender(){

    var gender = document.getElementById('signup-gender').value;

    if (gender.length == 0) {
        genderError.innerHTML = 'Gender is required'
        return false;
    }
    if (!gender.match(/^[A-Za-z\._\-[male][female][a-z]{2,4}$/)) {
        genderError.innerHTML = 'Invalid Gender'
        return false;
    }

    genderError.innerHTML = '<i class="bx bx-check-circle">Gender Ok</i>';
    return true;
}

function validatePassword(){

    var password = document.getElementById('signup-password').value;

    if (password.length == 0) {
        passwordError.innerHTML = 'Password is required'
        return false;
    }
    if (password.length < 6) {
        passwordError.innerHTML = 'Password must be atleast 6 characters'
        return false;
    }
    if (!password.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]$/)) {
        passwordError.innerHTML = 'Password must contain alphabet, numbers and @'
        return false;
    }

    passwordError.innerHTML = '<i class="bx bx-check-circle">Password Ok</i>';
    return true;


}