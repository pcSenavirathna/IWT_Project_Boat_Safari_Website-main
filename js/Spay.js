function toggleFormFields() {
    var formFields = document.querySelectorAll(".form_form input[type='text']");
    
    formFields.forEach(function(field) {
        field.removeAttribute("required");
    });

}

function redirectToPaymentCards() {
    window.location.href = "SPaymentCardsList.php";
}






