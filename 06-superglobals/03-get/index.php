<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// Getting variables / values from the URL(query string)
var_dump($_GET); // array(1) { ["name"]=> string(4) "john" }

echo isset($_GET['name']) ? $_GET['name'] : ''; // john
echo $_GET['name'] ?? ''; // john
