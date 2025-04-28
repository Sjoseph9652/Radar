<?php
$con = mysqli_connect("yamanote.proxy.rlwy.net", "root", "IVcIuvuOMgzRzsiOCTpAfzlLTLBjtVVF", "railway");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}