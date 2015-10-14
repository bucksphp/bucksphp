<?php

/**
In this file we'll test how cookies work in PHP
*/


// PHP has one function for dealing with cookies: setcookie()
// See https://secure.php.net/setcookie

// the expires time is a unix timestamp. if left blank, the cookie 
// will expire when the user closes their browser
$expires_at = time() + 360;
setcookie('color', 'red', $expires_at, '/');

// access cookies via the $_COOKIE superglobal
// note that cookie changes will not be available to PHP until after the browser has loaded this page
echo $_COOKIE['color'] . '<br>';

// to delete a cookie, set a past expires time
$expires_at = time() - 360;
setcookie('color', 'red', $expires_at, '/');

?>

<body style="background-color:<?php echo $_COOKIE['color'] ?>">
</body>