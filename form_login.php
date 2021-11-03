<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="cek_login.php" method="post">
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input type="text" name="id_user"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>