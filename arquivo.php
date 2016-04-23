<?php
ob_start();
ob_clean();
echo json_encode($_POST);
ob_flush();
?>