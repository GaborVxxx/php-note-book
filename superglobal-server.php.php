<?php
/** Superglobals */

// $_SERVER - Get Server Information

echo $_SERVER['REQUEST_METHOD'] ?? ''; // <-- http method
echo '<br/>';
echo $_SERVER['SERVER_PROTOCOL'] ?? ''; // <-- http protocol
echo '<br/>';
echo $_SERVER['SERVER_NAME'] ?? ''; // <-- server host name
echo '<br/>';
echo $_SERVER['SERVER_PORT'] ?? ''; // <-- server host port
echo '<br/>';
echo $_SERVER['SERVER_SOFTWARE'] ?? ''; // <-- server software
echo '<br/>';
echo $_SERVER['SERVER_ADMIN'] ?? ''; // <-- if the admin set up it will provide admin info like amil address
echo '<br/>';
echo $_SERVER['DOCUMENT_ROOT'] ?? ''; // <-- base root
echo '<br/>';
echo $_SERVER['SCRIPT_FILENAME'] ?? ''; // <-- base root + file name
echo '<br/>';
echo $_SERVER['SCRIPT_NAME'] ?? ''; // <-- file name
echo '<br/>';
echo $_SERVER['PHP_SELF'] ?? ''; // <-- file name
echo '<br/>';
echo $_SERVER['REMOTE_ADDR'] ?? ''; // <-- request coming from
echo '<br/>';
echo $_SERVER['HTTP_CONNECTION'] ?? ''; // <-- type of connection
echo '<br/>';
echo $_SERVER['HTTP_HOST'] ?? ''; // <-- server host
echo '<br/>';
echo $_SERVER['HTTP_REFERER'] ?? ''; // <-- if user coming from another site with a link it tells you where is it coming from.
echo '<br/>';
echo $_SERVER['HTTP_USER_AGENT'] ?? ''; // <-- what user agent request coming from
echo '<br/>';
echo $_SERVER['QUERY_STRING'] ?? ''; // <-- query params after base url
echo '<br/>';
echo $_SERVER['REQUEST_URI'] ?? ''; // <-- full query after base url

// ...etc.