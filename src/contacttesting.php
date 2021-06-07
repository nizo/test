<?php
if ($_POST) {
    $data = json_decode($_POST['data']);
    //print_r($data);
    echo 'success';
    //echo 'error';
}
?>