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

for (i = 0; i < numericInput.length; i++) {
  numericInput[i].addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, "");
  });
}

function setupMobileValidation() {
  document.querySelectorAll(".number-only").forEach(function (input) {
    input.addEventListener("input", function () {
      const mobileInput = this.value;
      const submitBtn = this.closest("form").querySelector(".btn-submit-1");
      const mobLable = this.nextElementSibling;
      mobLable.innerHTML = "please enter 10 digit no.";
      mobLable.style.display = "block";
      //console.log(mobLable);
      if (submitBtn) {
        submitBtn.disabled = mobileInput.length !== 10;
        submitBtn.disabled = mobLable.innerHTML = "please enter 10 digit no.";
        if (mobileInput.length === 10) {
          submitBtn.disabled = false;
          mobLable.innerHTML = "";
        }
      }
    });
  });
}

// Call the function to initialize the validation
setupMobileValidation();
