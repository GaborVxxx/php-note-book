<?php
/** $_COOKIE - Working With Cookies */

//The $_COOKIE superglobal in PHP is used to access cookies sent by the client's browser to the server. Cookies are small pieces of data stored on the client's computer and sent with each request to the server, allowing the server to maintain stateful information about the user across multiple requests.


//Setting Cookies
//You can set cookies using the setcookie() function. Cookies can be set with various options such as expiration time, path, domain, secure flag, and HTTP-only flag.
setcookie('cookie_name', 'cookie_value', time() + 3600, '/', 'localhost', true, true);

//Accessing Cookies
//You can access cookies sent by the client's browser using the $_COOKIE superglobal array. Each cookie is represented as a key-value pair in the array.
$value = $_COOKIE['cookie_name'];
print_r($value);

//Modifying Cookies
//To modify a cookie, you can simply set it again with the same name, effectively overriding the previous value.
setcookie('cookie_name', 'new_cookie_value', time() + 3600, '/', 'localhost', true, true);


//Deleting Cookies
//To delete a cookie, you can set its expiration time to a past date.
setcookie('cookie_name', '', time() - 3600, '/', 'localhost', true, true);

