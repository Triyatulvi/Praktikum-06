<?php
if (empty ($_POST ['nama'])){
    header ("Location: belumlengkap.php");
    
}else {
    echo "Nama :".$_POST ['nama']." <br> ";
    echo "Email :".$_POST ['email']." <br> ";
    include "Datetime.php";
}
?>