<?php

session_destroy();

header('Location: /dm_php2/');
require_once (__DIR__.'/../View/login.php');
