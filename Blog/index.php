<?php

require_once('config/init.php');

printHTML('html/headerMenuMain.html');
printHTML('html/main.html');
printHTML('html/footer.html');

$conn-> close();

