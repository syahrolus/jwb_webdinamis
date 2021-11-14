<?php
session_start();

session_unset();

session_destroy();

header('location: /jwb_webdinamis/view/index.php');
