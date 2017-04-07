<?php
/**
 * Created by PhpStorm.
 * User: viktoryamchinov
 * Date: 07/04/2017
 * Time: 03:25
 */
require_once 'header.php';

echo "<br><span class='main'>Welcome to $appname</span> ";
if ($loggedin) {
    echo " $user you are logged in.";
} else {
    echo "please sign up or log in to join in.";
}
?>
</span>
<br>
<br>
</body>
</html>
