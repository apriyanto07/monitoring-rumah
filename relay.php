<?php

include "koneksi.php";

$stat = $_GET ['stat'];
if ($stat == "ON")
{
    mysqli_query($koneksi, "UPDATE kontrol SET relay=1");
    echo "ON";
}
else
{
    mysqli_query($koneksi, "UPDATE kontrol SET relay=0");
    echo "OFF";
}

?>