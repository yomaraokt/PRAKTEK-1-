<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <style>
        form{
        font-family: 'Times New Roman', Times, serif;;
        font-size: 20px;
        }
        input, textarea{
            border-radius: 0.5rem;
            cursor: pointer;
     
        }
    </style>
</head>
<body>
    <form method="POST" action="hasil_Biodata.php">
    <table>
        <tr>
            <td>Nama: </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin: </td>
            <td><input type="radio" name="gender" value="L"> Laki-Laki
            <input type="radio" name="gender" value="P"> Perempuan
            </td>
        </tr>
        <tr>
            <td>TTL: </td>
            <td><input type="text" name="ttl"></td>
        </tr>
        <tr>
            <td>Umur: </td>
            <td><input type="text" name="umur"></td>
        </tr>
        <tr>
            <td>No. HP: </td>
            <td><input type="text" name="nomorhp"></td>
        </tr>
        <tr>
            <td>Pekerjaan: </td>
            <td><input type="text" name="job"></td>
        </tr>
        <tr>
            <td>Alamat: </td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btnSubmit" value="Submit">
                <input type="reset" name="reset" value="Reset">
        </td>
        </tr>
    </table>
    </form>
    
</body>
</html>