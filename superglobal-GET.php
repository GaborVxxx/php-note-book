<?php
/** $_GET - Data From Query Params */

// http://localhost:9000/?name=you  <-- it will pick up the name value!

var_dump($_GET); // <-- het all the query param's as an array

echo $_GET['name'] ?? ""; // <-- always check before try to use it.

// Problem is php methods take is any input, so we always need to sanitise the user input 100%!
echo htmlspecialchars($_GET['name']); // <-- this method sanitise <script> tags from javascript... for example.