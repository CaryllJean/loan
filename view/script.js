document.querySelector('.submitbtn').addEventListener('click', function () {
    validateForm();
});

function validateForm() {
    const inputs = document.querySelectorAll('input');
    let isValid = true;

    inputs.forEach(function (input) {
        if (input.value.trim() === '') {
            isValid = false;
        }
    });

    if (!isValid) {
       
    }
}

const phoneNumberInput = document.querySelector('input[name="phoneNumber"]');
const phoneNumber = phoneNumberInput.value.trim();
const philippinePhoneNumberRegex = /^(\+63|0)?\d{10}$/; // Matches either +63 or 0 followed by 10 digits
if (!philippinePhoneNumberRegex.test(phoneNumber)) {
    isValid = false;
    alert('Please enter a valid Philippine phone number.');
}

if (!isValid) {
    alert('Please fill in all fields.');
}   