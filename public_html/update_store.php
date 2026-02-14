<?php
$data = file_get_contents("php://input");
file_put_contents("apps.json", $data);
echo "Store Updated!";
?>
