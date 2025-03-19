<?php
$file = 'SchoolMgSystem-PHP/mobirise/uploads/cpanel_tutorial.pdf';
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));
readfile($file);
?>