<?php
/** $_SESSION - Creating a Session */

//Set Cookie Parameters: Customize session cookie parameters to enhance security. Use it before session start!
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => 'example.com',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict' // 'Lax' or 'None' if appropriate
]);

//To start a session, you use the session_start() function. This function must be called at the very beginning of the script, before any output is sent to the browser.
session_start();

//Once a session is started, you can store data in the $_SESSION superglobal array.
//Part of session is to store a cooke in browser to sync the session. Name of the cooke is: PHPSESSID
$_SESSION['username'] = 'john_doe';

//Regenerate Session ID: To prevent session fixation attacks, you can regenerate the session ID.
session_regenerate_id(true);

//You can access session data on any page of your application as long as you start the session first.
echo $_SESSION['username'];

//You can modify session variables just like any other PHP variable. From any page!
$_SESSION['username'] = 'jane_doe';
echo $_SESSION['username'];  // Outputs: jane_doe

//To remove a specific session variable, you can use unset().
unset($_SESSION['username']);
echo $_SESSION['username'];

//To completely destroy a session, you use session_destroy(). This removes all session data, but the session variables will still be accessible until the script finishes executing.
session_destroy();
echo $_SESSION['username'];