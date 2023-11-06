<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-4">
               <label for="college">College Name</label>
               <select class="form-control" name="college" id="college"> 
                <option selected>--College Select--</option>
                @foreach ($college as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
               @endforeach
            </select>
            </div>
        </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-4">
                    <label for="teacher">Teacher Name</label>
                    <select class="form-control" id="teacherselect" name="teacher">
                        <option>Select College First</option>
    
                    </select>
                </div>
            </div>


        </div>
    </div>
</body>

<script>
    $("#college").change(function (){
        var selectedCollegeId = $(this).val();
        var select = $('#teacherselect');
        $.ajax({

            url: "/college/teacher" + selectedCollegeId,
            type: "GET",
            dataType: 'json',
            success: function(res) {
                select.html(res);
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
</script>

</html>
