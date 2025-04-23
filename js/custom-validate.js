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
      "+1": {  message: "Please enter a 10-digit number." }, // United States, Canada
      "+7": {  message: "Please enter a 10-digit number." }, // Russia
      "+20": {  message: "Please enter a 10-digit number." }, // Egypt
      "+27": {  message: "Please enter a 9-digit number." }, // South Africa
      "+30": {  message: "Please enter a 10-digit number." }, // Greece
      "+31": {  message: "Please enter a 9-digit number." }, // Netherlands
      "+32": {  message: "Please enter a 9-digit number." }, // Belgium
      "+33": {  message: "Please enter a 9-digit number." }, // France
      "+34": {  message: "Please enter a 9-digit number." }, // Spain
      "+36": {  message: "Please enter a 9-digit number." }, // Hungary
      "+39": {  message: "Please enter a 10-digit number." }, // Italy
      "+40": {  message: "Please enter a 9-digit number." }, // Romania
      "+41": {  message: "Please enter a 9-digit number." }, // Switzerland
      "+44": {  message: "Please enter a 10- or 11-digit number." }, // United Kingdom
      "+45": {  message: "Please enter an 8-digit number." }, // Denmark
      "+46": {  message: "Please enter a 9-digit number." }, // Sweden
      "+47": {  message: "Please enter an 8-digit number." }, // Norway
      "+48": {  message: "Please enter a 9-digit number." }, // Poland
      "+49": {  message: "Please enter a 10-digit number." }, // Germany
      "+51": {  message: "Please enter a 9-digit number." }, // Peru
      "+52": {  message: "Please enter a 10-digit number." }, // Mexico
      "+53": {  message: "Please enter an 8-digit number." }, // Cuba
      "+54": {  message: "Please enter a 10-digit number." }, // Argentina
      "+55": {  message: "Please enter an 11-digit number." }, // Brazil
      "+57": {  message: "Please enter a 10-digit number." }, // Colombia
      "+58": {  message: "Please enter a 10-digit number." }, // Venezuela
      "+60": {  message: "Please enter a 9-digit number." }, // Malaysia
      "+61": {  message: "Please enter a 9-digit number." }, // Australia
      "+62": {  message: "Please enter a 10-digit number." }, // Indonesia
      "+63": {  message: "Please enter a 10-digit number." }, // Philippines
      "+64": {  message: "Please enter a 9-digit number." }, // New Zealand
      "+65": {  message: "Please enter an 8-digit number." }, // Singapore
      "+66": {  message: "Please enter a 9-digit number." }, // Thailand
      "+81": {  message: "Please enter a 10-digit number." }, // Japan
      "+82": {  message: "Please enter a 10-digit number." }, // South Korea
      "+84": {  message: "Please enter a 9-digit number." }, // Vietnam
      "+86": {  message: "Please enter an 11-digit number." }, // China
      "+91": {  message: "Please enter a 10-digit number." }, // India
      "+92": {  message: "Please enter a 10-digit number." }, // Pakistan
      "+93": {  message: "Please enter a 9-digit number." }, // Afghanistan
      "+94": {  message: "Please enter a 9-digit number." }, // Sri Lanka
      "+95": {  message: "Please enter a 9-digit number." }, // Myanmar
      "+98": {  message: "Please enter a 10-digit number." }, // Iran
      "+211": {  message: "Please enter a 9-digit number." }, // South Sudan
      "+212": {  message: "Please enter a 9-digit number." }, // Morocco
      "+213": {  message: "Please enter a 9-digit number." }, // Algeria
      "+216": {  message: "Please enter an 8-digit number." }, // Tunisia
      "+218": {  message: "Please enter a 9-digit number." }, // Libya
      "+220": {  message: "Please enter a 7-digit number." }, // Gambia
      "+221": {  message: "Please enter a 9-digit number." }, // Senegal
      "+222": {  message: "Please enter an 8-digit number." }, // Mauritania
      "+223": {  message: "Please enter an 8-digit number." }, // Mali
      "+224": {  message: "Please enter a 9-digit number." }, // Guinea
      "+225": {  message: "Please enter a 10-digit number." }, // Ivory Coast
      "+226": {  message: "Please enter an 8-digit number." }, // Burkina Faso
      "+227": {  message: "Please enter an 8-digit number." }, // Niger
      "+228": {  message: "Please enter an 8-digit number." }, // Togo
      "+229": {  message: "Please enter an 8-digit number." }, // Benin
      "+230": {  message: "Please enter an 8-digit number." }, // Mauritius
      "+231": {  message: "Please enter a 9-digit number." }, // Liberia
      "+232": {  message: "Please enter an 8-digit number." }, // Sierra Leone
      "+233": {  message: "Please enter a 9-digit number." }, // Ghana
      "+234": {  message: "Please enter a 10-digit number." }, // Nigeria
      "+235": {  message: "Please enter an 8-digit number." }, // Chad
      "+236": {  message: "Please enter an 8-digit number." }, // Central African Republic
      "+237": {  message: "Please enter a 9-digit number." }, // Cameroon
      "+238": {  message: "Please enter a 7-digit number." }, // Cape Verde
      "+239": {  message: "Please enter a 7-digit number." }, // São Tomé and Príncipe
      "+240": {  message: "Please enter a 9-digit number." }, // Equatorial Guinea
      "+241": {  message: "Please enter a 7-digit number." }, // Gabon
      "+242": {  message: "Please enter a 9-digit number." }, // Republic of the Congo
      "+243": {  message: "Please enter a 9-digit number." }, // Democratic Republic of the Congo
      "+244": {  message: "Please enter a 9-digit number." }, // Angola
      "+245": {  message: "Please enter a 7-digit number." }, // Guinea-Bissau
      "+246": {  message: "Please enter a 7-digit number." }, // Diego Garcia
      "+247": {  message: "Please enter a 5-digit number." }, // Ascension Island
      "+248": {  message: "Please enter a 7-digit number." }, // Seychelles
      "+249": {  message: "Please enter a 9-digit number." }, // Sudan
      "+250": {  message: "Please enter a 9-digit number." }, // Rwanda
      "+251": {  message: "Please enter a 9-digit number." }, // Ethiopia
      "+252": {  message: "Please enter a 9-digit number." }, // Somalia
      "+253": {  message: "Please enter an 8-digit number." }, // Djibouti
      "+254": {  message: "Please enter a 9-digit number." }, // Kenya
      "+255": {  message: "Please enter a 9-digit number." }, // Tanzania
      "+256": {  message: "Please enter a 9-digit number." }, // Uganda
      "+260": {  message: "Please enter a 9-digit number." }, // Zambia
      "+261": {  message: "Please enter a 9-digit number." }, // Madagascar
      "+262": {  message: "Please enter a 9-digit number." }, // Réunion, Mayotte
      "+263": {  message: "Please enter a 9-digit number." }, // Zimbabwe
      "+264": {  message: "Please enter a 9-digit number." }, // Namibia
      "+265": {  message: "Please enter a 9-digit number." }, // Malawi
      "+266": {  message: "Please enter an 8-digit number." }, // Lesotho
      "+267": {  message: "Please enter an 8-digit number." }, // Botswana
      "+268": {  message: "Please enter an 8-digit number." }, // Eswatini
      "+269": {  message: "Please enter a 7-digit number." }, // Comoros
      "+297": {  message: "Please enter a 7-digit number." }, // Aruba
      "+298": {  message: "Please enter a 6-digit number." }, // Faroe Islands
      "+299": {  message: "Please enter a 6-digit number." }, // Greenland
      "+350": {  message: "Please enter an 8-digit number." }, // Gibraltar
      "+351": {  message: "Please enter a 9-digit number." }, // Portugal
      "+352": {  message: "Please enter a 9-digit number." }, // Luxembourg
      "+353": {  message: "Please enter a 9-digit number." }, // Ireland
      "+354": {  message: "Please enter a 7-digit number." }, // Iceland
      "+355": {  message: "Please enter a 9-digit number." }, // Albania
      "+356": {  message: "Please enter an 8-digit number." }, // Malta
      "+357": {  message: "Please enter an 8-digit number." }, // Cyprus
      "+358": {  message: "Please enter a 9-digit number." }, // Finland
      "+359": {  message: "Please enter a 9-digit number." }, // Bulgaria
      "+370": {  message: "Please enter an 8-digit number." }, // Lithuania
      "+371": {  message: "Please enter an 8-digit number." }, // Latvia
      "+372": {  message: "Please enter an 8-digit number." }, // Estonia
      "+373": {  message: "Please enter an 8-digit number." }, // Moldova
      "+374": {  message: "Please enter an 8-digit number." }, // Armenia
      "+375": {  message: "Please enter a 9-digit number." }, // Belarus
      "+376": {  message: "Please enter a 6-digit number." }, // Andorra
      "+377": {  message: "Please enter a 9-digit number." }, // Monaco
      "+378": {  message: "Please enter an 8-digit number." }, // San Marino
      "+379": {  message: "Please enter an 8-digit number." }, // Vatican City
      "+380": {  message: "Please enter a 9-digit number." }, // Ukraine
      "+381": {  message: "Please enter a 9-digit number." }, // Serbia
      "+382": {  message: "Please enter an 8-digit number." }, // Montenegro
      "+383": {  message: "Please enter an 8-digit number." }, // Kosovo
      "+385": {  message: "Please enter a 9-digit number." }, // Croatia
      "+386": {  message: "Please enter an 8-digit number." }, // Slovenia
      "+387": {  message: "Please enter an 8-digit number." }, // Bosnia and Herzegovina
      "+389": {  message: "Please enter an 8-digit number." }, // North Macedonia
      "+420": {  message: "Please enter a 9-digit number." }, // Czech Republic
      "+421": {  message: "Please enter a 9-digit number." }, // Slovakia
      "+423": {  message: "Please enter a 7-digit number." }, // Liechtenstein
      "+500": {  message: "Please enter a 5-digit number." }, // Falkland Islands
      "+501": {  message: "Please enter a 7-digit number." }, // Belize
      "+502": {  message: "Please enter an 8-digit number." }, // Guatemala
      "+503": {  message: "Please enter an 8-digit number." }, // El Salvador
      "+504": {  message: "Please enter an 8-digit number." }, // Honduras
      "+505": {  message: "Please enter an 8-digit number." }, // Nicaragua
      "+506": {  message: "Please enter an 8-digit number." }, // Costa Rica
      "+507": {  message: "Please enter an 8-digit number." }, // Panama
      "+508": {  message: "Please enter a 6-digit number." }, // Saint Pierre and Miquelon
      "+509": {  message: "Please enter an 8-digit number." }, // Haiti
      "+590": {  message: "Please enter a 9-digit number." }, // Guadeloupe, Saint Barthélemy, Saint Martin
      "+591": {  message: "Please enter an 8-digit number." }, // Bolivia
      "+592": {  message: "Please enter a 7-digit number." }, // Guyana
      "+593": {  message: "Please enter a 9-digit number." }, // Ecuador
      "+594": {  message: "Please enter a 9-digit number." }, // French Guiana
      "+595": {  message: "Please enter a 9-digit number." }, // Paraguay
      "+596": {  message: "Please enter a 9-digit number." }, // Martinique
      "+597": {  message: "Please enter a 7-digit number." }, // Suriname
      "+598": {  message: "Please enter an 8-digit number." }, // Uruguay
      "+599": {  message: "Please enter a 7-digit number." }, // Curaçao, Caribbean Netherlands
      "+670": {  message: "Please enter an 8-digit number." }, // Timor-Leste
      "+672": {  message: "Please enter a 6-digit number." }, // Norfolk Island
      "+673": {  message: "Please enter a 7-digit number." }, // Brunei
      "+674": {  message: "Please enter a 7-digit number." }, // Nauru
      "+675": {  message: "Please enter an 8-digit number." }, // Papua New Guinea
      "+676": {  message: "Please enter a 5-digit number." }, // Tonga
      "+677": {  message: "Please enter a 7-digit number." }, // Solomon Islands
      "+678": {  message: "Please enter a 7-digit number." }, // Vanuatu
      "+679": {  message: "Please enter a 7-digit number." }, // Fiji
      "+680": {  message: "Please enter a 7-digit number." }, // Palau
      "+681": {  message: "Please enter a 6-digit number." }, // Wallis and Futuna
      "+682": {  message: "Please enter a 5-digit number." }, // Cook Islands
      "+683": {  message: "Please enter a 4-digit number." }, // Niue
      "+685": {  message: "Please enter a 7-digit number." }, // Samoa
      "+686": {  message: "Please enter an 8-digit number." }, // Kiribati
      "+687": {  message: "Please enter a 6-digit number." }, // New Caledonia
      "+688": {  message: "Please enter a 7-digit number." }, // Tuvalu
      "+689": {  message: "Please enter an 8-digit number." }, // French Polynesia
      "+690": {  message: "Please enter a 4-digit number." }, // Tokelau
      "+691": {  message: "Please enter a 7-digit number." }, // Micronesia
      "+692": {  message: "Please enter a 7-digit number." }, // Marshall Islands
      "+850": {  message: "Please enter a 10-digit number." }, // North Korea
      "+852": {  message: "Please enter an 8-digit number." }, // Hong Kong
      "+853": {  message: "Please enter an 8-digit number." }, // Macau
      "+855": {  message: "Please enter a 9-digit number." }, // Cambodia
      "+856": {  message: "Please enter a 9-digit number." }, // Laos
      "+880": {  message: "Please enter a 10-digit number." }, // Bangladesh
      "+886": {  message: "Please enter a 9-digit number." }, // Taiwan
      "+960": {  message: "Please enter a 7-digit number." }, // Maldives
      "+961": {  message: "Please enter an 8-digit number." }, // Lebanon
      "+962": {  message: "Please enter a 9-digit number." }, // Jordan
      "+963": {  message: "Please enter a 9-digit number." }, // Syria
      "+964": {  message: "Please enter a 10-digit number." }, // Iraq
      "+965": {  message: "Please enter an 8-digit number." }, // Kuwait
      "+966": {  message: "Please enter a 9-digit number." }, // Saudi Arabia
      "+967": {  message: "Please enter a 9-digit number." }, // Yemen
      "+968": {  message: "Please enter an 8-digit number." }, // Oman
      "+970": {  message: "Please enter a 9-digit number." }, // Palestine
      "+971": {  message: "Please enter a 9-digit number." }, // United Arab Emirates
      "+972": {  message: "Please enter a 9-digit number." }, // Israel
      "+973": {  message: "Please enter an 8-digit number." }, // Bahrain
      "+974": {  message: "Please enter an 8-digit number." }, // Qatar
      "+975": {  message: "Please enter an 8-digit number." }, // Bhutan
      "+976": {  message: "Please enter an 8-digit number." }, // Mongolia
      "+977": {  message: "Please enter a 10-digit number." }, // Nepal
      "+992": {  message: "Please enter a 9-digit number." }, // Tajikistan
      "+993": {  message: "Please enter an 8-digit number." }, // Turkmenistan
      "+994": {  message: "Please enter a 9-digit number." }, // Azerbaijan
      "+995": {  message: "Please enter a 9-digit number." }, // Georgia
      "+996": {  message: "Please enter a 9-digit number." }, // Kyrgyzstan
      "+997": {  message: "Please enter a 9-digit number." }, // Kazakhstan
      "+998": {  message: "Please enter a 9-digit number." }, // Uzbekistan
      "+999": {  message: "Please enter a valid mobile number." }, // Reserved for international services
      default: {  message: "Please enter a valid mobile number." } // Fallback for any unspecified codes
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
