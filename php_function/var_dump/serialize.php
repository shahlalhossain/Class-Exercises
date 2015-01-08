
<?php
// $sessionData contains a multidimensional array with session
// information for the current user.  We use serialize() to store
// it in a database at the end of the request.

$sessionData = serialize($_SESSION);

$databaseConnection = odbc_connect("web_sessions", "root", "password");
$queryStatement = odbc_prepare($databaseConnection, "UPDATE sessions SET data = ? WHERE id = ?");
$serializedSessionData = array(serialize($_SESSION), $_SERVER['PHP_AUTH_USER']);
if (!odbc_execute($queryStatement, $serializedSessionData)) {
    $queryStatement = odbc_prepare($databaseConnection, "INSERT INTO sessions (id, data) VALUES(?, ?)");
    if (!odbc_execute($queryStatement, $serializedSessionData)) {
        /* Do when something went wrong */
    }
}
?>
