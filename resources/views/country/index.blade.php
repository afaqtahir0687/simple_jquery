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
                {{-- <label for="state">State Name</label> --}}
                <select class="form-select" id="stateselect" name="state">
                    <option>Select Country First</option>

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                {{-- <label for="state">Tehsil Name</label> --}}
                <select class="form-select" id="tehsilselect" name="tehsil">
                    <option>Select State First</option>

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-4">
                {{-- <label for="school">School Name</label> --}}
                <select class="form-select" id="schoolselect" name="school">
                    <option>Select Tehsil First</option>

                </select>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('#stateselect, #tehsilselect, #schoolselect').hide();

        $("#country").change(function() {
            var selectedCountryId = $(this).val();
            var stateSelect = $('#stateselect');
            var tehsilSelect = $('#tehsilselect');
            var schoolSelect = $('#schoolselect');

            if (selectedCountryId) {
                $.ajax({
                    url: "/get/states/" + selectedCountryId,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        stateSelect.empty();
                        if (Object.keys(res).length > 0) {
                            stateSelect.append('<option value="">--Select State--</option>');
                            $.each(res, function(index, state) {
                                stateSelect.append('<option value="' + index + '">' + state + '</option>');
                            });
                        }

                        stateSelect.show();
                        tehsilSelect.hide();
                        schoolSelect.hide();
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            } else {
                stateSelect.hide();
                tehsilSelect.hide();
                schoolSelect.hide();
            }
        });

        $("#stateselect").change(function() {
            var selectedStateId = $(this).val();
            var tehsilSelect = $('#tehsilselect');
            var schoolSelect = $('#schoolselect');

            if (selectedStateId) {
                $.ajax({
                    url: "/get/tehsil/" + selectedStateId,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        tehsilSelect.empty();
                        if (Object.keys(res).length > 0) {
                            tehsilSelect.append('<option value="">--Select Tehsil--</option>');
                            $.each(res, function(index, tehsil) {
                                tehsilSelect.append('<option value="' + index + '">' + tehsil + '</option>');
                            });
                        }

                        tehsilSelect.show();
                        schoolSelect.hide();
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            } else {
                tehsilSelect.hide();
                schoolSelect.hide();
            }
        });

        $("#tehsilselect").change(function() {
            var selectedTehsilId = $(this).val();
            var schoolSelect = $('#schoolselect');

            if (selectedTehsilId) {
                $.ajax({
                    url: "/get/school/" + selectedTehsilId,
                    type: "GET",
                    dataType: 'json',
                    success: function(res) {
                        schoolSelect.empty();
                        if (Object.keys(res).length > 0) {
                            schoolSelect.append('<option value="">--Select School--</option>');
                            $.each(res, function(index, school) {
                                schoolSelect.append('<option value="' + index + '">' + school + '</option>');
                            });
                        }

                        schoolSelect.show();
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            } else {
                schoolSelect.hide();
            }
        });
    </script>
</body>

</html>