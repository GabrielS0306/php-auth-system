<?php 

    function asset($path) {
        $path = ltrim($path, '/');

        if (stripos($path, 'js/') === 0) {
            $path = 'Js/' . substr($path, 3);
        }

        return rtrim(BASE_URL, '/') . '/assets/' . $path;
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
