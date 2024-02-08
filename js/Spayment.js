function validateNumberInput(input) {
    // Remove any non-digit characters
    input.value = input.value.replace(/\D/g, '');
  
    // Limit input to 3 characters
    if (input.value.length > 3) {
      input.value = input.value.slice(0, 3);
    }
}

function validateNameInput(input) {
    // Remove any non-letter characters except spaces
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');

    // Remove consecutive spaces, keeping only one space
    input.value = input.value.replace(/\s{2,}/g, ' ');

    // Auto capitalize the input
    input.value = input.value.toUpperCase();
}

function validateCardNumInput(input) {
    // Remove non-digit characters
    input.value = input.value.replace(/\D/g, '');
  
    // Insert a gap every four digits
    var formattedValue = input.value.replace(/(\d{4})/g, '$1 ').trim();
  
    // Limit input to a maximum of 19 digits
    formattedValue = formattedValue.slice(0, 19);
  
    // Update the input value
    input.value = formattedValue;
}

function formatDateInput(input) {
    // Remove non-digit characters
    input.value = input.value.replace(/\D/g, '');
  
    // Insert slash after the second digit (month)
    if (input.value.length >= 2) {
        input.value = input.value.slice(0, 2) + '/' + input.value.slice(2);
    }
  
    // Limit input to a maximum of 7 characters (mm/yyyy)
    input.value = input.value.slice(0, 7);    

    if (input.value.length === 7) {
        // Validate the month and year
        var dateParts = input.value.split('/');
        var month = parseInt(dateParts[0], 10);
        var year = parseInt(dateParts[1], 10);
        var currentYear = new Date().getFullYear();
    
        if (isNaN(month) || month < 1 || month > 12 || year < currentYear) {
          alert('Please enter a valid date with a month between 1 and 12, and a year from ' + currentYear + ' and above.');
          input.value = '';
          input.focus();
        }
    }
}