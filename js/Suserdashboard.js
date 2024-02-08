function enableButton(buttonId, inputId) {
var button = document.getElementById(buttonId);
var input = document.getElementById(inputId);

if (button.textContent === 'Edit') {
    button.textContent = 'Submit';
    input.disabled = false;
    input.classList.add('editable');
} else {
    button.textContent = 'Edit';
    input.disabled = true;
    input.classList.remove('editable');
}
}
