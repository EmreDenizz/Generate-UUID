<?php

// Generate UUID string
$UUID = sprintf('%04x%04x-%04x-%04x-%04x', mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000) . "-" . substr(uniqid(), - 12);

// Print UUID string
var_dump($UUID);

exit;

?>
