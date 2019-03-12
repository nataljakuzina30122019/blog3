<?php

require ('connect.php');
unset($_SESSION['logget_user_id']);
header('location: index.php');
