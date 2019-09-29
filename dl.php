<?php
	$id = $_GET['id'];
	$filename = $id.'.zip';
    header('Content-type: application/zip');
    header('Content-Disposition: attachment; filename="source.zip" ');
    readfile("$filename");
?>