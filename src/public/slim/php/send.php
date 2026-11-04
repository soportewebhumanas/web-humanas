<?php
    if(isset($_POST['email'])) {
        $data = $_POST['email'] . ";";
        $ret = file_put_contents('emails.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('Error');
        }
        else {
            echo "<p>Gracias, estaremos en contacto</p>";
        }
    }
    else {
        die('no post data to process');
    }
?>