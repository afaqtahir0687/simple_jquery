<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Login Form</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Apply a background color to the entire page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Create a container for the login form */
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        /* Style the form heading */
        .login-container h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Style the form fields */
        .form-group {
            margin-bottom: 20px;
        }

        /* Style the input fields */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.2s;
        }

        /* Style the input fields when focused */
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007BFF;
        }

        /* Style the login button */
        .login-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Style the login button on hover */
        .login-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>

<script>
    $(document).ready(function () {
        $('password').on('click', function() {

            alert('j');

            var passField = $('password');
            var passFieldType = passField.attr('type');
            if(passFieldType == 'password')
            {
                passField.attr('type', 'text');
                $(this).text('Hide');
            }
            else{
                passField.attr('type', 'password');
                $(this).text('Show');
            }
        });
    });
</script>