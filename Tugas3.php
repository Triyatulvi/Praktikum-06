<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h2>FORM BIODATA</h2>
    <form method="POST" action="hasiltugas3.php">
        <table width="500" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td width="200">Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-Laki">Laki - Laki</td>
                <td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td width="130">Agama</td>
                <td><input type="text" name="Agama"></td>
            </tr>
            <tr>
                <td width="130">Telephone</td>
                <td><input type="text" name="Telephone"></td>
            </tr>
            <tr>
            <tr>
                <td width="130">Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>Riwayat Pendidikan</td>
                <td><textarea name="pendidikan" id="" cols="20" rows="3"></textarea></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="btnLogin" value="Kirim" align=center>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>