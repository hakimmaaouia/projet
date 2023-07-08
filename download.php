<?php
include "config.php";


if (isset($_GET['id'])) {
       $id = $_GET['id'];
       $stat = $db->prepare("select * from demo where fid=?");
       $stat->bindparam(1, $id);
       $stat->execute();
       $data = $stat->fetch();
       $file = 'files/' . $data['fname'];
       echo '|||' . $data['desc'] . '||||||';
       if (file_exists($file)) {
              header('Content-Description: ' . $data['desc']);
              header('Content-Type: ' . $data['ftype']);
              header('Content-Disposition: ' . $data['dispo'] . '; filename="' . basename($file) . '"');
              header('Expires: ' . $data['exp']);
              header('Cache-Control: ' . $data['cahce']);
              header('Pragma: ' . $data['pra']);
              header('Content-Length: ' . filesize($file));
              readfile($file);
              exit;
       }
}
?>