<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST" action="cek_login.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td> <input type="text" name="nama"> </td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td> <input type="text" name="email"> </td>
            </tr>
            <tr>
            <td>
                <input type="submit" name="btnLogin" value="Login">
                <input type="reset" name="reset" value="Reset">
            </td>
            </tr>
        </table>
</body>
</html>