<?php
include "config.php";



$id = $_GET['id'];

if (isset($_GET['id'])) {

    $stat = $db->prepare("DELETE FROM `demo` WHERE `fid` = ?");
    $stat->bindparam(1, $id);
    $stat->execute();
    header('REFRESH:.5;URL=ajouter.html');

}