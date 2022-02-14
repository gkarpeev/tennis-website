<?php

include ('server.php');

// check students

if (isset($_SESSION['username'])) {   
    $user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
}

?>