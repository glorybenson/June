<?php

require '../config/function.php';

if (isset($_SESSION['auth'])) {
    logoutSession();
    redirect('../login/index.php', 'You are now successfully sign out.');
}
