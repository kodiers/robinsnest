<?php
/**
 * Created by PhpStorm.
 * User: viktoryamchinov
 * Date: 17/04/2017
 * Time: 02:35
 */
require_once 'functions.php';

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");
    if ($result->num_rows) {
        echo "<span class='taken'>&nbsp;&#x2718; Sorry, this username is taken.</span>";
    } else {
        echo "<span class='available'>&nbsp;&#x2718; This username is available.</span>";
    }
}