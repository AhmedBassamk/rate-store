<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/final%20project%20alagha/dashboard/login_2.php");  
