<?php 

    function asset($path) {
        return BASE_URL . 'assets/' . $path;
    }

    function setFlash($type, $message) {
        $_SESSION[$type] = $message;
    }

    function flash($type) {
        if (isset($_SESSION[$type])) {
            echo "<div class='alert $type'>" . $_SESSION[$type] . "</div>";
            unset($_SESSION[$type]);
        }
    }

?>