<?php
/**
 * Created by PhpStorm.
 * User: davide
 * Date: 01/07/14
 * Time: 10:58
 */

if (isset($_POST['user-name'])) {
    $name = $_POST['user-name'];
    if (strlen($name) > 0) {
        echo '<input type="text" value="' . $_POST['user-name'] . '" readonly="true" size=60/>';
    } else {
        echo '<h2>User name Empty...</h2>';
        echo '<a href="' . $_SERVER["REQUEST_URI"] . '">&larr; Return to settings</a>';
    }
}