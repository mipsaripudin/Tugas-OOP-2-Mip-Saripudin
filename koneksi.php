<?php

$con = mysqli_connect('localhost', 'root', '', 'oopkokab') or die(mysqli_error($con));
if (!$con) {
    echo "Koneksi Gagal!";
}
