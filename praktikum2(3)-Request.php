<html>

<body>
    <form method="POST" action="requestAct.php">
        <table widt="4000" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama </td>
                <td> <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td> <input type="text" name="email"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        // mengumpulkan nilai dari kolom input
        $name = $_REQUEST['nama'];
        if (empty($name) ) {
            echo "Name is Empty";
        }else{
        echo $name;
        }
    }
     if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        // mengumpulkan nilai dari kolom input
        $name = $_REQUEST['email'];
        if (empty($name) ) {
            echo "Email is Empty";
        }else{
        echo $name;
        }
    }
    ?>
</body>

</html>