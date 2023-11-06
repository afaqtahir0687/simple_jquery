<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Country</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <label for="country">Country Name</label>
                <select class="form-select" id="country" name="country">
                    <option selected>Country Select</option>

                    @foreach ($country as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <label for="state">State Name</label>
                <select class="form-select" id="stateselect" name="state">
                    <option>Select Country First</option>

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <label for="state">Tehsil Name</label>
                <select class="form-select" id="tehsilselect" name="tehsil">
                    <option>Select State First</option>

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                <label for="school">School Name</label>
                <select class="form-select" id="schoolselect" name="school">
                    <option>Select Tehsil First</option>

                </select>
            </div>
        </div>
    </div>

    <script>
        $("#country").change(function() {
            var selectedCountryId = $(this).val();
            var selec = $('#stateselect');
            var tehsilSelect = $('#tehsilselect');
            var stateselect = $('#stateselect');
            
            tehsilSelect.html('<option>Select State First</option>');
            $('#stateselect').html(stateselect);
    
            $.ajax({
                url: "/get/states/" + selectedCountryId,
                type: "GET",
                dataType: 'json',
                success: function(res) {
                    selec.html(res);
                },
                error: function(err) {
                    // Handle errors here
                    console.log(err);
                }
            });
        });
    
        $("#stateselect").change(function() {
            var selectedStateId = $(this).val();
            var selec = $('#tehsilselect');
    
            $.ajax({
                url: "/get/tehsil/" + selectedStateId,
                type: "GET",
                dataType: 'json',
                success: function(res) {
                    selec.html(res);
                },
                error: function(err) {
                    // Handle errors here
                    console.log(err);
                }
            });
        });


        $("#tehsilselect").change(function() {
            var selectedStateId = $(this).val();
            var selec = $('#schoolselect');
    
            $.ajax({
                url: "/get/school/" + selectedStateId,
                type: "GET",
                dataType: 'json',
                success: function(res) {
                    selec.html(res);
                },
                error: function(err) {
                    // Handle errors here
                    console.log(err);
                }
            });
        });
    </script>
    

</body>

</html>

{{-- 
success: function (data) {
    $("#state").empty().append('<option>Select State</option>');
    $.each(data, function (key, value) {
        $("#state").append('<option value="' + key + '">' + value + '</option>');
    });
}, --}}
