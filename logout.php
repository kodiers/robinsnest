<?php
/**
 * Created by PhpStorm.
 * User: viktoryamchinov
 * Date: 20/04/2017
 * Time: 03:29
 */
require_once 'header.php';

if (isset($_SESSION['user'])) {
    destroySession();
    echo "<div class='main'>You have been logged out. Please <a href='index.php'>click here</a> to refresh the screen.";
} else {
    echo "<div class='main'><br>You cannot log out because you are not logged in";
}
?>
<br><br>
</div>
</body>
</html>
