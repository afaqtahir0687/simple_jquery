<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suggetion</title>
        <style>
            #suggestion-container {
                position: relative;
            }
    
            #suggestions {
                position: absolute;
                border: 1px solid #ccc;
                max-height: 150px;
                overflow-y: auto;
                display: none;
            }
    
            .suggestion-item {
                padding: 5px;
                cursor: pointer;
            }
    
            .suggestion-item:hover {
                background-color: #f0f0f0;
            }
        </style>
    </head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="suggestion-container">
                    <input type="text" id="suggestion-input" placeholder="Type here" class="form-control">
                    <div id="suggestions"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            var suggestions = ["Apple", "Banana", "Cherry", "Date", "Grape", "Lemon", "Orange", "Peach", "Pear", "Strawberry"];

            var input = $("#suggestion-input");
            var suggestionsContainer = $("#suggestions");

            input.on("input", function () {
                var inputText = input.val().toLowerCase();
                suggestionsContainer.empty();

                for (var i = 0; i < suggestions.length; i++) {
                    if (suggestions[i].toLowerCase().includes(inputText)) {
                        var suggestionItem = $("<div>").addClass("suggestion-item").text(suggestions[i]);
                        suggestionsContainer.append(suggestionItem);
                    }
                }

                if (inputText.length > 0) {
                    suggestionsContainer.show();
                } else {
                    suggestionsContainer.hide();
                }
            });

            suggestionsContainer.on("click", ".suggestion-item", function () {
                var suggestionText = $(this).text();
                input.val(suggestionText);
                suggestionsContainer.hide();
            });
        });
    </script>
</body>
</html>
