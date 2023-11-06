<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jquery AutoComplete</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="ui-widget">
                    <label for="name">ALL Name</label>
                    <input id="myinput" name="name" type="text" class="form-control" placeholder="type here...">
                  </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    $( function() {
      var nameList = [
        "Bangladesh","Barbados","Belarus","Belgium",
        "Belize","Benin","Bermuda","Bhutan","Bolivia",
        "Bosnia & Herzegovina","Botswana","Brazil",
        "British Virgin Islands","Brunei","Bulgaria",
        "Burkina Faso","Burundi","Cambodia","Cameroon",
        "Canada","Cape Verde","Cayman Islands",
        "Central Arfrican Republic","Chad","Chile",
        "China","Colombia","Congo","Cook Islands",
        "Costa Rica","Cote D Ivoire","Croatia",
        "Cuba","Curacao","Cyprus","Czech Republic",
        "Denmark","Djibouti","Dominica",
        "Dominican Republic","Ecuador","Egypt",
        "El Salvador","Equatorial Guinea","Eritrea",
        "Estonia","Ethiopia","Falkland Islands",
        "Faroe Islands","Fiji","Finland","France",
        "French Polynesia","French West",];
     
      $( "#myinput" ).autocomplete({
        source: nameList
      });
    });
    </script>