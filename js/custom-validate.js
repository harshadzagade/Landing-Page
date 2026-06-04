// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// Get the input element
let numericInput = document.getElementsByClassName("number-only");

for (let i = 0; i < numericInput.length; i++) {
  numericInput[i].addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, "");
  });
}

function setupMobileValidation() {
  document.querySelectorAll(".number-only").forEach(function (input) {
    input.addEventListener("input", function () {
      const mobileInput = this.value;
      const form = this.closest("form");
      const submitBtn = form ? form.querySelector(".btn-submit-1") : null;
      const mobLable = this.nextElementSibling;
      
      const pageNameInput = form ? form.querySelector("input[name='page_name']") : null;
      const isNepal = pageNameInput && pageNameInput.value === "IMM16";

      let isValid = false;
      let errorMsg = "please enter 10 digit no.";

      if (isNepal) {
        // Nepal mobile number validation: 10 digits starting with 9
        isValid = mobileInput.length === 10 && /^9\d{9}$/.test(mobileInput);
        errorMsg = "please enter 10 digit Nepal mobile no. starting with 9";
      } else {
        isValid = mobileInput.length === 10;
        errorMsg = "please enter 10 digit no.";
      }

      if (mobLable) {
        if (isValid) {
          mobLable.innerHTML = "";
          mobLable.style.display = "none";
        } else {
          mobLable.innerHTML = errorMsg;
          mobLable.style.display = "block";
        }
      }

      if (submitBtn) {
        submitBtn.disabled = !isValid;
      }
    });
  });
}

// Call the function to initialize the validation
setupMobileValidation();
