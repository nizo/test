<?php

$name = $_GET['name'];
$nachname = $_GET['nachname'];
$id = $_GET['id'];
$mail = $_GET['mail'];

echo '<script>
    MeinFenster = window.open("_blank", "Zweitfenster", "width=300,height=400,left=100,top=200");
    MeinFenster.document.write("<p>'.$name.'</p>");
    
    window.open().close();    
    //MeinFenster.focus();
</script>';



?>