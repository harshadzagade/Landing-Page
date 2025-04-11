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
// let numericInput = document.getElementsByClassName("number-only");

// for (i = 0; i < numericInput.length; i++) {
//   numericInput[i].addEventListener("input", function () {
//     this.value = this.value.replace(/\D/g, "");
//   });
// }

// function setupMobileValidation() {
//   document.querySelectorAll(".number-only").forEach(function (input) {
//     input.addEventListener("input", function () {
//       const mobileInput = this.value;
//       const submitBtn = this.closest("form").querySelector(".btn-submit-1");
//       const mobLable = this.nextElementSibling;
//       mobLable.innerHTML = "please enter 10 digit no.";
//       mobLable.style.display = "block";
//       //console.log(mobLable);
//       if (submitBtn) {
//         submitBtn.disabled = mobileInput.length !== 10;
//         submitBtn.disabled = mobLable.innerHTML = "please enter 10 digit no.";
//         if (mobileInput.length === 10) {
//           submitBtn.disabled = false;
//           mobLable.innerHTML = "";
//         }
//       }
//     });
//   });
// }


function setupMobileValidation() {
  // Select all inputs with class 'number-only'
  document.querySelectorAll(".number-only").forEach(function (input) {
    // Get related elements
    const form = input.closest("form");
    const submitBtn = form ? form.querySelector(".btn-submit-1") : null;
    const errorLabel = input.nextElementSibling;
    const countrySelect = input.closest(".input-group").querySelector(".country-code");

    // Define validation rules based on country code
    const validationRules = {
      "+1": { length: 10, message: "Please enter a 10-digit number." }, // United States, Canada
      "+7": { length: 10, message: "Please enter a 10-digit number." }, // Russia
      "+20": { length: 10, message: "Please enter a 10-digit number." }, // Egypt
      "+27": { length: 9, message: "Please enter a 9-digit number." }, // South Africa
      "+30": { length: 10, message: "Please enter a 10-digit number." }, // Greece
      "+31": { length: 9, message: "Please enter a 9-digit number." }, // Netherlands
      "+32": { length: 9, message: "Please enter a 9-digit number." }, // Belgium
      "+33": { length: 9, message: "Please enter a 9-digit number." }, // France
      "+34": { length: 9, message: "Please enter a 9-digit number." }, // Spain
      "+36": { length: 9, message: "Please enter a 9-digit number." }, // Hungary
      "+39": { length: 10, message: "Please enter a 10-digit number." }, // Italy
      "+40": { length: 9, message: "Please enter a 9-digit number." }, // Romania
      "+41": { length: 9, message: "Please enter a 9-digit number." }, // Switzerland
      "+44": { minLength: 10, maxLength: 11, message: "Please enter a 10- or 11-digit number." }, // United Kingdom
      "+45": { length: 8, message: "Please enter an 8-digit number." }, // Denmark
      "+46": { length: 9, message: "Please enter a 9-digit number." }, // Sweden
      "+47": { length: 8, message: "Please enter an 8-digit number." }, // Norway
      "+48": { length: 9, message: "Please enter a 9-digit number." }, // Poland
      "+49": { length: 10, message: "Please enter a 10-digit number." }, // Germany
      "+51": { length: 9, message: "Please enter a 9-digit number." }, // Peru
      "+52": { length: 10, message: "Please enter a 10-digit number." }, // Mexico
      "+53": { length: 8, message: "Please enter an 8-digit number." }, // Cuba
      "+54": { length: 10, message: "Please enter a 10-digit number." }, // Argentina
      "+55": { length: 11, message: "Please enter an 11-digit number." }, // Brazil
      "+57": { length: 10, message: "Please enter a 10-digit number." }, // Colombia
      "+58": { length: 10, message: "Please enter a 10-digit number." }, // Venezuela
      "+60": { length: 9, message: "Please enter a 9-digit number." }, // Malaysia
      "+61": { length: 9, message: "Please enter a 9-digit number." }, // Australia
      "+62": { length: 10, message: "Please enter a 10-digit number." }, // Indonesia
      "+63": { length: 10, message: "Please enter a 10-digit number." }, // Philippines
      "+64": { length: 9, message: "Please enter a 9-digit number." }, // New Zealand
      "+65": { length: 8, message: "Please enter an 8-digit number." }, // Singapore
      "+66": { length: 9, message: "Please enter a 9-digit number." }, // Thailand
      "+81": { length: 10, message: "Please enter a 10-digit number." }, // Japan
      "+82": { length: 10, message: "Please enter a 10-digit number." }, // South Korea
      "+84": { length: 9, message: "Please enter a 9-digit number." }, // Vietnam
      "+86": { length: 11, message: "Please enter an 11-digit number." }, // China
      "+91": { length: 10, message: "Please enter a 10-digit number." }, // India
      "+92": { length: 10, message: "Please enter a 10-digit number." }, // Pakistan
      "+93": { length: 9, message: "Please enter a 9-digit number." }, // Afghanistan
      "+94": { length: 9, message: "Please enter a 9-digit number." }, // Sri Lanka
      "+95": { length: 9, message: "Please enter a 9-digit number." }, // Myanmar
      "+98": { length: 10, message: "Please enter a 10-digit number." }, // Iran
      "+211": { length: 9, message: "Please enter a 9-digit number." }, // South Sudan
      "+212": { length: 9, message: "Please enter a 9-digit number." }, // Morocco
      "+213": { length: 9, message: "Please enter a 9-digit number." }, // Algeria
      "+216": { length: 8, message: "Please enter an 8-digit number." }, // Tunisia
      "+218": { length: 9, message: "Please enter a 9-digit number." }, // Libya
      "+220": { length: 7, message: "Please enter a 7-digit number." }, // Gambia
      "+221": { length: 9, message: "Please enter a 9-digit number." }, // Senegal
      "+222": { length: 8, message: "Please enter an 8-digit number." }, // Mauritania
      "+223": { length: 8, message: "Please enter an 8-digit number." }, // Mali
      "+224": { length: 9, message: "Please enter a 9-digit number." }, // Guinea
      "+225": { length: 10, message: "Please enter a 10-digit number." }, // Ivory Coast
      "+226": { length: 8, message: "Please enter an 8-digit number." }, // Burkina Faso
      "+227": { length: 8, message: "Please enter an 8-digit number." }, // Niger
      "+228": { length: 8, message: "Please enter an 8-digit number." }, // Togo
      "+229": { length: 8, message: "Please enter an 8-digit number." }, // Benin
      "+230": { length: 8, message: "Please enter an 8-digit number." }, // Mauritius
      "+231": { length: 9, message: "Please enter a 9-digit number." }, // Liberia
      "+232": { length: 8, message: "Please enter an 8-digit number." }, // Sierra Leone
      "+233": { length: 9, message: "Please enter a 9-digit number." }, // Ghana
      "+234": { length: 10, message: "Please enter a 10-digit number." }, // Nigeria
      "+235": { length: 8, message: "Please enter an 8-digit number." }, // Chad
      "+236": { length: 8, message: "Please enter an 8-digit number." }, // Central African Republic
      "+237": { length: 9, message: "Please enter a 9-digit number." }, // Cameroon
      "+238": { length: 7, message: "Please enter a 7-digit number." }, // Cape Verde
      "+239": { length: 7, message: "Please enter a 7-digit number." }, // São Tomé and Príncipe
      "+240": { length: 9, message: "Please enter a 9-digit number." }, // Equatorial Guinea
      "+241": { length: 7, message: "Please enter a 7-digit number." }, // Gabon
      "+242": { length: 9, message: "Please enter a 9-digit number." }, // Republic of the Congo
      "+243": { length: 9, message: "Please enter a 9-digit number." }, // Democratic Republic of the Congo
      "+244": { length: 9, message: "Please enter a 9-digit number." }, // Angola
      "+245": { length: 7, message: "Please enter a 7-digit number." }, // Guinea-Bissau
      "+246": { length: 7, message: "Please enter a 7-digit number." }, // Diego Garcia
      "+247": { length: 5, message: "Please enter a 5-digit number." }, // Ascension Island
      "+248": { length: 7, message: "Please enter a 7-digit number." }, // Seychelles
      "+249": { length: 9, message: "Please enter a 9-digit number." }, // Sudan
      "+250": { length: 9, message: "Please enter a 9-digit number." }, // Rwanda
      "+251": { length: 9, message: "Please enter a 9-digit number." }, // Ethiopia
      "+252": { length: 9, message: "Please enter a 9-digit number." }, // Somalia
      "+253": { length: 8, message: "Please enter an 8-digit number." }, // Djibouti
      "+254": { length: 9, message: "Please enter a 9-digit number." }, // Kenya
      "+255": { length: 9, message: "Please enter a 9-digit number." }, // Tanzania
      "+256": { length: 9, message: "Please enter a 9-digit number." }, // Uganda
      "+260": { length: 9, message: "Please enter a 9-digit number." }, // Zambia
      "+261": { length: 9, message: "Please enter a 9-digit number." }, // Madagascar
      "+262": { length: 9, message: "Please enter a 9-digit number." }, // Réunion, Mayotte
      "+263": { length: 9, message: "Please enter a 9-digit number." }, // Zimbabwe
      "+264": { length: 9, message: "Please enter a 9-digit number." }, // Namibia
      "+265": { length: 9, message: "Please enter a 9-digit number." }, // Malawi
      "+266": { length: 8, message: "Please enter an 8-digit number." }, // Lesotho
      "+267": { length: 8, message: "Please enter an 8-digit number." }, // Botswana
      "+268": { length: 8, message: "Please enter an 8-digit number." }, // Eswatini
      "+269": { length: 7, message: "Please enter a 7-digit number." }, // Comoros
      "+297": { length: 7, message: "Please enter a 7-digit number." }, // Aruba
      "+298": { length: 6, message: "Please enter a 6-digit number." }, // Faroe Islands
      "+299": { length: 6, message: "Please enter a 6-digit number." }, // Greenland
      "+350": { length: 8, message: "Please enter an 8-digit number." }, // Gibraltar
      "+351": { length: 9, message: "Please enter a 9-digit number." }, // Portugal
      "+352": { length: 9, message: "Please enter a 9-digit number." }, // Luxembourg
      "+353": { length: 9, message: "Please enter a 9-digit number." }, // Ireland
      "+354": { length: 7, message: "Please enter a 7-digit number." }, // Iceland
      "+355": { length: 9, message: "Please enter a 9-digit number." }, // Albania
      "+356": { length: 8, message: "Please enter an 8-digit number." }, // Malta
      "+357": { length: 8, message: "Please enter an 8-digit number." }, // Cyprus
      "+358": { length: 9, message: "Please enter a 9-digit number." }, // Finland
      "+359": { length: 9, message: "Please enter a 9-digit number." }, // Bulgaria
      "+370": { length: 8, message: "Please enter an 8-digit number." }, // Lithuania
      "+371": { length: 8, message: "Please enter an 8-digit number." }, // Latvia
      "+372": { length: 8, message: "Please enter an 8-digit number." }, // Estonia
      "+373": { length: 8, message: "Please enter an 8-digit number." }, // Moldova
      "+374": { length: 8, message: "Please enter an 8-digit number." }, // Armenia
      "+375": { length: 9, message: "Please enter a 9-digit number." }, // Belarus
      "+376": { length: 6, message: "Please enter a 6-digit number." }, // Andorra
      "+377": { length: 9, message: "Please enter a 9-digit number." }, // Monaco
      "+378": { length: 8, message: "Please enter an 8-digit number." }, // San Marino
      "+379": { length: 8, message: "Please enter an 8-digit number." }, // Vatican City
      "+380": { length: 9, message: "Please enter a 9-digit number." }, // Ukraine
      "+381": { length: 9, message: "Please enter a 9-digit number." }, // Serbia
      "+382": { length: 8, message: "Please enter an 8-digit number." }, // Montenegro
      "+383": { length: 8, message: "Please enter an 8-digit number." }, // Kosovo
      "+385": { length: 9, message: "Please enter a 9-digit number." }, // Croatia
      "+386": { length: 8, message: "Please enter an 8-digit number." }, // Slovenia
      "+387": { length: 8, message: "Please enter an 8-digit number." }, // Bosnia and Herzegovina
      "+389": { length: 8, message: "Please enter an 8-digit number." }, // North Macedonia
      "+420": { length: 9, message: "Please enter a 9-digit number." }, // Czech Republic
      "+421": { length: 9, message: "Please enter a 9-digit number." }, // Slovakia
      "+423": { length: 7, message: "Please enter a 7-digit number." }, // Liechtenstein
      "+500": { length: 5, message: "Please enter a 5-digit number." }, // Falkland Islands
      "+501": { length: 7, message: "Please enter a 7-digit number." }, // Belize
      "+502": { length: 8, message: "Please enter an 8-digit number." }, // Guatemala
      "+503": { length: 8, message: "Please enter an 8-digit number." }, // El Salvador
      "+504": { length: 8, message: "Please enter an 8-digit number." }, // Honduras
      "+505": { length: 8, message: "Please enter an 8-digit number." }, // Nicaragua
      "+506": { length: 8, message: "Please enter an 8-digit number." }, // Costa Rica
      "+507": { length: 8, message: "Please enter an 8-digit number." }, // Panama
      "+508": { length: 6, message: "Please enter a 6-digit number." }, // Saint Pierre and Miquelon
      "+509": { length: 8, message: "Please enter an 8-digit number." }, // Haiti
      "+590": { length: 9, message: "Please enter a 9-digit number." }, // Guadeloupe, Saint Barthélemy, Saint Martin
      "+591": { length: 8, message: "Please enter an 8-digit number." }, // Bolivia
      "+592": { length: 7, message: "Please enter a 7-digit number." }, // Guyana
      "+593": { length: 9, message: "Please enter a 9-digit number." }, // Ecuador
      "+594": { length: 9, message: "Please enter a 9-digit number." }, // French Guiana
      "+595": { length: 9, message: "Please enter a 9-digit number." }, // Paraguay
      "+596": { length: 9, message: "Please enter a 9-digit number." }, // Martinique
      "+597": { length: 7, message: "Please enter a 7-digit number." }, // Suriname
      "+598": { length: 8, message: "Please enter an 8-digit number." }, // Uruguay
      "+599": { length: 7, message: "Please enter a 7-digit number." }, // Curaçao, Caribbean Netherlands
      "+670": { length: 8, message: "Please enter an 8-digit number." }, // Timor-Leste
      "+672": { length: 6, message: "Please enter a 6-digit number." }, // Norfolk Island
      "+673": { length: 7, message: "Please enter a 7-digit number." }, // Brunei
      "+674": { length: 7, message: "Please enter a 7-digit number." }, // Nauru
      "+675": { length: 8, message: "Please enter an 8-digit number." }, // Papua New Guinea
      "+676": { length: 5, message: "Please enter a 5-digit number." }, // Tonga
      "+677": { length: 7, message: "Please enter a 7-digit number." }, // Solomon Islands
      "+678": { length: 7, message: "Please enter a 7-digit number." }, // Vanuatu
      "+679": { length: 7, message: "Please enter a 7-digit number." }, // Fiji
      "+680": { length: 7, message: "Please enter a 7-digit number." }, // Palau
      "+681": { length: 6, message: "Please enter a 6-digit number." }, // Wallis and Futuna
      "+682": { length: 5, message: "Please enter a 5-digit number." }, // Cook Islands
      "+683": { length: 4, message: "Please enter a 4-digit number." }, // Niue
      "+685": { length: 7, message: "Please enter a 7-digit number." }, // Samoa
      "+686": { length: 8, message: "Please enter an 8-digit number." }, // Kiribati
      "+687": { length: 6, message: "Please enter a 6-digit number." }, // New Caledonia
      "+688": { length: 7, message: "Please enter a 7-digit number." }, // Tuvalu
      "+689": { length: 8, message: "Please enter an 8-digit number." }, // French Polynesia
      "+690": { length: 4, message: "Please enter a 4-digit number." }, // Tokelau
      "+691": { length: 7, message: "Please enter a 7-digit number." }, // Micronesia
      "+692": { length: 7, message: "Please enter a 7-digit number." }, // Marshall Islands
      "+850": { length: 10, message: "Please enter a 10-digit number." }, // North Korea
      "+852": { length: 8, message: "Please enter an 8-digit number." }, // Hong Kong
      "+853": { length: 8, message: "Please enter an 8-digit number." }, // Macau
      "+855": { length: 9, message: "Please enter a 9-digit number." }, // Cambodia
      "+856": { length: 9, message: "Please enter a 9-digit number." }, // Laos
      "+880": { length: 10, message: "Please enter a 10-digit number." }, // Bangladesh
      "+886": { length: 9, message: "Please enter a 9-digit number." }, // Taiwan
      "+960": { length: 7, message: "Please enter a 7-digit number." }, // Maldives
      "+961": { length: 8, message: "Please enter an 8-digit number." }, // Lebanon
      "+962": { length: 9, message: "Please enter a 9-digit number." }, // Jordan
      "+963": { length: 9, message: "Please enter a 9-digit number." }, // Syria
      "+964": { length: 10, message: "Please enter a 10-digit number." }, // Iraq
      "+965": { length: 8, message: "Please enter an 8-digit number." }, // Kuwait
      "+966": { length: 9, message: "Please enter a 9-digit number." }, // Saudi Arabia
      "+967": { length: 9, message: "Please enter a 9-digit number." }, // Yemen
      "+968": { length: 8, message: "Please enter an 8-digit number." }, // Oman
      "+970": { length: 9, message: "Please enter a 9-digit number." }, // Palestine
      "+971": { length: 9, message: "Please enter a 9-digit number." }, // United Arab Emirates
      "+972": { length: 9, message: "Please enter a 9-digit number." }, // Israel
      "+973": { length: 8, message: "Please enter an 8-digit number." }, // Bahrain
      "+974": { length: 8, message: "Please enter an 8-digit number." }, // Qatar
      "+975": { length: 8, message: "Please enter an 8-digit number." }, // Bhutan
      "+976": { length: 8, message: "Please enter an 8-digit number." }, // Mongolia
      "+977": { length: 10, message: "Please enter a 10-digit number." }, // Nepal
      "+992": { length: 9, message: "Please enter a 9-digit number." }, // Tajikistan
      "+993": { length: 8, message: "Please enter an 8-digit number." }, // Turkmenistan
      "+994": { length: 9, message: "Please enter a 9-digit number." }, // Azerbaijan
      "+995": { length: 9, message: "Please enter a 9-digit number." }, // Georgia
      "+996": { length: 9, message: "Please enter a 9-digit number." }, // Kyrgyzstan
      "+997": { length: 9, message: "Please enter a 9-digit number." }, // Kazakhstan
      "+998": { length: 9, message: "Please enter a 9-digit number." }, // Uzbekistan
      "+999": { length: 10, message: "Please enter a valid mobile number." }, // Reserved for international services
      default: { length: 10, message: "Please enter a valid mobile number." } // Fallback for any unspecified codes
    };

    // Function to validate input
    function validateInput() {
      // Restrict to digits only
      input.value = input.value.replace(/\D/g, "");

      // Get current country code and validation rule
      const countryCode = countrySelect ? countrySelect.value : "+91"; // Default to +91 if no select
      const rule = validationRules[countryCode] || validationRules.default;

      // Get current input value
      const mobileInput = input.value;

      // Validate length
      if (mobileInput.length === rule.length) {
        // Valid input
        if (errorLabel) {
          errorLabel.innerHTML = "";
          errorLabel.style.display = "none";
        }
        if (submitBtn) {
          submitBtn.disabled = false;
        }
      } else {
        // Invalid input
        if (errorLabel) {
          errorLabel.innerHTML = rule.message;
          errorLabel.style.display = "block";
        }
        if (submitBtn) {
          submitBtn.disabled = true;
        }
      }
    }

    // Add input event listener
    input.addEventListener("input", validateInput);

    // Revalidate when country code changes
    if (countrySelect) {
      countrySelect.addEventListener("change", validateInput);
    }
  });
}


// Call the function to initialize the validation
setupMobileValidation();
