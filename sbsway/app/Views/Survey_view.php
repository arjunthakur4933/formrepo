
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
</head>
<body>
    
    <div id="surveyContainer"></div>

    <script src="https://surveyjs.azureedge.net/1.8.14/survey.jquery.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
           
            var surveyData = <?= json_encode($surveyData) ?>;

           
            Survey.defaultBootstrapCss.navigationButton = "btn btn-primary";
            var survey = new Survey.Model(surveyData);
            survey.onComplete.add(function(result) {
                console.log(result.data);
                
            });
            $("#surveyContainer").Survey({ model: survey });
        });
    </script>
</body>
</html>
