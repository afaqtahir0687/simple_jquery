<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Percent</title>
</head>

<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form>
                    <div class="mb-3">
                        <label for="priceInput" class="form-label">Enter Price:</label>
                        <input type="number" class="form-control" id="priceInput" placeholder="Enter price">
                    </div>
                    <div class="mb-3">
                        <label for="resultInput" class="form-label">Result:</label>
                        <input type="number" class="form-control" id="resultInput" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#priceInput").on("input", function() {
                var price = parseFloat($(this).val());
                var result = 0;

                if (price >= 1 && price <= 1000) {
                    result = price * 1.10;
                } else if (price > 1000 && price <= 10000) {
                    result = price * 1.30;
                } else if (price > 10000 && price <= 50000) {
                    result = price * 1.50;
                } else if (price > 50000 && price <= 100000) {
                    result = price * 100;
                } else if (price > 100000) {
                    result = price * 200;
                }
                $("#resultInput").val(result.toFixed(0));
            });
        });
    </script>
</body>

</html>