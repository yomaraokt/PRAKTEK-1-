<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Form Pegawai!</title>
</head>
<body>
    <form action="simpan_Datapegawai.php" method="POST">
    <table>
        <tr>
            <td>ID: </td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama: </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>EMAIL: </td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>ID Kota: </td>
            <td><input type="text" name="idk"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btnSubmit" value="Submit">
                <input type="reset" name="reset" value="Reset">
        </td>
        </tr>
    </form>
</body>
</html>