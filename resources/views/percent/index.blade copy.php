<!DOCTYPE html>
<html>
<head>
    <title>jQuery Percentage Calculation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <input type="number" id="input1" placeholder="Enter a number">
    <input type="text" id="input2" placeholder="Result" readonly>
    
    <script>
        $(document).ready(function() {
            $('#input1').on('input', function() {
                var value = $(this).val();
                if (!isNaN(value) && value >= 1 && value <= 1000000) {
                    var result = parseFloat(value) + (parseFloat(value) * 0.10); 
                    $('#input2').val(result.toFixed(2)); 
                } else {
                    $('#input2').val('');
                }
            });
        });
    </script>
</body>
</html>
