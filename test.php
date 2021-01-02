<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body translate="no">
    <select id="mbPOCControlsLangDrop">
        <option value="English">English</option>
        <option value="Polish">Polish</option>
        <option value="German">German</option>
        <option value="Russian">Russian</option>
        <option value="Traditional">Traditional</option>
    </select>

    <span data-mlr-text>Sausages</span>

    <span data-mlr-text>Carrot</span>

    <p>More info on the blog: <a href="https://benfrain.com/blog">benfrain.com/blog</a></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var mlCodes = [{
                code: "bg",
                name: "Bulgarian",
            },
            {
                code: "zh",
                name: "Traditional",
            },
            {
                code: "zh",
                name: "Simplified",
            },

            {
                code: "cs",
                name: "Czech",
            },
            {
                code: "da",
                name: "Danish",
            },

            {
                code: "nl",
                name: "Dutch",
            },

            {
                code: "en",
                name: "English",
            },

            {
                code: "et",
                name: "Estonian",
            },

            {
                code: "de",
                name: "German",
            },
            {
                code: "el",
                name: "Greek",
            },

            {
                code: "hu",
                name: "Hungarian",
            },

            {
                code: "it",
                name: "Italian",
            },

            {
                code: "no",
                name: "Norwegian",
            },

            {
                code: "pl",
                name: "Polish",
            },

            {
                code: "pt",
                name: "Portuguese",
            },

            {
                code: "ro",
                name: "Romanian",
            },

            {
                code: "sk",
                name: "Slovak",
            },
            {
                code: "ru",
                name: "Russian",
            },

            {
                code: "es",
                name: "Spanish",
            },

            {
                code: "sv",
                name: "Swedish",
            },
        ];

        var MLstrings = [{
                English: "Sausages",
                Polish: "Kiełbaski",
                German: "Würste",
                Russian: "Колбасные изделия",
                Traditional: "香腸",
            },
            {
                English: "Carrot",
                Polish: "Marchewka",
                German: "Karotte",
                Russian: "Морковь",
                Traditional: "胡蘿蔔",
            }
        ];

        // Global var :(
        var mlrLangInUse;

        var mlr = function({
            dropID = "mbPOCControlsLangDrop",
            stringAttribute = "data-mlr-text",
            chosenLang = "English",
            mLstrings = MLstrings,
            countryCodes = false,
            countryCodeData = [],
        } = {}) {
            const root = document.documentElement;

            var listOfLanguages = Object.keys(mLstrings[0]);
            mlrLangInUse = chosenLang;

            (function createMLDrop() {
                var mbPOCControlsLangDrop = document.getElementById(dropID);
                // Reset the menu
                mbPOCControlsLangDrop.innerHTML = "";
                // Now build the options
                listOfLanguages.forEach((lang, langidx) => {
                    let HTMLoption = document.createElement("option");
                    HTMLoption.value = lang;
                    HTMLoption.textContent = lang;
                    mbPOCControlsLangDrop.appendChild(HTMLoption);
                    if (lang === chosenLang) {
                        mbPOCControlsLangDrop.value = lang;
                    }
                });
                mbPOCControlsLangDrop.addEventListener("change", function(e) {
                    mlrLangInUse = mbPOCControlsLangDrop[mbPOCControlsLangDrop.selectedIndex].value;
                    resolveAllMLStrings();
                    // Here we update the 2-digit lang attribute if required
                    if (countryCodes === true) {
                        if (!Array.isArray(countryCodeData) || !countryCodeData.length) {
                            console.warn("Cannot access strings for language codes");
                            return;
                        }
                        root.setAttribute("lang", updateCountryCodeOnHTML().code);
                    }
                });
            })();

            function updateCountryCodeOnHTML() {
                return countryCodeData.find(this2Digit => this2Digit.name === mlrLangInUse);
            }

            function resolveAllMLStrings() {
                let stringsToBeResolved = document.querySelectorAll(`[${stringAttribute}]`);
                stringsToBeResolved.forEach(stringToBeResolved => {
                    let originaltextContent = stringToBeResolved.textContent;
                    let resolvedText = resolveMLString(originaltextContent, mLstrings);
                    stringToBeResolved.textContent = resolvedText;
                });
            }
        };

        function resolveMLString(stringToBeResolved: string, mLstrings) {
            var matchingStringIndex = mLstrings.find(function(stringObj) {
                // Create an array of the objects values:
                let stringValues = Object.values(stringObj);
                // Now return if we can find that string anywhere in there
                return stringValues.includes(stringToBeResolved);
            });
            if (matchingStringIndex) {
                return matchingStringIndex[mlrLangInUse];
            } else {
                // If we don't have a match in our language strings, return the original
                return stringToBeResolved;
            }
        }

        mlr({
            dropID: "mbPOCControlsLangDrop",
            stringAttribute: "data-mlr-text",
            chosenLang: "English",
            mLstrings: MLstrings,
            countryCodes: true,
            countryCodeData: mlCodes,
        });
    </script>
</body>

</html>