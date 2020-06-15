<?php
session_start();
$rd_num = mt_rand(1, 100);
if(isset($_SESSION["rd_num"])) {
$rd_num = $_SESSION["rd_num"];
} else {
$_SESSION["rd_num"] = $rd_num;
}
?>
<!DOCTYPE html>
