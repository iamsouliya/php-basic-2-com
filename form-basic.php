<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        main {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            cursor: pointer;
        }

        .heading {
            text-align: center;
            text-decoration: underline;
        }

        input {
            margin-bottom: 10px;
            width: 100%;
        }

        .wrapper {
            width: 300px;
            border: 1px solid #ccc;
            background-color: #eee;
            padding: 20px;
            border-radius: 5px;
            /* add shadow */
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
        form {
            width: 300px;
            border: 1px solid #ccc;
            background-color: #eee;
            padding: 20px;
            border-radius: 5px;
            /* add shadow */
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <main>
        <form method="POST">
            <h1 class="heading">
                Login form
            </h1>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" class="button" value="Login" name="sm">
        </form>
        <div class="wrapper">

            <?php
            if (isset($_POST['sm'])) {
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // echo $username . ' ' . $password;
                    echo "<div>Username: $username</div>";
                    echo "<div>Password: $password</div>";
                }
            }

            ?>
        </div>
    </main>
</body>

</html>