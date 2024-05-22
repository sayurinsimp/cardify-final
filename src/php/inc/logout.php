<?php

unset($userId);

session_destroy();
header('Location: ../../portal.php');
die();