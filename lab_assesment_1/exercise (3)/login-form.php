<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login </title>


    <style>
        form {
            margin: 25px auto;
            padding: 20px;
            border: 5px solid #ccc;
            width: 500px;
            background: #eee;
        }

        button {
            padding: 14px 20px;
            margin: 8px 0;
            width: 100%;
        }
    </style>


</head>

<body>

    <form action="login.php" id="lform" method="POST">

        <div class="container">
            <label for=" username">Username</label>
            <input type="text" name="username">

            <label for="password">Password</label>
            <input type="password" name="password">

            <button class="lbutton">Login</button>
        </div>



    </form>





</body>




</html>