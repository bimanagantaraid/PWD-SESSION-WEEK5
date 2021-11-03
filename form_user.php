<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Users</title>
</head>
<body>
    <h2>Tambah User</h2>
    <form action="input_user.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="id_user"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <input type="radio" value="admin" name="level">Admin
                    <input type="radio" value="staff" name="level">Staff
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>